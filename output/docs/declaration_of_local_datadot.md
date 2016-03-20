**LOCAL**

    [&lt;declaration of data&gt;](declaration_of_a_variabledot.md) [;](semicolon.md)

    ...

This section of the programs is optional, as local data, the **data that all the program's processes have** are declared here, each one with its own values (as the [x](local_x.md) and [y](local_y.md) predefined local variables determine the coordinates of all the processes).

A section must obligatory start with the reserved word **LOCAL**
followed by a series of [declarations of data](declaration_of_a_variabledot.md) finished with a symbol [;](semicolon.md) (semicolon).

In general, the important information of the processes, the data to be consulted or modified from other processes, are declared as local data.

The energy remaining a process (a spacecraft, a shotgun, the character, etc.) could be an example. This information could be stored in the **energy** local variable, so any process can access or modify the energy of the rest (for instance, on colliding with them, energy could be subtracted).

### Example
```
PROGRAM my_game;
LOCAL
    energy=0;
BEGIN
    //...
END
```


If a variable declared as local is to be used only inside one process, then the former can be defined as a private data (inside the section [PRIVATE](declaration_of_private_datadot.md) of that process).

---------------------------------------
See: [Syntax](syntax_of_a_programdot.md) - [Glossary](glossary_of_terms.md)

