#include <stdio.h>
#include <stdlib.h>

int main (){

  int num;
  int numSum;

  printf("몇 단? ");
  scanf("%d",&num);

  for(int i = 0; i < 9; i++){
    numSum = ( i+1 ) * num;
    printf("%d x %d = %d\n",num, i+1, numSum);
  };
  return 0;
}