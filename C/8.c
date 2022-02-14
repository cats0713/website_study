#include <stdio.h>
#include <stdlib.h>

int main (){
  int arrA[3];
  arrA[0]=1;
  arrA[1]=2;
  printf("%d + %d = %d\n",arrA[0],arrA[1], arrA[0] + arrA[1]);
  printf("arrA[2] = %d\n",arrA[2]);
  printf("arrA[3] = %d\n",arrA[3]);

  int arr[5];
  int sum = 0;

  arr[0] = 10, arr[1] = 20, arr[2] = 30 , arr[3] = 40, arr[4] = 50;

  for(int i = 0; i < 5; i++){
    sum += arr[i];
  }
  printf("배열 총 합 : %d\n", sum);

  int arr1[5] ={1,2,3,4,5};
  int arr2[] = {1,2,3,4,5,6,7,8,9};
  int arr3[] = {};
  arr3[1] = 1;
  int arr1length, arr2length;


  arr1length = sizeof(arr1) / sizeof(int);
  arr2length = sizeof(arr2) / sizeof(int);

  printf("%d\n",sizeof(arr1));
  printf("%d\n",sizeof(int));
  printf("%d\n",arr1length);
  printf("%d\n",arr2length);

  for(int i=0;i<arr1length;i++){
    printf("%d",arr1[i]);
  }

  printf("\n");

  for(int i=0;i<arr2length;i++){
    printf("%d",arr2[i]);
  }

  printf("\n");
  
  printf("%d %d",arr3[1],arr3[3]);


  return 0;
}