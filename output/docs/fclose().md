**fclose(**&lt;handle&gt;**)**

### Returns

Number of closed files.

### Description

Closes an file opened with the function [fopen()](fopen().md), fclose must 
receive as parameter the **handle** or **identifier of file** returned
by this function.

In the second modality, the function **fclose()** can {close all opened
files} at one time, for this you indicate **0**
(zero) as its parameter, instead of **handle**.

Anyway, the function returns the number of files which were closed,
if it returns **0** it can mean one of these cases:

** -** There was no open file.

** -** The passed **handle** doesn't correspond to any opened file.
** -** The file corresponding to this **handle** was already closed.

All open files must be closed before the program finishes its execution.

### Example program
```
PROGRAM example_fclose;

GLOBAL
    list1[3]=11,22,33,44;
    list2[3];
    myhandle;

BEGIN
    myhandle=fopen("help/help.dat","w");
    fwrite(OFFSET list1,4,myhandle);

    fclose(myhandle); // The file closes to be opened in other mode

    myhandle=fopen("help/help.dat","r");
    fread(OFFSET list2,4,myhandle);

    fclose(myhandle); // The file closes definitively
END
```


the functions of files Are used to write in one file the content
of the **list1** and then copy it over the **list2**. After finishing the program,
the data of the first will have been copied into the second.

If the open file in one mode (with the function [fopen()](fopen().md)) wants to
access an file in a different mode, you must first close the file before opening it
in the new mode; in the example, the file of writing is then closed to open
it then in reading mode.

---------------------------------------


The function [flush()](flush().md) empties the buffers of writing and permits you also to 
check how many files are open at any moment.

---------------------------------------
See also: [fopen()](fopen().md) [fread()](fread().md) - [fwrite()](fwrite().md)

