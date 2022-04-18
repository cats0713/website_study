drop table if exists member2;
create table member2(
  mem_id char(8) not null primary key,
  mem_name varchar(10) not null,
  height tinyint unsigned null check(height >=100),
  email char(30) null unique,
  phone1 char(3) null
);

insert into member2 values ('BLK','블랙핑크',163,'pink@naver.com');
insert into member2 values ('TWC','크와이스',99,'twc@naver.com');
insert into member2 values ('APN','에이핑크',153,'pink@naver.com');

alter table member2 add constraint check (); 

create view v_viewtest as select B.mem_id '멤버 ID', M.mem_name '이름',B.prod_name '제품' from buy B join member M on B.mem_id = M.mem_id;

alter view v_height167 as select * from member where height >= 167 with check option;