
create table Usuario(
	idUsuario int ;
	nome varchar(100);
	email varchar(100);
	foto MEDIUMBLOB;
	cadastro date;
	senha varchar(50);
	primary Key(idUsuario);
);

create table Post(
	idPost int;
	titulo varchar(100);
	corpo varchar(1000);
	postado date;
	idUsuario int;
	primary Key(idPost);
	FOREIGN KEY (idUsuario) REFERENCES Usuario (idUsuario));
);


create table Tags(
	idPost int;
	tag varchar(20);
	primary Key(idPost, tag);
	FOREIGN KEY (idPost) REFERENCES Post (idPost));
);