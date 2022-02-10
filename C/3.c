#include <stdio.h>
#include <stdlib.h>

int main(){
	//int num1;
	//int num2;
	//int result;
	
	char num1;
	char num2;
	short result;

	printf("첫번째 숫자를 입력하시오 : ");
	scanf("%d", &num1);
	printf("두번째 숫자를 입력하시오 : ");
	scanf("%d", &num2);
	result = num1 + num2;
	
	printf("합계 : %d", result );
	return 0;
}
