set :deploy_to, "/services/about/"
set :vhost, 'about.extension.org'
server vhost, :app, :web, :db, :primary => true
