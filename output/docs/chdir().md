**chdir(**&lt;directory&gt;**)**

### Returns

**1** - The indicated directory was changed.

**0** - This directory can't be read.

### Description

Changes the current directory, on the selected drive.

The directory must be indicated as a literal (text between quotation marks), and
can be a relative path (from the current directory) or an absolute path
(from the main directory).

The ways of use and possibilities of this function are the same as the
command **CD** that can be typed in at the command line of the operating system.

Each program is placed at the beginning of the directory where the main executable
is found.

New directories (or folders)can be created on a disk 
with the function [mkdir()](mkdir().md), and with the function [remove()](remove().md) the other 
directories can be eliminated.

### Example program
```
PROGRAM example_chdir;
BEGIN
    chdir("MAP"); // Is placed in the directory MAP\

    // ...

    chdir("..");  // Comes back to the previous directory
END
```


This small example shows how the function **chdir()** can be used
to change the current directory.

---------------------------------------


The function [setdrive()](setdrive().md) allows you to set the current drive
and the function [getdrive()](getdrive().md) allows you to ascertain it;
all access to the disk (reading and writing of files) is always done on the selected
drive which, by default, will be the drive on which the program is being executed.

---------------------------------------


### Note The list of a directory's files can be obtained with the
function [get_dirinfo()](get_dirinfo().md).

---------------------------------------
See: [mkdir()](mkdir().md) - [remove()](remove().md) - [setdrive()](setdrive().md) - [getdrive()](getdrive().md)

