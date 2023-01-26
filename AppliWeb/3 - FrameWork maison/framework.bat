@echo off

mkdir framework
cd framework
mkdir CSS HTML IMG JS PHP SQL
echo "<?php echo 'Wesh Monde'; ?>" > index.php
echo  > config.json


cd PHP
mkdir Controller Model View
echo "<?php echo 'Wesh Sécurité'; ?>" > index.php
echo "<?php echo 'Wesh Outils'; ?>" > Outils.php
cd Controller
echo "<?php echo 'Wesh Sécurité'; ?>" > index.php
mkdir Classe Action
cd ..
cd Model
echo "<?php echo 'Wesh Sécurité'; ?>" > index.php
mkdir Manager API
cd ..
cd View 
echo "<?php echo 'Wesh Sécurité'; ?>" > index.php
mkdir Form Liste General

echo Done!
