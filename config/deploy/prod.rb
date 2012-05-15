set :deploy_to, '/services/apache/vhosts/about.extension.org/wordpress/'
server 'about.extension.org', :app, :web, :db, :primary => true