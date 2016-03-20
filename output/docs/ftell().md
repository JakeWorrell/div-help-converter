**ftell(**&lt;handle&gt;**)**

### Returns

The current position of the cursor of reading/writing in an file.

### Description

Returns the position of the **reading/writing cursor** in an file, for which,
the only parameter required is the **&lt;handle&gt;** or **identifier of file** returned by the
function [fopen()](fopen().md) when the file was opened.

To establish a new position for an file cursor, the function [fseek()](fseek().md)
must be used. In contrast, the function, **ftell()** always returns
the position of the cursor, related to the beginning of the file.

Every reading or writing operation of an file
automatically moves the cursor forward, so every access is
done sequentially (reading or writing the data one after another).

### Example program
```
PROGRAM example_ftell;

GLOBAL
    mytable[3]=11,22,33,44;
    midata1;
    midata2;
    myhandle;

BEGIN
    myhandle=fopen("help/help.dat","w");

    midata1=ftell(myhandle); // Position of the cursor before writing

    fwrite(OFFSET mytable,4,myhandle);

    midata2=ftell(myhandle); // Position of the cursor after being written the data

    fclose(myhandle);
END
```


This example writes the four data items contained in **mytable** (11,22,33 &amp; 44)
into the file **help.dat**.

After opening the file with [fopen()](fopen().md) the position of the cursor is obtained
and saved in the variable **midata1** (this will be 0, the beginning of the file).

Then, the four values contained in the table are written in the file and the
position of the cursor is obtained again, which now is saved in **midata2** (will be
4, at the end of the file, after the four written values).

Finally, the file is closed with **#224.fclose()** before ends.

### Note By default, the **&lt;position of the cursor&gt;** is specified as a
number of simple data, assuming that a simple data (a variable)
fills **4 bytes**. So for example, if the cursor is placed in the tenth position
from the beginning of the file, then the program can access the data
from the fortieth byte.

This relation can be changed, modifying the global variable [drive_size](global_unit_size.md),
which by default is set at **4** for every program.

---------------------------------------


### Nota The function [filelength()](filelength().md) allows you to find the length of an
file, but to do this the file must already be open.

---------------------------------------
See: [fseek()](fseek().md) - [fread()](fread().md) - [fwrite()](fwrite().md) - [drive_size](global_unit_size.md)

