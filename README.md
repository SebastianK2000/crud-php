PL

Aplikacja pozwala na dodawanie, edytowanie oraz usuwanie pozycji z bazy. 

![image](https://github.com/SebastianK2000/crud-php/assets/127401994/49088f34-69c4-4482-a304-607cbe35ba48)

![image](https://github.com/SebastianK2000/crud-php/assets/127401994/65e61c12-4931-4178-a8fc-864c2a195007)


Aby uruchomić aplikację na swoim urządzeniu należy stworzyć nowy folder przykładowo o nazwie "crud". Wejść w C/xampp/htdocs i tam utworzyć folder. Otworzyć wiersz poleceń oraz wejść w dany folder i napisać komendę "git clone https://github.com/SebastianK2000/crud-php.git". 
Pliki z aplikacją zostaną pobrane. W plikach jest również podpięta baza danych jednak jeżeli ktoś zechciałby samodzielnie utworzyć bazę wystarczy utworzyć ją w phpMyAdmin oraz wpisać: 

CREATE TABLE `crud` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
)

W phpMyAdmin eksportować plik z bazą danych oraz tabelą oraz wkleić w folder. Należy pamiętać o włączeniu SQL oraz Apache!! 

![image](https://github.com/SebastianK2000/crud-php/assets/127401994/a8f5dc4a-5c8c-4e53-938b-5d3cf07c5ab8)

ENG

The application allows you to add, edit and delete items from the database. 

![image](https://github.com/SebastianK2000/crud-php/assets/127401994/49088f34-69c4-4482-a304-607cbe35ba48)

![image](https://github.com/SebastianK2000/crud-php/assets/127401994/65e61c12-4931-4178-a8fc-864c2a195007)

To run the application on your device, create a new folder, for example, named "crud". Go to C/xampp/htdocs and create the folder there. Open the command line and enter the folder and write the command "git clone https://github.com/SebastianK2000/crud-php.git". 
The application files will be downloaded. In the files there is also a database plugged in, however, if someone would like to create the database themselves, just create it in phpMyAdmin and type: 

CREATE TABLE `crud` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
)

In phpMyAdmin, export the database and table file and paste into a folder. Be sure to enable SQL and Apache!!! 

![image](https://github.com/SebastianK2000/crud-php/assets/127401994/a8f5dc4a-5c8c-4e53-938b-5d3cf07c5ab8)
