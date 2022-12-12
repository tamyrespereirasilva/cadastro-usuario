# Sistema de cadastro de usuario

Sistema Crud de usuário.
<br/>
Linguagens e tecnologias:
PHP, JS, HTML, CSS, BOOTSTRAP

Aqui, utilizei o XAMPP, que já traz o PHP, o MySQL, e o phpMyAdmin para manipular o banco de dados.

Script do banco de dados:
<br/>
CREATE DATABASE cadastrousuario;
CREATE TABLE usuario ( id int(11) NOT NULL, nome varchar(200) NOT NULL, cpf varchar(11) NOT NULL, email varchar(100) NOT NULL, senha varchar(8) NOT NULL, login varchar(11) NOT NULL ; ALTER TABLE usuario ADD PRIMARY KEY (id); ALTER TABLE usuario MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
