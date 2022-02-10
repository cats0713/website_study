#include <stdio.h>
#include <stdlib.h>

int main(){
	double red;
	double area;

	printf("원의 반지르 입력: ");
	scanf("%lf",&red);
	

	area = red * red * 3.141592;
	printf("원의 넓이 : %f",area);
	return 0;
}
