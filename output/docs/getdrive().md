**getdrive(****)**

### Returns

The number of the current drive.

### Description

This function allows you to determine which is the drive that is being
currently used, this is returned as a number, where **1** corresponds to the drive ### A,
the number **2** to ### B, **3** to ### C, etc. 
There are no parameters required in the function call.

The function [setdrive()](setdrive().md) allows you to set the current drive;
all access to the disk (reading and writing files) is always done
on the selected drive which, by default, will be the drive
on which the program is executed.

### Example program
```
PROGRAM example_getdrive;

GLOBAL
    drive;

BEGIN
    write(0,0,0,0,"Current drive:");

    drive=getdrive();

    write_int(0,0,20,0,OFFSET drive);
    LOOP
        FRAME;
    END
END
```


This program shows on screen the number of the current drive obtained
using the function **getdrive()**.

---------------------------------------


To change the directory you must use the function [chdir()](chdir().md), and
[mkdir()](mkdir().md) to create a new directory.

The function [disk_free()](disk_free().md) allows you to ascertain the remaining free
disk space on a drive.

---------------------------------------
See: [setdrive()](setdrive().md) - [chdir()](chdir().md) - [mkdir()](mkdir().md) - [disk_free()](disk_free().md)

