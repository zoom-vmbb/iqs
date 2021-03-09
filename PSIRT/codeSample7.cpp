// The following code is compiled and set as a setuid binary in a Linux environment. It takes in two user-supplied
// string arguments and outputs the contents of buffers in memory. Identify any existing vulnerabilities.

int main(int argc, char** argv) 
{
  char lower[] = “BBBBB”;
  char low[] = “AAAAA”;
  char buf[10];
  strncpy(buf, argv[1], sizeof(buf));
  strncat(buf, argv[2], sizeof(buf) – strlen(buf) – 1);
  printf(“buf: %s\n”, buf);
  printf(“low: %s\n”, low);
  printf(“lower: %s\n”, lower);
  return 0;
}
