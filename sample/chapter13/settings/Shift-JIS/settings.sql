-- �f�[�^�x�[�X�̍쐬
drop database if exists my_blog;
create database my_blog default character set utf8;

-- �f�[�^�x�[�X�̑I��
use my_blog;

-- �e�[�u���̍쐬
drop table if exists posts;
create table posts (
  id int(11) unsigned auto_increment primary key,
  user_id int(11) unsigned not null,
  title varchar(255) not null,
  content longtext not null,
  created datetime,
  modified datetime
) engine=InnoDB default charset=utf8;

drop table if exists users;
create table users (
  id int(11) unsigned auto_increment primary key,
  name varchar(255) not null,
  email varchar(100) not null unique,
  password varchar(255) not null,
  created datetime,
  modified datetime
) engine=InnoDB default charset=utf8;


-- ���R�[�h�̑}��
insert into posts(
  user_id,
  title,
  content,
  created,
  modified
)
values (
  2,
  '�u���O�n�߂܂���',
  '���ɁA�u���O���n�߂܂����B�����X�V����̂Ŋy���݂ɂ��Ă��������ˁB',
  '2017/04/07 10:00:00',
  '2017/04/07 10:00:00'
),
(
  1,
  '2��ڂ̓��e�I',
  '����ɂ��́A2��ڂ̃u���O�ł��ˁB�����Ƒ����Ă܂���B',
  '2017/04/08 10:00:00',
  '2017/04/08 10:00:00'
),
(
  3,
  '���낻��E�E�E',
  '����ɂ��́A���낻��l�^���s���Ă��܂����B',
  '2017/04/09 10:00:00',
  '2017/04/09 10:00:00'
),
(
  3,
  '�܂�����Ă܂�',
  '1�x�A���̃u���O����߂悤�Ǝv���܂��������A�܂���邱�Ƃɂ��܂����B',
  '2017/04/11 10:00:00',
  '2017/04/11 10:00:00'
),
(
  3,
  '�v���Ԃ�̓��e',
  '���v���Ԃ�ł��B������Ɠ����󂢂Ă��܂��܂����ˁB',
  '2017/05/01 10:00:00',
  '2017/05/01 10:00:00'
),
(
  3,
  '�܂��A�󂢂��Ⴂ�܂���',
  '���v���Ԃ�ł��B�܂��܂������󂢂Ă��܂��܂����ˁB',
  '2017/05/31 10:00:00',
  '2017/05/31 10:00:00'
),
(
  4,
  '�����������X�����I',
  '����ɂ��́A���������p�X�^�̂��X�𔭌����܂����B',
  '2017/07/15 10:00:00',
  '2017/07/15 10:00:00'
),
(
  5,
  '��l�����Ă܂�',
  '����ɂ��́B���A�k�C���ɂ��Ă܂��B��l�����Ă܂��B',
  '2017/07/15 10:00:00',
  '2017/07/15 10:00:00'
),
(
  4,
  '�܂��A�s�����Ⴂ�܂���',
  '����ɂ��́A������������������p�X�^�̂��X�ɁA�܂��s�����Ⴂ�܂����B',
  '2017/07/17 10:00:00',
  '2017/07/17 10:00:00'
),
(
  3,
  '���E�ł�',
  '����ɂ��́A�����u���O�𑱂���̂͌��E�ł��B',
  '2017/07/18 10:00:00',
  '2017/07/18 10:00:00'
);

insert into users(
  name,
  email,
  password,
  created,
  modified
)
values (
  '�O�c',
  'maeda@dummy.com',
  'maemae',
  '2017/04/03 10:00:00',
  '2017/07/15 10:00:00'
),
(
  '�哇',
  'oshima@dummy.com',
  'oshioshi',
  '2017/04/05 10:00:00',
  '2017/04/05 10:00:00'
),
(
  '����',
  'takahashi@dummy.com',
  'takataka',
  '2017/04/07 10:00:00',
  '2017/05/10 10:00:00'
),
(
  '�w��',
  'sashihara@dummy.jp',
  'sashisashi',
  '2017/07/14 10:00:00',
  '2017/07/20 10:00:00'
),
(
  '�R�{',
  'yamamoto@dummy.net',
  'yamayama',
  '2017/07/14 10:00:00',
  '2017/08/10 10:00:00'
);

-- ���R�[�h�̈ꗗ�\��
select * from posts;
select * from users;
