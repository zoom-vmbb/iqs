#include <stdio.h>
#include <string.h>

int main(void)
{
    int pass = 0;
    char buff[16];
    
    printf("\n Enter the password : \n");
    
    gets(buff);
    
    if(strlen(buf) > 16)
    {
        printf ("\n Password entry too long. Please limit to 16 characters \n");
        return 0;
    }

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
