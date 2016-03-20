A table has been initialised with more values than it can contain.

### Example:}
PROGRAM my_game;
GLOBAL
    table1[3]=0, 1,2 , 3, 4; // Error: Too many values for the table.
BEGIN
    //...
END
**-**

To initialise a table take into account that, at the most, it can have as many values as the number in square brackets plus 1 indicates.

[Example:]()
PROGRAM my_game;
GLOBAL
    table1[3]=2, 4, 6, 8;
BEGIN
    //...
END
**-**

In this case, the table **table1** may contain four values (table1[0]=2,
table1[1]=4, table1[2]=6 and table1[3]=8).

Another option is **not to indicate the size of the table**, so the compiler will deduce it from its initialisation.  

{#9999,Example
```
PROGRAM my_game;
GLOBAL
    table1[]=2, 4, 6, 8;
BEGIN
    //...
END
```


In this case, if it was necessary to refer to the table's length inside the program,  
the **sizeof(table1)** expression should be used, being equal to **4** in this example.

---------------------------------------
See: [Syntax](syntax_of_a_programdot.md) - [Declaration of table](declaration_of_a_tabledot.md) - [sizeof()](sizeof().md)

