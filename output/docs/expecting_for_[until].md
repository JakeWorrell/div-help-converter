A block of statements that started with the reserved word [REPEAT](repeat_statement.md)
must necessarily finish with the word [UNTIL](until.md). In the indicated position
of the program, the block of statements has finished with a
different word. So probably:

- A [REPEAT](repeat_statement.md) has finished with an [END](end.md). In this case,
if  you intend to create a loop indefinitely, the [LOOP](loop_statement.md) ... [END](end.md) statement must be used.

### Example:}
PROGRAM my_game;
BEGIN
    REPEAT
    //...
    END // Error: expecting for [UNTIL]
END
**-**

- Inside the [REPEAT](repeat_statement.md) ... [UNTIL](until.md) loop will appear a spare word such as [END](end.md) or [ELSE](else.md) without its corresponding beginning ([IF](if_statements.md), [WHILE](while_statement.md), ...).

{#9999,Example
```
PROGRAM my_game;
BEGIN
    REPEAT
        IF (x<0) x++; END
            y++;
        END // Error: expecting for [UNTIL]
    UNTIL (x>=0);
END
```


  In this case, the [END](end.md) of the [IF](if_statements.md) has been put twice,
interpreting the compiler that the second [END](end.md) intends to close the [REPEAT](repeat_statement.md).

- Or finally, that you have forgotten to put the [UNTIL](until.md) of the [REPEAT](repeat_statement.md).

---------------------------------------
See: [Syntax](syntax_of_a_programdot.md) - [ Statement REPEAT](repeat_statement.md) - [IF](if_statements.md) - [WHILE](while_statement.md)

