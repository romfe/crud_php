# English
## Simple CRUD implementation for a product management web application using PHP, CSS and MySQL.

For this project, Apache 2.4.29 and PHP 7.2.24 were used. Development was conducted using both Windows 10 and Ubuntu 18.04
### Database creation
MySQL  Ver 14.14 Distrib 5.7.33 was used for the database. The following command lines were executed:

```
mysql> create database crud_products;
mysql> use crud_products;
mysql> create table products(id int not null auto_increment primary key,  title varchar(25) not null, description varchar(4000), image varchar(150), stock int not null);
```
### Next steps:
This project can be improved by:
    -Sanitizing the user inputs to prevent SQL injection attacks.
    -Adding a file management system that deletes the removed pictures from the "images" directory. Currently, only the table registry is deleted.


# Português(BR)
## Simples implementação de uma aplicação web para gerenciamento de produtos usando PHP, CSS e MySQL.

Para este projeto foram utilizados Apache 2.4.29 e PHP 7.2.24. O desenvolvimento foi feito em Windows 10 e Ubuntu 18.04
### Criação do banco de dados
Foi utilizado MySQL para criação do banco de dados. As seguintes linhas de comando foram executadas:

```
mysql> create database crud_products;
mysql> use crud_products;
mysql> create table products(id int not null auto_increment primary key,  title varchar(25) not null, description varchar(4000), image varchar(150), stock int not null);
```
### Próximos passos:
Este pojeto pode ser melhorado das seguintes maneiras:
    -Sanitizando o input dos usuários para previnir ataques de injeção de SQL.
    -Adicionando um sistema de gerenciamento de arquivos que deleta as imagens removidas da pasta. Atualmente, elas são deletadas apenas da tabela.
