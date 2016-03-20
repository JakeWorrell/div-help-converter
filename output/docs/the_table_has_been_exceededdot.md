The constant expression that starts in the indicated position of the program can not be calculated, as in it you access a table or structure out of its range of positions.

Check the range of the table or structure in its definition.
Keep in mind that a table defined, for instance, as **table[10]**
has **11** positions (from table[0] to table[10]).

### Example
```
PROGRAM my_game;
GLOBAL
    table[]=1, 3, 5;
    value=table[3]; // Error: The table has been exceeded.
BEGIN
    //...
END
```


In this example, the **value** variable can not be initialised as an non-existent table position is being used for this purpose.

---------------------------------------
See: [Syntax](syntax_of_a_programdot.md) - [Declaration of table](declaration_of_a_tabledot.md)

