**REPEAT**

    [&lt;statement&gt;](declaration_of_statementsdot.md) [;](semicolon.md)

    ...

[UNTIL](until.md) [(]((__).md) [&lt;condition&gt;](definition_of_a_condition.md) [)]((__).md)

The **REPEAT** (REPEAT ... UNTIL( ... )) statement implements a **loop**. That is to say, it is capable of **repeating a group of statements a specific number of times**.

In order to implement this loop, it is necessary to start with the reserved word **REPEAT**, followed by the statements that you want to repeat once or more times, and the end of the statement will be determined by putting the reserved word [UNTIL](until.md), followed by the condition that has to be complied for **the statement to finish**.

When a **REPEAT** statement is executed, the internal statements (those placed between the **REPEAT** and the [UNTIL](until.md)) will be executed first and then, the condition specified in the [UNTIL](until.md) will be verified. If it is still false, the internal statements will be executed again. The process will be repeated until the condition of the [UNTIL](until.md) turns to be true, continuing then the execution of the program after this statement.

Every time that the internal statements are executed, a loop's **iteration** has been made. The **REPEAT** ... [UNTIL](until.md) (the **&lt;condition&gt;** is complied) statement will always execute the internal statements at least once, so it always verifies the condition after the execution.

### Example
```
PROGRAM my_game;
BEGIN
    x=0;
    REPEAT
        x=x+10;
        FRAME;
    UNTIL (x>320)
END
```


In this example, the **x** local variable (x coordinate of the process) will be put at 
zero and then, 10 will be added to **x** and a [FRAME](frame_statement.md) will be performed **until** **x** becomes a number bigger than 320.

A [BREAK](break_statement.md) statement inside a **REPEAT** loop will immediately finish it, continuing the program from the following statement to that loop.

A [CONTINUE](_continue_statement.md) statement inside a **REPEAT** loop will force the program to immediately make the verification of the [UNTIL](until.md) and, if it is true, it will execute again the internal statements from the beginning (after the reserved word **REPEAT**). If the condition turns to be true, the [CONTINUE](_continue_statement.md) statement will finish the loop.

The internal statements of a **REPEAT ** loop can be as many as desired, and of any kind, obviously including new **REPEAT** loops.

---------------------------------------
See: [Syntax](syntax_of_a_programdot.md)

