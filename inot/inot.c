#include <stdio.h>
#include "inotify.h"

int main(void)
{
  int in_handle = inotify_init();

  if(in_handle == -1) {
    printf("ERROR: INOTIFY_INIT()\n");
    return 0;
  }
  printf("running inotify watchers\n");
  return 0;
}
