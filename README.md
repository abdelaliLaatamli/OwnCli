# OwnCli
this repo for own commend line

# Install Direct
``````
sudo php -r "copy ('http://127.0.0.1:1234','installCli.sh');"
sudo chmod +x installCli.sh
./installCli.sh
``````

# Instalation

- To find file .bashrc : `````` ls -al `````` 
- Open .bashrc in vi and add line in last of file : `````` alias (own Commend) = 'source ~/filebash.sh' ``````
- Or  ``````cp lamp.sh /usr/local/bin/LampCli``````
  > in this case the commend wil be LampCli of file lamp.sh
- Read this :
  > - This Article [How to create Own Cli](https://medium.com/devnetwork/how-to-create-your-own-custom-terminal-commands-c5008782a78e)
  > - This Article [How to add to system](https://www.geeksforgeeks.org/custom-commands-linux-terminal)
  > - This Article [Typing in Cli Color](https://misc.flogisoft.com/bash/tip_colors_and_formatting)
  
