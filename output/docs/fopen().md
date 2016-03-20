**fopen(**&lt;name of file&gt;**,** &lt;mode&gt;**)**

### Returns

The **handle** or identifier of the open file, or **0** if an error was produced.

### Description

Opens a data file to read or write to, with the help of a **handle** or **identifier of file**
which this function returns from the open or created file.

the **&lt;name of file&gt;** to open or create is required , and the **&lt;mode&gt;** of opening,
which must be a literal (text in inverted commas) inside the following:

 &quot;**r**&quot; - Open the file for reading of the data contained in it.

 &quot;**w**&quot; - Create the file to write (if it already exists, it will lose the presently contained data).

 &quot;**a**&quot; - Open the file to write to after finishing with it, or it creates the file if it didn't exist.

 &quot;**r+**&quot; - Open an existent file to activate it, permitting reading and writing.

 &quot;**w+**&quot; - Create a file to write to, permitting also its reading.

 &quot;**a+**&quot; - Open an file to read it from any position and write new data to add on the end.

Once an file is opened, you can use all the functions for files
based in **handles**, but once the necessary operations have been completed 
in the file **must not be closed**, you should then close it with the function [fclose()](fclose().md).

The main functions are [fread()](fread().md) for reading the data inside
the file and [fwrite()](fwrite().md) to write the data; it is important to
open the file in the appropriate **mode** for the requested operations.
For example, you cannot write in the file if it was opened only for reading.

### Example program
```
PROGRAM example_fopen;

GLOBAL
    list1[3]=11,22,33,44;
    list2[3];
    myhandle;

BEGIN

    myhandle=fopen("help/help.dat","w"); // Open file to write

    fwrite(OFFSET list1,4,myhandle);
    fclose(myhandle);

    myhandle=fopen("help/help.dat","r"); // Open file to read

    fread(OFFSET list2,4,myhandle);
    fclose(myhandle);
END
```


This example program has defined two global lists; **list1** with four values
initiated in 11, 22, 33 and 44, and **list2** with four without initiates (zero).

The functions of files are used to write in one file the content
of the **list1** and then load it over the **list2**. After finishing the program,
the data of the first list will have been copied into the second.

the function **fopen()** is called on two occasions, the first to {create it and
write} in it and the second to **open it and read** its contents.

It is important to underline that each time when you open or create the file, you must
close it with the function [fclose()](fclose().md) (can be seen how in the example
the file is closed on two occasions).

---------------------------------------


The function [fseek()](fseek().md) allows you to situate the **pointer of reading/writing**
at any position in the file. In this way, data at any point of the file 
can be read or written.

---------------------------------------


The function [flush()](flush().md) empties the buffers of writing and allows you also
to check how many files are open at any moment.

---------------------------------------


### Note The functions [save()](save().md) and [load()](load().md) allow you also
to save the data in files of the disk and restore them. These functions are
less useful, but their use is easier than
the functions based in **handles** here described.

---------------------------------------
See: [fclose()](fclose().md) [fread()](fread().md) - [fwrite()](fwrite().md) - [save()](save().md)

