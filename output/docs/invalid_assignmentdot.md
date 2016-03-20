The indicated assignment can not be done in this position of the program.
In an assignment statement it is only allowed to assign values to
objects such as variables (of any kind), to a position of a table, or to an element of a structure.

It is not possible to assign a value to a [constant](declaration_of_constantsdot.md), a
function or to a process or, in general, to any numeric or logical expression.

The following program shows examples of several kinds of invalid assignments:

### Example
```
PROGRAM my_game;
CONST
    my_constant=0;
BEGIN
    my_constant=1;  // Error: Invalid assignment.
    type my_game=2; // Error: Invalid assignment.
    sizeof(mouse)=3; // Error: Invalid assignment.
    4+5=6;           // Error: Invalid assignment.
    //...
END
```


All these assignments are invalid because the result of an expression, which is just a numeric value, can not be modified with an assignment. Thus, it is the same as to put a statement of the kind **2=4;** that, obviously, is impossible.

---------------------------------------
See: [Syntax](syntax_of_a_programdot.md) - [Definition of expression](definition_of_an_expression.md)

