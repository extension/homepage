set :stages, %w(prod demo)
set :default_stage, "demo"
require 'capistrano/ext/multistage'

require 'capatross'
require "delayed/recipes"
 
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


namespace :deploy do
  
  
  # Link up various configs (valid after an update code invocation)
  task :link_and_copy_configs, :roles => :app do
    run <<-CMD
    rm -rf #{release_path}/config/database.yml && 
    rm -rf #{release_path}/wp-config.php &&
    ln -nfs /services/config/#{application}/wordpress/wp-config.php #{release_path}/wp-config.php &&
    ln -nfs /services/config/#{application}/wordpress/.htaccess #{release_path}/.htaccess &&
    ln -nfs /services/wordpress/uploads #{release_path}/wp-content/uploads &&
    ln -nfs /services/config/#{application}/wordpress/robots.txt #{release_path}/robots.txt
    CMD
  end
  
  [:start, :stop].each do |t|
    desc "#{t} task is a no-op with mod_rails"
    task t, :roles => :app do ; end
  end
  
 
end



