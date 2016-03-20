**fwrite(**&lt;OFFSET data&gt;**,** &lt;length&gt;**,** &lt;handle&gt;**)**

### Returns

**0** - If an error was produced or the data was not successfully written.

**1** - If all the data was written.

### Description

This function allows you to write data into an file opened with the function
[fopen()](fopen().md), starting from the position indicated by the **cursor of reading/writing**.

The file must have been opened in a **write mode**.

The **cursor** is placed at the beginning of the file, when opened or created, 
and advances sequentially as the data is written.
But this cursor can be placed in any position of the file 
using the function [fseek()](fseek().md) and the function [ftell()](ftell().md) allows you to
obtain the current position of an file cursor.

The function **fwrite()** requires as its first parameter the **&lt;**[OFFSET](offset.md)
**of the data&gt;** which must be written in the file, so, the address of memory.

As second parameter is required the **&lt;length&gt;** or total size of the
data which are wanted to be written, the number of memory positions
which fill these data. The length of a data can be obtained with the
function [sizeof()](sizeof().md).

The last parameter must be the **handle** or **identifier of file** which
was obtained when the file was opened as return value of [fopen()](fopen().md).

### Example program
```
PROGRAM example_fwrite;

GLOBAL
    mytable[3]=11,22,33,44;
    myhandle;

BEGIN
    myhandle=fopen("help/help.dat","w");

    fwrite(OFFSET mytable,4,myhandle); // Writes <mytable> in the file

    fclose(myhandle);
END
```


This example program writes the contained data in **&lt;mytable&gt;** in the file
**help.dat** of the disk.

The function [fopen()](fopen().md) is called to create it and to the function [fclose()](fclose().md)
to close it once every data has been written.

---------------------------------------


The opposite function to **fwrite()**,that allows to read data in
an file instead of write to it, is [fread()](fread().md). The way to use this function
and its parameters is the same as**fwrite()**.

---------------------------------------


### Note By default, the **&lt;length&gt;** is specified as the number of simple data
assuming that a simple data (a variable) fills **4 bytes** of memory. So, if for example, 
ten data are written (indicating 10 as length), then 40 bytes of data will be written.

This relation can be changed by modifying the global variable [drive_size](global_unit_size.md),
which, by default is **4** in every program.

---------------------------------------
See: [fopen()](fopen().md) - [fread()](fread().md) - [fseek()](fseek().md) - [drive_size](global_unit_size.md)


