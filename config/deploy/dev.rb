set :deploy_to, "/services/homepage/"
if(branch = ENV['BRANCH'])
  set :branch, branch
else
  set :branch, 'master'
end
set :vhost, 'dev.extension.org'
server vhost, :app, :web, :db, :primary => true
