#include <stdio.h>
#include <stdlib.h>



int main (){
  int result = Add(3,4);

  printf("덧셈결과 : %d\n",result);
  result = Add(5,8);
  printf("덧셈결과 : %d\n",result);

  return 0;
}

int Add (int num1, int num2){
  return num1 + num2;
}