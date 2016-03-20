**filelength(**&lt;handle&gt;**)**

### Returns

The length of the file

### Description

This function obtains the length of an file already opened
with [fopen()](fopen().md), to do this you need as a parameter the **&lt;handle&gt;** or
**identifier of file** returned by the [fopen()](fopen().md) function.

This function doesn't modify the current position of the reading/writing
cursor of the file, but simply returns the number of data items contained 
therein.

### Example program
```
PROGRAM example_filelength;

GLOBAL
    mytable[3]=11,22,33,44;
    longitude;
    myhandle;

BEGIN
    myhandle=fopen("help/help.dat","w");
    fwrite(OFFSET mytable,4,myhandle);
    fclose(myhandle);
    myhandle=fopen("help/help.dat","r");

    longitude=filelength(myhandle); // Obtains the length of the file (4)

    fclose(myhandle);
END
```


This example program creates first an file called **help.dat**,
writing to it the four values contained in **mytable**.

Once the file has been created, it will be reopened in read mode to obtain its **length**.

---------------------------------------


### Note By default, the **length of the file** is obtained as the number of
simple data items it contains, assuming that a simple data (a variable)
fills up **4 bytes**. If, for example, the length of an file is ten
then it will occupy forty bytes of memory.

This relation can be changed by modifying the global variable [drive_size](global_unit_size.md),
which by default is **4** for every program.

---------------------------------------


### Note The functions [get_dirinfo()](get_dirinfo().md) and [get_fileinfo()](get_fileinfo().md) allow you to 
obtain a lot of information about the structure of directories (folders)
on the drive and about the files/files contained on it.

---------------------------------------
See: [fopen()](fopen().md) - [get_dirinfo()](get_dirinfo().md) - [drive_size](global_unit_size.md)

