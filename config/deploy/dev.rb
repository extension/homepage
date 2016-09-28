set :deploy_to, "/services/homepage/"
if(branch = ENV['BRANCH'])
  set :branch, branch
else
  set :branch, 'master'
end
set :vhost, 'dev-homepage.extension.org'
set :deploy_server, 'dev-homepage.aws.extension.org'
server deploy_server, :app, :web, :db, :primary => true
set :port, 22
