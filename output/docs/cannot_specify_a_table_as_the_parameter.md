The [parameters of the process](parameters_of_a_processdot.md) must be declared as variables,
not as tables or structures, and cannot be initiated (because they will receive 
their value with each call).

### Example
```
PROGRAM my_game;
BEGIN
    //...
END
PROCESS my_process(a[9]) // Error: Cannot specify a table as the parameter.
BEGIN
    //...
END
```


The compiler interprets the parameter **a** as a table of 10 positions, 
and cannot pass a table as the parameter, so emits the error.

---------------------------------------
See: [syntax](syntax_of_a_programdot.md) - [Parameters of a process](parameters_of_a_processdot.md)

