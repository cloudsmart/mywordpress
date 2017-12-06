#!/bin/bash

sudo mkdir /var/www/html/wp-content

sudo mount -t nfs4 -o nfsvers=4.1,rsize=1048576,wsize=1048576,hard,timeo=600,retrans=2 fs-6a062b23.efs.us-east-1.amazonaws.com:/ /var/www/html/wp-content

cp -rn /var/www/html/wp_content_original/* /var/www/html/wp_content

chmod -R 755 /var/www/html

chown -R apache:apache wp_content
