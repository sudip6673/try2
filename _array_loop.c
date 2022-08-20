#include<stdio.h>
#include<conio.h>
int main()
{
	int i,x[5];
	for(i=0;i<=4;i++)
	{
		printf("Enter the %d no:-",i+1);
		scanf("%d",&x[i]);
	}
	printf("The element are:-");
	for(i=0;i<=4;i++)
	{
		printf("\n%d",x[i]);
	}
	getch();
	return 1;
}
