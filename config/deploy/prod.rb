set :deploy_to, "/services/homepage/"
set :branch, 'master'
set :vhost, 'extension.org'
set :deploy_server, 'homepage.aws.extension.org'
server deploy_server, :app, :web, :db, :primary => true
