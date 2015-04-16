
create database forum;

CREATE TABLE `usuario` (
	`user`     varchar(100) not null,
	`senha`    varchar(50) not null,
	`nome`     varchar(100),
	`email`    varchar(100),
	`foto`     MEDIUMBLOB,
	`cadastro` date,
	primary Key(`user`)
); 

create table `Post`(
	`idPost` mediumint(8) unsigned NOT NULL auto_increment,
	`titulo` varchar(100) NOT NULL,
	`corpo` varchar(10000) NOT NULL,
	`data` date NOT NULL,
	`userP` varchar(100) NOT NULL,
	primary Key(`idPost`),
	CONSTRAINT fk_User FOREIGN KEY (`userP`) REFERENCES `usuario` (`user`)
) AUTO_INCREMENT=1;


create table `Tags`(
	`idPost` mediumint(8) unsigned NOT NULL,
	`tag` varchar(20) not null,
	primary Key(`idPost`, `tag`),
	FOREIGN KEY (`idPost`) REFERENCES `Post` (`idPost`)
);
