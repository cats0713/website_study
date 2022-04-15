drop procedure if exists ifProc1;
delimiter $$
create procedure ifProc1()
begin
  declare i int;
  declare hap int;
  set i =0;
  set hap=0;

  myWhile:
  while (i < 100) do
    if( i%4 = 0) then
      set i = i+1;
      iterate myWhile;
    end if;
    set hap = hap + i;
    set i = i + 1;
    if(hap >1000) then
      leave myWhile;
    end if;
  end while;
  
  select hap;
end $$
delimiter ;
call ifProc1();