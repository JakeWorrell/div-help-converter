**fseek(**&lt;handle&gt;**,** &lt;cursor position&gt;**,** &lt;mode&gt;**)**

### Description

Places the **cursor of reading/writing** of an file at the indicated position.

The function requires, first, the **&lt;handle&gt;** or **identifier of the file**
returned by the function [fopen()](fopen().md) when opened.

Then the new position where the **&lt;cursor&gt;** of the file must be placed is defined.
Now every future reading or writing operation which is done, will be from this position.

As a last parameter the **&lt;mode&gt;** in which the new position of the cursor 
must be specified is indicated, can be one of the following three modes:

 **seek_set** - Position is in relation to the beginning of the file (0).

 **seek_cur** - Increment related to the current position (1).

 **seek_end** - Position is in relation to the end of the file (2).


To obtain the current situation of an file cursor, the function
[ftell()](ftell().md) must be used.

Every reading or writing operation of an file is done automatically, 
so all these access functions are called sequentially (reading or
writing the data one after another).

### Example program
```
PROGRAM example_fseek;

GLOBAL
    mytable[3]=11,22,33,44;
    mydata;
    myhandle;

BEGIN
    myhandle=fopen("help/help.dat","w");
    fwrite(OFFSET mytable,4,myhandle);
    fclose(myhandle);
    myhandle=fopen("help/help.dat","r");

    // Places the cursor to read the fourth data of the file (44)

    fseek(myhandle,3,seek_set);

    fread(OFFSET mydata,1,myhandle);
    fclose(myhandle);
END
```


This example writes the four data items contained in **mytable** (11,22,33 and 44)
in the file **help.dat**, and then, opens the file for reading and uses
the function **fseek()** to place the cursor in the **position 3** from the
beginning of the file (with **seek_set**).

&gt;Then you can read from the fourth data item of the file, so that,
when a value is read in the variable **mydata** this will be **44**,
the fourth value of the table.

---------------------------------------


### Note By default, the **&lt;position of the cursor&gt;** is specified as a
number of simple data items, assuming that a simple data (a variable)
fills **4 bytes** of memory. If, for example, the cursor is placed in the tenth position
from the beginning of the file, then the program can access the data 
from the fortieth byte.

This relation can be changed, by modifying the global variable [drive_size](global_unit_size.md),
which by default is **4** for every program.

---------------------------------------
See: [ftell()](ftell().md) - [fread()](fread().md) - [fwrite()](fwrite().md) - [drive_size](global_unit_size.md)

