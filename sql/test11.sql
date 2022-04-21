create table member(
  mem_id tinyint auto_increment primary key not null,
  mem_name char(10) not null,
  mem_birt date not null,
  mem_gender char(2) not null,
  mem_addr char(3) not null
);

insert into member values (null, '김성희','1999-10-19','여자','서울'); 
insert into member values (null, '김이산','1994-12-13','남자','경기'); 
insert into member values (null, '강선태','1990-03-01','남자','서울'); 
insert into member values (null, '김라희','1999-07-19','여자','강원'); 
insert into member values (null, '이미연','2000-06-09','여자','서울'); 

select mem_name, mem_birt, mem_gender, mem_addr from member group by mem_gender order by mem_birt; 

create view v_member as select mem_name, mem_addr, mem_gender from member;

select * from member order by mem_gender;