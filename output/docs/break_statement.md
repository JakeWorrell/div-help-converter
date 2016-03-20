A **BREAK** statement inside a loop will immediately finish it, continuing the program from the following statement to that loop.
This statement can only be put inside the following loops:

  [LOOP](while_statement.md) ... [END](end.md)

  [FROM](from_statement.md) .. [TO](to.md) .. [STEP](step.md) .. ... [END](end.md)

  [REPEAT](repeat_statement.md) ... [UNTIL](until.md) [(]((__).md) .. [)]((__).md)

  [WHILE](while_statement.md) [(]((__).md) .. [)]((__).md) ... [END](end.md)

  [FOR](for_statement.md) [(]((__).md) .. **#1068;** .. [;](semicolon.md) .. [)]((__).md) ... [END](end.md)


A **BREAK** sentence will make the program continue its execution after the [END](end.md) or the [UNTIL](until.md) of the loop closer to the statement.

If there are several nested loops (one inside another one), the **BREAK** statement will only exit the inner loop.

### Example
```
PROGRAM my_game;
BEGIN
    LOOP
        REPEAT
            IF (key(_esc)) BREAK; END
            //...
            FRAME;
        UNTIL (x==0);
        //...
    END
END
```


In this example, the **BREAK** statement will exit the [REPEAT](repeat_statement.md) ... **UNTIL** (when the 
**ESC** key is pressed), but not the [LOOP](while_statement.md) ... [END](end.md).

**Important**---------------------------------------


The **BREAK** statement is not valid to finish [IF](if_statements.md),
[SWITCH](switch_statement.md) (or the [CASE](case.md) sections of this statement), or
[CLONE](clone_statement.md) statements.

**BREAK** can only finish the statements that implement a loop.

---------------------------------------
See: [Syntax](syntax_of_a_programdot.md)

