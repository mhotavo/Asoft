<?php  


#instalar git
sudo apt-get install git-core

#crear o ingresar en la carpeta q queremos clonar el repositorio
git clone https://github.com/mhotavo/Asoft.git

#instalar git gui
sudo apt-get install gitk giggle git-cola git-gui gitg

#abrir el gui de git mediante el comando, para eso tenemos q estar en la carpeta donde clonamos el git
git gui

#poner el nombre del usuario en git
git config --global user.name nombre

#colocar email del usuario
git config --global user.email email


#para asegurarnos de que no exista ningún cambio que nosotros no tengamos
git pull origin master

#subimos los cambios
git push origin master


?>