**fread(**&lt;OFFSET data&gt;**,** &lt;length&gt;**,** &lt;handle&gt;**)**

### Returns

**0** - If an error was produced , or all asked data was not read .

**1** - If all data was read.

### Description

This function permits you to read the data of an file opened with the function
[fopen()](fopen().md), starting from the position indicated by the {pointer of
reading/writing}.

The file must be opened in the **reading mode**, or a mode which it permits
reading of data.

The **pointer** is situated at the beginning of the file, after it has been opened,
and advances sequentially during the reading of the data. But
this pointer can be situated in any position, using the function [fseek()](fseek().md)
and the function [ftell()](ftell().md) allows you to obtain the current
position of the pointer of an file.

The function **fread()** requires as a parameter the **&lt;**[OFFSET](offset.md)
**of the data&gt;** in which must the data of file be read , it means,
the memory address from where must be placed the data which are reading from the file.

As second parameter is required the **&lt;length&gt;** or total size of the data
which you want to read, it means, the number of positions of memory
which occupy these data. The length of one data can be obtained with the
function [sizeof()](sizeof().md).

The last parameter must be the **handle** or **identifier of file** which
was obtained after open the file as value of return of [fopen()](fopen().md).

### Example program
```
PROGRAM example_fread;

GLOBAL
    list1[3]=11,22,33,44;
    list2[3];
    myhandle;

BEGIN
    myhandle=fopen("help/help.dat","w");
    fwrite(OFFSET list1,4,myhandle);
    fclose(myhandle);
    myhandle=fopen("help/help.dat","r");

    fread(OFFSET list2,4,myhandle); // Read the file about <list2>

    fclose(myhandle);
END
```


This example program has defined two global lists; **list1** with four
values initiated as 11, 22, 33 &amp; 44, and **list2** with four without initiate
(all zero).

The file functions are used to write in one file the content
of the **list1** and then copy it over the **list2**. After finishing the program,
the data of the first list will have been copied into the second.

The function [fopen()](fopen().md) is called on two occasions, the first to {create it and
write} in it and the second to **open it and read** its contents.

It is important to underline that each time you open or create the file, you must
close it with the function [fclose()](fclose().md) (in the example
the file is closed on two occasions).

---------------------------------------


The inverse function to **fread()**, which permits you to write data in
an file instead of read it, is [fwrite()](fwrite().md). The way to use this
function and its parameters are similar to those of **fread()**.

---------------------------------------


### Note By default, the **&lt;length&gt;** is specified as the number of simple data,
remembering that a simple data (a variable) occupies {4
bytes}. So for example, if ten data (indicating 10 as
length)are read, these date will occupy 40 bytes of memory.

This relation can be changed by modifying the global variable [drive_size](global_unit_size.md),
which has a default value of **4** in all programs.

---------------------------------------
See: [fopen()](fopen().md) - [fwrite()](fwrite().md) - [fseek()](fseek().md) - [drive_size](global_unit_size.md)

