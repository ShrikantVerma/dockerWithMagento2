Installation Docker Costocking
1.	Extraire le fichier archive, ceci créera un dossier costocking
2.	Construire l’image
sudo docker build -t costocking:v1 .
3.	Construire le conteneur
dans le dossier costocking : sudo docker-compose up
4.	Si besoin, alimenter la base de données avec les données de démo
Connectez vous au conteneur
Sudo docker exec –it costocking /bin/sh
Ouvrez mysql
mysql -u root -p , mot de passe cocorico
drop database costocking_dev ;
create database costocking_dev ;
exit ;
mysql -u root -p costocking_dev < /var/lib/mysql/dev.sql
Puis entrer les commandes suivantes :
5.	Dans app/config/parameters.yml, remplacer localhost par l’adresse ip du conteneur sur les lignes suivantes, ex :
cocorico.assets_base_urls: 'http://192.168.100.171'
router.request_context.host: 192.168.100.171
7.	entrez l’adress ip dans le navigateur, le site sera affiché
8. adresse ip:9001 => Supervizor
9. adresse ip:8080 => adminer
