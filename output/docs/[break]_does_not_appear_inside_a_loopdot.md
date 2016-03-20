The [BREAK](break_statement.md) statement makes the program continue after the loop that is running.

This statement is used to exit the following loops:

  [LOOP](loop_statement.md) ... [END](end.md)

  [FROM](from_statement.md) .. [TO](to.md) .. [STEP](step.md) .. ... [END](end.md)

  [REPEAT](repeat_statement.md) ... [UNTIL](until.md) [(]((__).md) .. [)]((__).md)

  [WHILE](while_statement.md) [(]((__).md) .. [)]((__).md) ... [END](end.md)

  [FOR](for_statement.md) [(]((__).md) .. [;](semicolon.md) .. [;](semicolon.md) .. [)]((__).md) ... [END](end.md)


A [BREAK](break_statement.md) statement will make the program continue to be executed after the [END](end.md) or [UNTIL](until.md) of the loop closest to the statement.
[BREAK](break_statement.md) can only appear inside one of these loops.

If there are several nested loops (one inside another one) the [BREAK](break_statement.md) statement will exit the inner loop.

### Example
```
PROGRAM my_game;
BEGIN
    LOOP
        REPEAT
            IF (key(_esc)) BREAK; END
            //...
        UNTIL (x==0);
        //...
    END
    BREAK; // Error: [BREAK] does not appear inside a loop.
END
```


In this example the [BREAK](break_statement.md) statement will exit [REPEAT](repeat_statement.md) ... [UNTIL](until.md) (when the **ESC** key is pressed)
but not [LOOP](loop_statement.md) ... [END](end.md).

---------------------------------------
See: [Syntax](syntax_of_a_programdot.md) - [Statement BREAK](break_statement.md)

