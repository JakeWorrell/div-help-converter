**mkdir(**&lt;directory&gt;**)**

### Description

Creates a new directory (inside of the current directory or folder).

You must indicate as a parameter the name of the directory to be created 
as a literal (text between quotation marks).

The way of using and possibilities for this function are the same as
the command **MD** which can be typed at the command line of the operating
system.

Each program is placed at the beginning of the directory where the main
executable is found.

You create a new directory with the function [mkdir()](chdir().md), eliminate
the other directories with the function [remove()](remove().md).

.
### Example program
```
PROGRAM example_mkdir;
BEGIN
    mkdir("temporal"); // Creates a new directory

    // ...
    remove("temporal");
END
```


This small program shows how the function **mkdir()** can be used to create
a directory, and then it is deleted with the function [remove()](remove().md).

---------------------------------------


The function [setdrive()](setdrive().md) allows you to set the current drive
and the function [getdrive()](getdrive().md) allows you to ascertain it;
all access to the disk (reading and writing of files) is always done on the selected
drive which, by default, will be the drive on which the program is being executed.

---------------------------------------


### Note The directory's list of files can be obtained with the function
[get_dirinfo()](get_dirinfo().md).

---------------------------------------
See: [chdir()](chdir().md) - [remove()](remove().md) - [setdrive()](setdrive().md) - [getdrive()](getdrive().md)

