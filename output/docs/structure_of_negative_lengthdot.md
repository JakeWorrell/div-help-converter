To define a structure indicating its number of records in [square brackets](pointer__[__].md) a positive integer (0, 1, 2, 3, ...) must be used, taking into account that all the structures start in the record zero and finish in the record indicated in the index.

### Example
```
PROGRAM my_game;
GLOBAL
    STRUCT e1[9]
      x, y;
    END
    STRUCT e2[-9] // Error: Structure of negative length.
      x, y;
    END
BEGIN
    //...
END
```


The compiler has detected a structure defined with a negative number of records, like **e2**. In this example, the structure must be defined as **e1** that,
in this case, will be a structure of 10 records (from e1[0] to e1[9])
and two fields (x and y).

---------------------------------------
See: [Syntax](syntax_of_a_programdot.md) - [Declaration of structure](declaration_of_a_structuredot.md)

