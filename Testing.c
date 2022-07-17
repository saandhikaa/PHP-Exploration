#include <stdio.h>

int main(){
    int a;
    for (int s = 1; s <= 10; a+=s, s++);
    printf("\n%d",a);

    int sa = a ? a : 0;
    printf("\n%d",sa);
}