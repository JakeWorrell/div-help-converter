or [FUNCTION]}

The compiler has interpreted that, in the indicated position of the program, the main program ([PROGRAM](main_codedot.md) ... [BEGIN](begin.md) ... [END](end.md)), or the last process ([PROCESS](declaration_of_processesdot.md) or function ([FUNCTION](the_function_blocks_.md)) and have finished and then, it was expected that either a process would start or the program would finish.

The most frequent is to have duplicated [END](end.md) inside the last block of statements [BEGIN](begin.md) ... [END](end.md).

### Example
```
PROGRAM my_game;
BEGIN
    IF (x<0) x++; END
    END
    FRAME; // Error: expecting for [PROCESS].
END
```


In this example, the [END](end.md) of the [IF](if_statements.md) has been accidentally put twice, interpreting the compiler that the second is that of [END](end.md)
of the [BEGIN](begin.md). Therefore, after this last [END](end.md) only
the end of the program or the reserved word [PROCESS](declaration_of_processesdot.md) or [FUNCTION](the_function_blocks_.md) 
can come, marking the beginning of a new process. When a [FRAME](frame_statement.md) statement is placed in that position, the compiler reports the error.

---------------------------------------
See: [Syntax](syntax_of_a_programdot.md) - [Declaration of process](declaration_of_processesdot.md)

