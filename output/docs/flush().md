**flush(****)**

### Returns

The number of opened files/files.

### Description

Empties the memory buffers, and ensures that all data written 
to a file which is still in the cache memory is saved
in its correspondent file.

This operation is not very necessary, because the administration of the
cache that the operating system makes, is very effective and the data is not going to 
be lost due to not being correctly written to its corresponding file/file.

But, this function has another utility. It will return the {number
of files opened with} [fopen()](fopen().md) inside of a program.

The file system allows just a maximum number of files to be open at once,
which depends on the system's configuration.

Every file must be closed with [fclose()](fclose().md) once the program has finished operating on them.
This last function allows you to close just one file, or everyone which is open.

### Example program
```
PROGRAM example_flush;

GLOBAL
    midata1;
    midata2;
    myhandle;

BEGIN
    myhandle=fopen("help/help.dat","w");

    midata1=flush(); // Obtains the number of opened files (1)

    fclose(myhandle);

    midata2=flush(); // Obtains the number of opened files (0)

END
```


This example obtains on two occasions the number of files opened, with 
the function **flush()**. After the file **help.dat** has been opened, the
function determines that there is one open file, and once closed,
could be used to check that no files are still open.

---------------------------------------
See: [fopen()](fopen().md) - [fclose()](fclose().md)

