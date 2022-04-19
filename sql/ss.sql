use market_db;

drop procedure if exitis cursor_proc();

delimiter &&
create procedure cursor_proc()
begin
  declare memNumber INT;
  declare cnt INT default 0;
  declare totNumber INT default 0;
  declare endOfRow BOOLEAN default false;

  declare memberCuror CURSOR for select mem_number from member;
  declare continue handler for not found set endOfRow = ture;

  open memberCuror;

  cursor_loop: loop fatch memberCuror into memNumber;

  if endOfRow then leave cursor_loop; end if;

  set cnt = cnt+1;
  set totNumber = totNumber+memNumber;

  end loop cursor_loop;

  select (totNumber/cnt) as '회원의 평균 인원 수';

  close memberCuror;

  end $$

  delimiter ;