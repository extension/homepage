set :deploy_to, "/services/homepage/"
set :vhost, 'extension.org'
server vhost, :app, :web, :db, :primary => true
set :port, 24
