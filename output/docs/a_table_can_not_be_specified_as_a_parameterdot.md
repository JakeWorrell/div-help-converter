It is not necessary to declare the [parameters of the process](parameters_of_a_processdot.md) inside the [PRIVATE](declaration_of_private_datadot.md) section, as they are automatically declared. But if they are declared, they must be declared as variables, not as tables or structures, and they must not be initialised.

You have probably intended to use the same name for two different objects. On the one hand, for the parameter of the process and, on the other hand, for a [PRIVATE](declaration_of_private_datadot.md) table of the same process.

### Example
```
PROGRAM my_game;
BEGIN
    //...
END
PROCESS my_process(a)
PRIVATE
    a[9]; // Error: A table can not be specified as a parameter.
BEGIN
    //...
END
```


The compiler interprets that the parameter **a** is being typified as a table of 10 positions and, since a table can not be passed as a parameter, it reports the error.

---------------------------------------
See: [Syntax](syntax_of_a_programdot.md) - [Parameters of a process](parameters_of_a_processdot.md)

