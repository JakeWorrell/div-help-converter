It is not necessary to declare the [parameters of the process](parameters_of_a_processdot.md) inside the [PRIVATE](declaration_of_private_datadot.md) section, as they are automatically declared. But if they are declared, they must be declared as variables, not as tables or structures, and they must not be initialised.

You have probably intended to use the same name for two different objects. On the one hand, for the parameter of the process and, on the other hand, for a [PRIVATE](declaration_of_private_datadot.md) variable of the same process.

### Example
```
PROGRAM my_game;
BEGIN
    //...
END
PROCESS my_process(a)
PRIVATE
    a=0; // Error: A parameter can not be initialised.
BEGIN
    //...
END
```


The compiler interprets that the parameter **a** is being initialised at **0**
and, as it is not allowed to initialise a parameter (as it will take its value depending on the call to the process), the error is reported.

---------------------------------------
See: [Syntax](syntax_of_a_programdot.md) - [Parameters of a process](parameters_of_a_processdot.md)

