rand(min, max)rand(min, max)create DATABASE aula02;


-- criar tabela de usuario
create table users(
    id int not null auto_increment primary key,
    firstname varchar(255),
    nickname varchar(200) unique not null,
    password varchar(200) not null
);






insert into users values(default, "Pedro", "pedro10", md5('pedro10'));
insert into users values(default, "Jose", "jose11", md5('jose11'));

select * from users;

update users set firstname = 'Pedro Santos' where id=1;

delete from users where id=1;



