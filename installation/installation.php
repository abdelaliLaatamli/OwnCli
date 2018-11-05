<?php 


echo "\n
#!/bin/bash \n
sudo apt-get update \n
sudo apt-get install figlet\n

sudo php -r \"copy('http://127.0.0.1:1234/lamp.php','lamp.sh');\" \n
sudo chmod +x lamp.sh \n
sudo mv lamp.sh /usr/local/bin/LampCli \n
sudo rm installCli.sh

LampCli

";

