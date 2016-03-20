**free(**&lt;OFFSET of the memory block&gt;**)**

### Description

Liberates a block of dynamic memory which has been reserved previously with the
the function [malloc()](malloc().md)

the **OFFSET** or memory address in which the block starts is required as a parameter, 
which is the value obtained when it is reserved.

The memory blocks not liberated with the function **free()**, will be liberated
automatically by the system when the program ends.

### Example program
```
PROGRAM example_free;

GLOBAL
    POINTER mytable[1000];  // Pointer of a table of 1000 data
    counter;
BEGIN

    mytable = malloc(1000); // Asks for 1000 positions of memory

    FOR (counter=0;counter<1000;counter++) // Accesses to the data
        mytable[counter]=-1;
    END

    free(mytable);          // Liberates the memory filled up by the table
END
```


This small example shows how a pointer to a table can be defined 
(the pointer contains none of the data of the table, just a handle to the table itself),
memory assigned to this with the function [malloc()](malloc().md).

Once the memory is assigned to the table of data, the program accesses them
(they are initiated to -1, as an example), and finally frees up the memory.

---------------------------------------
See: [free()](atan2().md) - [POINTER](data_of_type_pointer.md)

