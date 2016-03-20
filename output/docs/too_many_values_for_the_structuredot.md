A structure has been initialised with more values than it can contain.

To initialise a structure, take into account the greatest number of values that it can contain. This number will be:

    **N&ordm; of records** X **N&ordm; of fields**

### Example
```
PROGRAM my_game;
GLOBAL
    STRUCT positions[9]
        x, y;
    END = 10 dup (-99, 99);
BEGIN
    //...
END
```


In this case, the structure **positions** has **10 records** (from positions[0]
to positions[9]) and **2 fields** (x and y). Then, the greatest number of values that it can contain is **20**. In the example, all the fields **x** are initialised at** -99** and all the fields **y** are initialised at **99**.

---------------------------------------
See: [Syntax](syntax_of_a_programdot.md) - [Declaration of structure](declaration_of_a_structuredot.md)

