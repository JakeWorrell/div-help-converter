The [CONTINUE](_continue_statement.md) statement makes the program finish the current iteration of the loop that is running.

This statement is used to go to the beginning/end of the following loops:

[LOOP](loop_statement.md) ... [END](end.md)

A [CONTINUE](_continue_statement.md) statement inside this loop will jump to [LOOP](loop_statement.md).

[FROM](from_statement.md) .. [TO](to.md) .. [STEP](step.md) .. ... [END](end.md)

A [CONTINUE](_continue_statement.md) statement inside this loop will make the increment ([STEP](step.md)) and, if the value indicated in the [TO](to.md) has not been passed, the program will continue at the beginning of the loop.

[REPEAT](repeat_statement.md) ... [UNTIL](until.md) [(]((__).md) .. [)]((__).md)

A [CONTINUE](_continue_statement.md) inside this loop will jump to [UNTIL](until.md).

[WHILE](while_statement.md) [(]((__).md) .. [)]((__).md) ... [END](end.md)

A [CONTINUE](_continue_statement.md) inside this loop will jump to [WHILE](while_statement.md).

[FOR](for_statement.md) [(]((__).md) .. [;](semicolon.md) .. [;](semicolon.md) .. [)]((__).md) ... [END](end.md)

A [CONTINUE](_continue_statement.md) inside this loop will make the increment
and the comparison. If the latter is true, the program will continue at the beginning of the loop. But if it is false, the program will continue after the [END](end.md) of the [FOR](for_statement.md).

[CONTINUE](_continue_statement.md) **must obligatory appear inside one of these loops**.

If there are several nested loops (one inside another) the [CONTINUE](_continue_statement.md) statement will take effect only in the inner loop.

### Example
```
PROGRAM my_game;
BEGIN
    FOR (x=0, y=0;x<10;x++)
        IF (x<5) CONTINUE; END
        y++;
    END
END
```


In this example, after the whole loop has been executed, **x** will be equal to **10** and **y** will be equal to **5** as, providing that **x** is less than 5, the [CONTINUE](_continue_statement.md) statement prevents the **y++;** statement from being executed.

---------------------------------------
See: [Syntax](syntax_of_a_programdot.md) - [Statement CONTINUE](_continue_statement.md)

