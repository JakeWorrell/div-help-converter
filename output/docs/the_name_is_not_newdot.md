A [name](definition_of_a_namedot.md) of an invalid process has been used, as it was already predefined as the name of another object. It can be the name of a [constant](declaration_of_constantsdot.md), variable, table, structure, process or a function of the program.

It is also possible either that the same name has been used inside the program to identify two different objects, or **that a predefined name has been used with another purpose inside the language**. In that case, it is possible to access the **Glossary** to see the object to which this name is referred.

You must replace this name by another similar one.
### Example
```
PROGRAM my_game;
BEGIN
    //...
END

PROCESS my_game() // Error: The name is not new.
BEGIN
    //...
END
```


In this example, the aim was to use the name that had been previously used to identify the main program as the name of a process.

---------------------------------------
See: [Syntax](syntax_of_a_programdot.md) - [Names](definition_of_a_namedot.md) 

