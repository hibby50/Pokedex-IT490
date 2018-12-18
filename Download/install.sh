#!/bin/bash
command1="tar -zxvf testtar.tar.gz -C /tmp"
$command1
mv /tmp/var/www/html/* /var/www/html/Download
