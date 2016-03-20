**PRIVATE**

    [&lt;declaration of data&gt;](declaration_of_a_variabledot.md) [;](semicolon.md)

    ...

These sections of the programs are optional. Private data, **data that are going to be used exclusively inside a process**, can be declared in this section.

This section is defined just before the [BEGIN](begin.md) of the process that is going to use these data and must start with the reserved word PRIVATE
followed by a series of [declarations of data](declaration_of_a_variabledot.md) finished with a symbol [;](semicolon.md) (semicolon).

The main program is also considered as a process. Its declaration of private data can go just before its [BEGIN](begin.md).

In general, all the data that are going to contain information necessary only for a process, as well as those that can not be accessed from any other process, are declared as private data.

Those variables that are going to be used as counters in a loop, variables to contain angles or secondary identifying codes, etc. are normally defined as private data.

### Example
```
PROGRAM my_game;
PRIVATE
    n;
BEGIN
    FROM n=0 TO 9;
        //...
    END
    //...
END

PROCESS my_process()
PRIVATE
    id2;
    angle2;
BEGIN
    id2=get_id(TYPE my_process);
    IF (id2<>0)
        angle2=id2.angle;
        //...
    END
    //...
END
```


If you need to consult or modify a variable declared as private from another process (variable.identifier), then that data will have to be declared local (inside the program's section [LOCAL](declaration_of_local_datadot.md)). Thus, all the processes will have the data and every process can access its value or the value that this data has in another process.

---------------------------------------
See: [Syntax](syntax_of_a_programdot.md) - [Glossary](glossary_of_terms.md)

