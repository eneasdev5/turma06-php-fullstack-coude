CREATE  database crud;

use crud;

-- table de usuario
CREATE TABLE `usuarios` (
  `id` INT(5) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(50) NOT NULL,
  `email` VARCHAR(50) unique NOT NULL,
  `nickname` VARCHAR(50) unique NOT NULL,
  `senha` VARCHAR(255) not null,
  PRIMARY KEY (`id`)
);

-- tabela de telefone
CREATE TABLE `telefones` (
	`id` int not null auto_increment primary key,
	`numero_telefone` VARCHAR(15) NOT NULL,
	`usuario_id` int not null,
	foreign key(`usuario_id`) references `usuarios`(`id`)
    on delete cascade on update cascade
);

-- tabela de endereco faz o relacionamento com tabela de usuarios
CREATE TABLE `enderecos` (
	`id` int not null auto_increment primary key,
	`cep` VARCHAR(15) NOT NULL,
	`rua` VARCHAR(50) NOT NULL,
	`numero` INT(10) NOT NULL,
	`complemento` VARCHAR(50) DEFAULT NULL,
	`bairro` VARCHAR(50) NOT NULL,
	`cidade` VARCHAR(50) NOT NULL,
	`estado` VARCHAR(50) NOT NULL,
	`usuario_id` int not null,
	foreign key(`usuario_id`) references `usuarios`(`id`)
    on delete cascade on update cascade
);
