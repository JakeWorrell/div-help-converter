The indicated function requires as its parameter, at the indicated position, the name
of a data structure of the program.

You do not have to use the operator [offset](offset.md), you just need to indicate the name 
of the structure.

### Example
```
PROGRAM my_game;
GLOBAL
    STRUCT records[9]
        STRING initials[2];
        points;
    END
BEGIN
    //...
    qsort(offset records,points,1); // Error: expecting a name.
END
```


In this example the function **qsort** is used, which requires the name of a
structure as its first parameter. In this case, the correct instruction 
to order the table**records** is this one:

  qsort(records,points,1);

This instruction indicates how to order the structure, namely as a function
of the field **points** and in descending order.

---------------------------------------


### Note 1 Also it is possible that the indicated name has nothing to do with a
structure of data, but with the another type of object (for example, the name 
specified was of a table of data).

### Note 2 This data structure cannot belong simultaneously to another
structure, so you cannot specify the name of a structure inside another one.

---------------------------------------
See: [syntax](syntax_of_a_programdot.md)

