create table if not exists trigger_table (
  id INT,
  txt varchar(10)
  );

  insert into trigger_table values(1, '레드벨벳');
  insert into trigger_table values(2, '잇지');
  insert into trigger_table values(3, '블랙핑크');

  drop trigger  if exists trigger_test;
  delimiter $$
  create trigger trigger_test after delete on trigger_table for each row
  begin set @msg = '가수 그룹이 삭제됨';
  end $$
  delimiter ;

set @msg = '';
insert into trigger_table values(4,'마마무');
select @msg;
update trigger_table set txt = '블핑' where id=3;
select @msg; 

delete from trigger_table where id=4;
select @msg;

create table singer (select mem_id, mem_name, mem_number, addr from member);

create table backup_singer(
  mem_id char(8) not null,
  mem_name varchar(10) not null,
  mem_number int not null,
  addr char(2) not null,
  modType char(2),
  modDate DATE,
  modUser varchar(30)
);

drop trigger if exists singer_updateTrg;
delimiter $$

create trigger singer_updateTrg after update on singer for each row
begin insert into backup_singer values (OLD.mem_id, OLD.mem_name, OLD.mem_number, OLD.addr, '수정', CURDATE(), CURRENT_USER());
end $$
delimiter ;


drop trigger if exists singer_deleteTrg;
delimiter $$
create trigger singer_deleteTrg after delete on singer for each row
begin insert into backup_singer values(OLD.mem_id, OLD.mem_name, OLD.mem_number, OLD.addr, '삭제', CURDATE(), CURRENT_USER());
end $$

delimiter ;