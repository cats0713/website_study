drop table if exists `bodyInfo`;

create table `bodyInfo`(
  `no` tinyint not null auto_increment,
  `name` char(10) not null,
  `gender` enum('남','여') not null,
  `height` int(4) unsigned not null,
  `weight` int(4) unsigned not null,
  `blood` enum('A','B','AB','O') not null,
  primary key(`no`)
)auto_increment = 3;

insert into `bodyInfo` values (1,'aaa','남',184,83,'B');
insert into `bodyInfo` values (2,'bbb','여',160,54,'A');

