#!/bin/bash

echo "Database $MYSQL_DATABASE drop start..."

mysql -uroot -p"costocking_dev" -e "DROP DATABASE costocking_dev"

mysql -uroot -p"costocking_dev" -e "create DATABASE costocking_dev"
set -u
sleep 4
echo "Database $MYSQL_DATABASE import start..." 
mysql -u root -p$MYSQL_ROOT_PASSWORD $MYSQL_DATABASE < /var/lib/mysql/dev.sql
echo "Database $MYSQL_DATABASE imported" 
grep -rl 'localhost' app/config/parameters.yml | xargs sed -i 's/localhost/192.168.100.171/g'
grep -rl '192.168.229.159' app/config/parameters.yml | xargs sed -i 's/192.168.229.159/192.168.100.171/g'
exit 1
