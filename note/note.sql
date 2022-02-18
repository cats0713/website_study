drop table if exists `note`;

create table `note`(
  `no` tinyint unsigned not null auto_increment,
  `name` char(10) not null,
  `apple` tinyint unsigned not null,
  `samsung` tinyint unsigned not null,
  `lg` tinyint unsigned not null,
  primary key(`no`),
  key `idx_name` (`name`)
)auto_increment = 3;

insert into `note` value (1,'aaa',1,1,1);
insert into `note` value (2,'bbb',3,1,0);