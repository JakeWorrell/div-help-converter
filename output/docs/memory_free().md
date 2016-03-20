**memory_free(****)**

### Returns

The free memory available for the program.

### Description

This function allows you to determine the computer's RAM memory that is
available for the use of the program.

No parameter is required, and the memory total is returned in Kbs
(in kilobytes, each one being a total of 1024 bytes).

This quantity of memory will be available for the program to load
all its resources (graphics, sounds, etc.), it is useful to
check with this function, at the start of a program, that the computer
has enough memory to load all the necessary resources.

### Example program
```
PROGRAM example_memory_free;

GLOBAL
    free_memory;

BEGIN
    // ...

    free_memory=memory_free();

    // ...
END
```


This small example uses the function **memory_free()** to save the quantity 
of RAM available for the program in the global variable **free_memory**.

---------------------------------------


### Note The function [disk_free()](disk_free().md) allows you to determine the free disk 
space on a computer drive.

---------------------------------------
See: [disk_free()](disk_free().md)

