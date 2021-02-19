#include <stdio.h>
#include <string.h>

int main(void)
{
    int pass = 0;
    char buff[16];
    
    printf("\n Enter the password : \n");
    
    fgets(buff, sizeof(buff), stdin);
    
    if(!strcmp(buff, "p@ssw0rd123!"))
    {
        printf ("\n Wrong Password \n");
    }
    else
    {
        printf ("\n Correct Password \n");
        pass = 1;
    }

    if(pass)
    {
       /* code here to give admin rights to user */
        printf ("\n Root privileges given to the user \n");
    }

    return 0;
}
