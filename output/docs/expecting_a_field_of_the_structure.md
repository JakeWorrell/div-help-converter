The indicated function requires as its parameter, in the indicated position, the name
of **a field pertinent to the structure previously indicated**.

You don't have to use the operator [offset](offset.md), you only need to indicate the name of the field.


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
    qsort(records,&points,1); // Error: expecting a field of the structure.
END
```


In this example the function **qsort** is used, which requires the name of a field
of the structure as its second parameter. In this case, the instruction to order 
the table (records) would be :

  qsort(records,points,1);

This instruction indicates how to order the structure, as a function
of the field **points** and in descending order.


---------------------------------------


### Note  the indicated name does not always have to be a data structure.

---------------------------------------
See: [syntax](syntax_of_a_programdot.md)


