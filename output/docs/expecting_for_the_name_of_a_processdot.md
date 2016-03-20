The name of one of the processes defined in the program must be defined after the reserved word [TYPE](types_of_processesdot.md).

### Example
```
PROGRAM my_game;
BEGIN
    //...
    signal(TYPE my_process, s_kill);
    //...
END

PROCESS my_process()
BEGIN
    //...
END
```


---------------------------------------
See: [Syntax](syntax_of_a_programdot.md) - [Names](definition_of_a_namedot.md) - [Types of processes](types_of_processesdot.md)

