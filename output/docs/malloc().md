**malloc(**&lt;length&gt;**)**

### Returns

The **OFFSET** of the memory block asked, or **0** if the memory available is not
enough.

### Description

This function assigns dynamic memory, or a new block of free memory if required, 
to the program.

the **&lt;length&gt;** of the memory block to be occupied is required as a parameter. 
This length is specified as a number of simple data blocks, each one of them 
taking up 4 bytes of memory; for example, if a block of length **100** is required
then 400 bytes of memory will be put aside.

A max number of **256 blocks** can be requested inside of a program, 
irrespective of its size, the function [free()](free().md) allows you to liberate
these memory blocks.

---------------------------------------


Normally the **OFFSET** (memory address) returned by the function
**malloc()** is assigned to a data of type pointer (See [POINTER](data_of_type_pointer.md)).

---------------------------------------


### Example program
```
PROGRAM example_malloc;

GLOBAL
    POINTER mytable[1000];  // pointer of a table of 1000 data
    counter;
BEGIN

    mytable = malloc(1000); // Asks for 1000 memory positions

    FOR (counter=0;counter<1000;counter++) // Accesses the data
        mytable[counter]=-1;
    END

    free(mytable);          // Liberates the memory occupied by the table
END
```


This small example shows how a pointer to the table can be defined 
(the pointer contains none of the data of the table, just a handle to the table itself),
and to assign memory to this pointer with the function **malloc()**.

Once the memory is assigned to the table of data, the program accesses them
(they are initiated to -1, as an example), and finally frees up the memory.

The memory blocks which are not liberated  with the function [free()](free().md), will be
liberated automatically by the system when the program has finished.

---------------------------------------


### Note the quantity of available memory for the processing of program data
(local and private data) can be controlled with the compilation options
(See [Compiler_options](compilation_options.md)).

---------------------------------------
See: [free()](free().md) - [POINTER](data_of_type_pointer.md)

