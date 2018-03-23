/* 
 * Função: Arquivo com a estrutura do banco de dados
 * Author: Paulo Monteiro
 * Created: 22/03/2018
 */

/** DDLs **/
/* Comando para CRIAR a base(schema) do banco de dados */
create database aula07;

/* Comando para SELECIONAR a base */
use aula07;

/* Comando para CRIAR a tabela no banco de dados */
create table produto(
    id int primary key auto_increment,
    nome varchar(150) not null,
    matricula int(50) not null,
    telefone varchar(50) not null
); 

/** DMLs **/

/* Inserir os dados no banco */
insert into produto (id, nome, matricula, telefone) values (null, 'Paulo', '123', '1111-1111');



