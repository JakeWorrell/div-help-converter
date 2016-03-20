**remove(**&lt;name of file or directory&gt;**)**

### Description

Deletes files or subdirectories contained inside of the current directory
in which the program was executed.

The **&lt;name of file or directory&gt;** must be indicated in a literal (text
between quotation marks), also the joker/wild characters &quot;?&quot; and &quot;*&quot;  are accepted (as
for example &quot;*.bak&quot; to eliminate every file with the extension BAK).

The files eliminated will always be inside of the current directory (see [chdir()](chdir().md)
to change the directory) and on the current drive (see [setdrive()](setdrive().md) to change
the drive).

With this function directories can also be eliminated, but only
if they are empty (if there are no files or other subdirectories inside).

---------------------------------------


### Note This function must be used with more caution, because the files
deleted cannot be recovered, and information or programs
contained on the disk can be lost .

---------------------------------------


### Example program
```
PROGRAM example_remove;
BEGIN
    mkdir("temporal");
    // ...

    remove("temporal"); // Deletes a directory
END
```


This small example creates a directory with the function [mkdir()](mkdir().md) and then
eliminates it with the function **remove()**.

---------------------------------------


### Note The directory's list of files can be obtained with the function
[get_dirinfo()](get_dirinfo().md).

---------------------------------------
See: [chdir()](chdir().md) - [setdrive()](setdrive().md) - [get_dirinfo()](get_dirinfo().md)

