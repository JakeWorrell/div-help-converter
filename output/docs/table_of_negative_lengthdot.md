To define a table indicating in square brackets its length, it is necessary to use a positive integer (0, 1, 2, 3, ...), taking into account that all the tables start in the zero position and finish in the position indicated in the index.

### Example
```
PROGRAM my_game;
GLOBAL
    table1[9];
    table2[-9]; // Error: Table of negative length.
BEGIN
    //...
END
```


The compiler has detected a table defined with a negative length such as **table2**. In this example, it is necessary to define the table such as
**table1** that, in this case, will be a table of 10 positions (from
table1[0] to table1[9]).

---------------------------------------
See: [Syntax](syntax_of_a_programdot.md) - [Declaration of table](declaration_of_a_tabledot.md)

