drop table if exists `student`;
create table `student` (
  `no` tinyint not null auto_increment,
  `name` char(40) not null,
  `sex` char(2) not null,
  `address` char(40) not null,
  `tel` char(13) not null,
  primary key(`no`)
) auto_increment = 6;

insert `student` values(1,'김철수','남자','경기도 안산시 중앙동 47번길','010-1111-1111' );
insert `student` values(2,'김미영','여자','서울시 강남구 서초동 12번길','010-2222-2222' );
insert `student` values(3,'박수한','남자','경기도 안산시 상록구 7번길','010-3333-3333' );
insert `student` values(4,'이기적','남자','경기도 군포시 산본천로 73번길','010-4444-4444' );
insert `student` values(5,'김한미','여자','경기도 안산시 중앙동 123번길','010-5555-5555' );

update `student` set name='최수현' where name='김미영'; 

delete from `student` where no=5;

select * from `student` where sex='남자';