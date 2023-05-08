-- �f�[�^�x�[�X�̍쐬
drop database if exists my_bank;
create database my_bank default character set utf8;

-- �f�[�^�x�[�X�̑I��
use my_bank;

-- �e�[�u���̍쐬
drop table if exists account_a;
create table account_a (
  id int(11) unsigned auto_increment primary key,
  name varchar(255) not null,
  balance bigint(20) unsigned not null,
  modified timestamp
) engine=InnoDB default charset=utf8;

drop table if exists account_b;
create table account_b (
  id int(11) unsigned auto_increment primary key,
  name varchar(255) not null,
  balance bigint(20) unsigned not null,
  modified timestamp
) engine=InnoDB default charset=utf8;

-- ���R�[�h�̑}��
insert into account_a(name, balance) values('�H��', 100000);
insert into account_b(name, balance) values('�O�c', 100000);

-- ���R�[�h�̈ꗗ�\��
select * from account_a;
select * from account_b;

