**setdrive(**&lt;drive&gt;**)**

### Description

This function allows you to set the current drive; all access to the disk
(reading and writing files) is always done on the selected drive
which, by default, will be the drive on which the program was executed.


The **&lt;drive&gt;** must be indicated with a number, where 
the number **1** corresponds with the drive ### A, the number  **2** with ### B,
**3** the ### C, etc.   this function doesn't return any value.

The function [getdrive()](getdrive().md) allows you to obtain the number of the current drive.

### Example program
```
PROGRAM example_setdrive;

GLOBAL
    drive;

BEGIN
    // ...

    drive=getdrive();

    setdrive(1);      // Is placed in the drive A:

    // ...

    setdrive(drive); // Recovers the previous drive

    // ...
END
```


This program first, obtains the current drive with the function [getdrive()](getdrive().md)
and saves it in the variable **drive**, then the drive is set to **1** (A:)
before, finally, the drive is reset as the drive in which the program is
being executed.

---------------------------------------


### Note When a drive is changed with **setdrive()** no value is returned,
but afterwards [getdrive()](getdrive().md) can be called to check that the program
has been placed on the correct drive.

---------------------------------------


To change the directory you must use the function [chdir()](chdir().md), and
[mkdir()](mkdir().md) to create a new directory.

The function [disk_free()](disk_free().md) allows you to ascertain the remaining free
disk space on a drive.

---------------------------------------
See: [getdrive()](getdrive().md) - [chdir()](chdir().md) - [mkdir()](mkdir().md) - [disk_free()](disk_free().md)

