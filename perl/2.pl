#!/usr/bin/perl

# %myhash = ("a",1 ,"b",2, "c",3);
# @userarr = (1,2,3,4,5);

# $userarr[9] = 9;
# print $userarr,"\n";

# $mycont = 3;
# print $mycont,"\n";

# print @userarr;
# $howmany = $myhash{"c"};
# print "$howmany\n"

# #$howmany = $myhash{"a"};

# $myhash{"a"} = 9;
# print $myhash{"a"},"\n";
# print %myhash,"\n";

# print <<end_of_hell;
# Hello world.\n
# I am here to serve you but not to conquer.
# There were many kings and queens in the world,
# but I want to be a real friend of yours.dsds
# end_of_hell

# print "Ending our greeting\n";

# print "Say yes or No : ";
# $answer = <STDIN>;
# chomp $answer;
# if($answer eq 'yes'){
#   print <<EOY;
# You said $answer.
# I will keep going on.
# EOY
# }else{print "you said no\n"};

# @arrA = ("hello", "there","i\'m","OK","\n");
# print "@arrA";
# print @arrA;
# %fruits = ( "apple", 3, "pear", 5, "banana", 2 );
# print "%fruits\n";

# @a = (1,2,3);
# $b = 2;
# $a = 10;
# $b = $a;
# print "$b\n";

# $a = "hello" . "world";
# print $a;
# $a = "hello" x3;
# print $a;
# $a .= "World\n";
# print $a;
# $b = 0;
# print ++($b = 'a99');

# $long = "tell me what\'s up";

# if($long =~ /hat/){
#   print "Yes\n";
# }else{
#   print "no\n";
# }

$long = "*Where is my baby, Oh Baby";
print $long, "\n";

if($long =~ tr/a-z/A-Z/){
  print "$long\n";
}else{
  print "no\n";
}