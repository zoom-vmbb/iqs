The following code is compiled and set as a setuid binary in a Linux environment. It takes in a user-supplied
filename and opens the file using root privileges if the current user is allowed access.

#include <unistd.h>
#include <stdio.h>
#include <string.h>
#include <sys/types.h>
#include <sys/stat.h>
#include <fcntl.h>

int do_important_stuff() 
{
  // Calculate some important stuff here
  int importantstuff = 0;
  usleep(1);
  return(importantstuff);
}

int main(int argc, char ** argv) 
{
  int fd;
  char buf[255];
  int size;

  if(argc != 2) 
  {
    printf("usage: %s filename\n", argv[0]);
    return -1;
  }

  if(!access(argv[1], R_OK)) 
  {
    do_important_stuff();
    fd = open(argv[1], O_RDONLY);
    
    if(fd == -1) 
    {
      perror("open failed");
      return -1;
    }
  
    while((size = read(fd, buf, 255)) != 0) 
    {
      write(1, buf, size);
    }
  
   close(fd);
  
   return 0;
  }
  
  perror("access failed");
  return -1;
}
