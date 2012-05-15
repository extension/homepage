set :deploy_to, '/services/apache/vhosts/about.demo.extension.org/wordpress/'
server 'about.demo.extension.org', :app, :web, :db, :primary => true

namespace :deploy do  
  # Link up various configs (valid after an update code invocation)
  task :link_and_copy_configs, :roles => :app do
    run <<-CMD
    rm -rf #{release_path}/config/database.yml && 
    rm -rf #{release_path}/wp-config.php &&
    ln -nfs /services/config/#{application}demo/wordpress/wp-config.php #{release_path}/wp-config.php &&
    ln -nfs /services/config/#{application}demo/wordpress/.htaccess #{release_path}/.htaccess &&
    ln -nfs /services/wordpress/uploads #{release_path}/wp-content/uploads &&
    ln -nfs /services/config/#{application}demo/wordpress/robots.txt #{release_path}/robots.txt
    CMD
  end
end