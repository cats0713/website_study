drop table if exists `telList`;
create table `telList`(
  `no` tinyint not null auto_increment,
  `name` char(5) not null,
  `mobile` char(13) not null,
  `address` varchar(10),
  primary key(`no`)
)auto_increment = 3;

insert into `telList` values (1,'zard','010-5598-3245','도쿄');
insert into `telList` values (2,'cdr','010-3245-2345','안산');