cookbook_file "/srv/www/group3_wordpress/current/wp-config.php" do
  source "wp-config.php"
  mode '0755'
  action :create
  owner 'deploy'
  group 'www-data'
end
