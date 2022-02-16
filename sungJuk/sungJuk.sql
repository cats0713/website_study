create table `sungJuk`(
  `no` int(3) not null auto_increment,
  `name` char(10) not null,
  `c` tinyint not null,
  `js` tinyint not null,
  `php` tinyint not null,
  primary key(`no`)
)auto_increment = 3;

insert into `sungJuk` values (1, 'aaa', 90, 95, 80);
insert into `sungJuk` values (2, 'bbb', 80, 50, 36);