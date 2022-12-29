
#_1copia e cola do mysql ultimas querys;

#_2consultas uteis;

/*

#_1


create table ALUNOS_INSCRICAO
(
USR_ID int auto_increment primary key,
USR_NOME varchar(70) not null,
USR_DOCUMENTO varchar(14) not null,
USR_TELEFONE1 varchar (14) not null,
USR_DATA_CADASTRO TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
USR_REDACAO text,
USR_NOTA int,
USR_STATUS INT,
foreign key(USR_STATUS) references ALUNOS_INSCRICAO_STATUS(USR_STATUS)
)
;

create table ALUNOS_INSCRICAO_STATUS
(
USR_STATUS int auto_increment primary key,
TEXTO_STATUS varchar(250)
)
;

insert into ALUNOS_INSCRICAO_STATUS
values
(1, 'em analise');


insert into ALUNOS_INSCRICAO 
(
USR_NOME,
USR_DOCUMENTO,
USR_TELEFONE1,
USR_DATA_CADASTRO,
USR_REDACAO,
USR_NOTA,
USR_STATUS
)
values
('OLIVEIRA','111.111.111.11', '(11)1111-1111', CURDATE(), 
'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam impedit omnis dolorem ex alias vero eaque quod blanditiis distinctio hic praesentium tempore, placeat exercitationem necessitatibus optio ullam. Aliquam, nesciunt enim.',
2.3,1)

#use CADASTRAR_ALUNO_INSCRICAO
#select * from ALUNOS_INSCRICAO;
#select * from ALUNOS_INSCRICAO_STATUS;

ALTER TABLE ALUNOS_INSCRICAO
MODIFY COLUMN  USR_NOTA float;

*/






/*
#_2



#select * from ALUNOS_INSCRICAO;
#select * from ALUNOS_INSCRICAO_STATUS;


select	USR_NOME 				   AS 'Nome',
		USR_DOCUMENTO   		   AS 'Documento',
        month(USR_DATA_CADASTRO)   AS 'Mes cadastrado',
        AI.USR_NOTA        		   AS 'Nota',
        TEXTO_STATUS			   AS 'Estado da avaliação'
FROM    ALUNOS_INSCRICAO 		   AS AI
INNER JOIN ALUNOS_INSCRICAO_STATUS AS AIS
where month(USR_DATA_CADASTRO) > 9

*/