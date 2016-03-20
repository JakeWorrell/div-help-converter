**disk_free(**&lt;drive&gt;**)**

### Returns

The free disk space on the drive.

### Description

This function allows you to determine the free disk space of any drive.

The number of the **&lt;drive&gt;** is required as the only parameter, the
number **1** meaning the drive ### A, **2** with ### B, **3** with ### C, etc.

The remaining space on the drive is given in **Kbs** (in kilobytes,
each one being a total of 1024 bytes).

The current drive can be ascertained (the one where the program is being
executed) thanks to the function [getdrive()](getdrive().md).

### Example program
```
PROGRAM example_disk_free;

GLOBAL
    drive;
    free_space;

BEGIN
    // ...

    drive=getdrive();
    free_space=disk_free(drive);

    // ...
END
```


This program uses first the function [getdrive()](getdrive().md) to
determine on which drive the program is being executed (where
the variable **drive**)is stored on, and then determines the free 
disk space of that drive with **disk_free()**.

---------------------------------------


To obtain information about the size of the files etc... you must be use the
functions [get_dirinfo()](get_dirinfo().md) and [get_fileinfo()](get_fileinfo().md).

---------------------------------------


### Note The function [memory_free()](memory_free().md) allows you to determine the free RAM 
memory, the quantity of memory that is available to run the program.

---------------------------------------
See: [getdrive()](getdrive().md) - [memory_free()](memory_free().md)

