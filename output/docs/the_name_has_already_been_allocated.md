An item has been given a name that has already been used. It could be a name,
a constant, a variable, a table, a structure, a process or function
of the program.

You may be attempting to use the same name inside the program
to identify two different objects, or {a name you allocated is predefined for
another use was inside the language}.
In this case you can access the glossary to see to which object the name belongs to.


In each case,**you must substitute this name with another one**.

### Example
```
PROGRAM name_of_program;
GLOBAL
    player=0;
    STRING player; // Error: The name is not unique.
BEGIN
  //...
END
```


---------------------------------------
See: [syntax](syntax_of_a_programdot.md) - [Names](definition_of_a_namedot.md)

