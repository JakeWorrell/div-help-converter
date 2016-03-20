A process cannot receive a structure as its parameter, if you want to
access an external structure from a process, the process must receive as
its parameter a pointer to the structure.

### Example
```
PROGRAM my_game;
GLOBAL
    STRUCT positions[9]
        x, y;
    END
BEGIN
    my_process(OFFSET positions);
    //...
END

PROCESS my_process(STRUCT POINTER positions pos[9]);
BEGIN
    //pos[ ... ].x = ... ;
    //...
END
```


In this example you can access the structure inside **my_process**
using the pointer **pos**.

---------------------------------------
See: [syntax](syntax_of_a_programdot.md) - [Names](definition_of_a_namedot.md) - [Declaration Structures](declaration_of_a_structuredot.md)

