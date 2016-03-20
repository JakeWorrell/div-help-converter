An [END](end.md) of the [CASE](case.md) or [DEFAULT](default.md) was waited for inside the [SWITCH](switch_statement.md) statement.

Inside the reserved words [SWITCH](switch_statement.md) and [END](end.md) one or more sections of the following kind were waited for:

  [CASE](case.md) ... [END](end.md)

  [DEFAULT](default.md) ... [END](end.md)


In the program, there is one of these sections that was expected to finish with the reserved word [END](end.md), but it finishes with another word. The most usual case is the following one:

- That a [REPEAT](repeat_statement.md) or a [IF](if_statements.md) have been lost, finishing the block
of statements with an [UNTIL](until.md) or an [ELSE](else.md). In this case, the associated [REPEAT](repeat_statement.md) or [IF](if_statements.md) must be looked for.

### Example
```
PROGRAM my_game;
BEGIN
    SWITCH (x)
        CASE 0:
            //REPEAT
            //...
            UNTIL (key(_esc)); // Error: expecting for [END]
        END
    END
END
```


In this example, the section that started with [CASE](case.md) has finished with [UNTIL](until.md) (because [REPEAT](repeat_statement.md) has been accidentally commented), and the compiler was expecting this section to finish with [END](end.md).

---------------------------------------
See: [Syntax](syntax_of_a_programdot.md)

