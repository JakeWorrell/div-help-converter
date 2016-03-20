A **CONTINUE** statement inside a loop will force the program to
finish its current iteration and start the following iteration.

We call **iteration** to each execution of the set of statements internal to a loop (the statements between a [LOOP](loop_statement.md) and its [END](end.md), for instance).

This statement can only be put inside one of the following loops:

[LOOP](loop_statement.md) ... [END](end.md)

A CONTINUE inside this loop will jump to the LOOP.

[FROM](from_statement.md) .. [TO](to.md) .. [STEP](step.md) .. ... [END](end.md)

A CONTINUE inside this loop will perform the increment (STEP) and, if the value indicated in the TO has not been passed, the program will continue at the beginning of the loop.

[REPEAT](repeat_statement.md) ... [UNTIL](until.md) [(]((__).md) .. [)]((__).md)

A CONTINUE inside this loop will jump to the UNTIL.

[WHILE](loop_statement.md) [(]((__).md) .. [)]((__).md) ... [END](end.md)

A CONTINUE inside this loop will jump to the WHILE.

[FOR](for_statement.md) [(]((__).md) .. [;](semicolon.md) .. [;](semicolon.md) .. [)]((__).md) ... [END](end.md)

A CONTINUE inside this loop will perform the increment
and the comparison. If the latter is true, the program will continue at the beginning of the loop. But if it is false, the program will continue after the END of the FOR.

If there are several nested loops (one inside another), the **CONTINUE** statement will take effect only in the inner loop.

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


In this example, after the whole loop has been executed, **x** will be equal to **10** and **y** will be equal to **5** as, providing that **x** is less than 5, the **CONTINUE** statement prevents the **y++;** statement from being executed.

**Important**---------------------------------------


The **CONTINUE** statement is not valid inside [IF](if_statements.md),
[SWITCH](switch_statement.md) (or the [CASE](case.md) sections of this statement), or
[CLONE](clone_statement.md) statements (as these statements do not implement loops and, therefore, they do not make iterations).

---------------------------------------
See: [Syntax](syntax_of_a_programdot.md)

