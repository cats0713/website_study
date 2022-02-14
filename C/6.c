#include <stdio.h>
#include <stdlib.h>

int main(){
  
  int numS = 4;

  int str = printf("hello world\n");
  int num = printf("%d\n",numS);

  printf("%d\n",str);
  printf("%d",num);

  return 0;

}