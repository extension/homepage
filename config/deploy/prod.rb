set :deploy_to, "/services/homepage/"
set :branch, 'master'
set :vhost, 'www.extension.org'
set :deploy_server, 'homepage.awsi.extension.org'
server deploy_server, :app, :web, :db, :primary => true
