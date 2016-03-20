In the calls to processes or functions, it is necessary to put as many values or expressions as parameters are required, all of them inside the same [bracket]((__).md) and separated by [commas (,)](comma.md). This error appears when the bracket is closed after a [comma](comma.md), as in the following example:

### Example
```
PROGRAM my_game;
BEGIN
    signal(id, ); // Error: expecting for another parameter.
END
```


There are two reasons for that: either a comma has been accidentally put after the last parameter, or the last parameter has been omitted (like in the previous example).

---------------------------------------
See: [Syntax](syntax_of_a_programdot.md) - [Parameters of a process](parameters_of_a_processdot.md)

