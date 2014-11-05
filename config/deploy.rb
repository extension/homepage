set :stages, %w(prod dev)
set :default_stage, "dev"
require 'capistrano/ext/multistage'

require 'capatross'

set :application, "about"
set :repository,  "git@github.com:extension/about.git"
set :branch, "master"
set :scm, "git"
set :user, "pacecar"
set :use_sudo, false
set :keep_releases, 3
ssh_options[:forward_agent] = true
set :port, 24
#ssh_options[:verbose] = :debug

after "deploy:update_code", "deploy:link_and_copy_configs"
after "deploy:update_code", "deploy:cleanup"
after 'deploy',             'deploy:restart'

namespace :deploy do

   # Override default restart task
   desc "Restart Apache"
   task :restart, :roles => :app do
     invoke_command '/usr/sbin/service apache2 restart', via: 'sudo'
   end

  # Link up various configs (valid after an update code invocation)
  task :link_and_copy_configs, :roles => :app do
    run <<-CMD
    rm -rf #{release_path}/config/database.yml &&
    rm -rf #{release_path}/wp-config.php &&
    ln -nfs /services/about/shared/config/wp-config.php #{release_path}/wp-config.php &&
    ln -nfs /services/about/shared/config/.htaccess #{release_path}/.htaccess &&
    ln -nfs /services/about/shared/config/robots.txt #{release_path}/robots.txt &&
    ln -nfs /services/about/shared/uploads #{release_path}/wp-content/uploads
    CMD
  end

  [:start, :stop].each do |t|
    desc "#{t} task is a no-op with mod_rails"
    task t, :roles => :app do ; end
  end


   # Override default web enable/disable tasks
   namespace :web do

      desc "Put Apache in maintenancemode by touching the maintenancemode file"
      task :disable, :roles => :app do
        invoke_command "touch /services/maintenance/#{vhost}.maintenancemode"
      end

      desc "Remove Apache from maintenancemode by removing the maintenancemode file"
      task :enable, :roles => :app do
        invoke_command "rm -f /services/maintenance/#{vhost}.maintenancemode"
      end

   end

end