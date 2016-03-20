As a parameter, the [sizeof()](sizeof().md) function requires the name of a variable. It can also be the name of a variable, a table or a structure of the program.

This function returns the number of data (or elements) that the object whose name is passed as an argument has. Therefore, if that object was a
variable, the function would always return 1.

### Example
```
PROGRAM my_game;
GLOBAL
    table[]=0, 1, 2, 3;
    length_table;
BEGIN
    length_table=sizeof(table);
END
```


In this example **length_table** will be equal to **4** after the statement execution,
as the table contains four data.

---------------------------------------
See: [Syntax](syntax_of_a_programdot.md) - [Names](definition_of_a_namedot.md) - [sizeof](sizeof().md)

