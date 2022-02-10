#include <stdio.h>
#include <stdlib.h>

int main (){

  int a = 3;
  double b = 3;
  long double c = 1; 
  printf("Hello, world %d\n",a);
  printf("Hello, world %d\n",sizeof(a));
  printf("Hello, world %o\n",sizeof(a));
  printf("Hello, world %x\n",sizeof(a));
  printf("Hello, world %d\n",sizeof(b));
  printf("Hello, world %d\n",sizeof(c));

  return 0;

}
