drop table if exists gate_table;
create table gate_table (
  id int auto_increment primary key,
  entry_time DATETIME
);

set @curDate = current_timestamp();

prepare myQ from 'insert into gate_table VALUES(null,?)';
execute myQ using @curDate;

deallocate prepare myQ;
select * from gate_table;