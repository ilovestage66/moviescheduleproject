# Installation Guide

## Environment Requirements

- Raspberry Pi Zero 2 W
- Apache2
- PHP
- MariaDB
- Git (optional)

## Steps

1. Installation steps:
sudo apt update
sudo apt install apache2 php mariadb-server git unzip -y
git clone https://github.com/ilovestage66/moviescheduleproject.git
sudo cp -r moviescheduleproject/* /var/www/html/
sudo chown -R www-data:www-data /var/www/html
sudo mariadb < /var/www/html/sql/create_tables.sql
http://your-RPi-IP-address/


if apache2 error use:
sudo mkdir -p /var/log/apache2
sudo systemctl restart apache2
