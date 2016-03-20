**LOOP**

    [&lt;statement&gt;](declaration_of_statementsdot.md) [;](semicolon.md)

    ...

[END](end.md)

The **LOOP** statement implements an **infinite loop**. That is to say, it **indefinitely repeats a group of statements**.

In order to implement this loop, it is necessary to start with the reserved word **LOOP**, followed by the statements intended to be repeated continuously, putting the reserved word [END](end.md) at the end.

When a **LOOP** ... [END](end.md) statement is found in a program, all the internal statements of that loop will repeatedly be executed from this position.

In order to finish a **LOOP** loop, it is possible to use the [BREAK](break_statement.md) statement which, on being executed inside a loop of this kind, will force the program to continue from the [END](end.md).

Every time that the internal statements are executed, a loop's **iteration** has been made. The [CONTINUE](_continue_statement.md) statement inside a loop will finish the current **iteration** and will start the following one (the program will go on running after the reserved word **LOOP**.

### Example
```
PROGRAM my_game;
BEGIN
    x=0;
    LOOP
        IF (key(_esc))
            BREAK;
        END
        x=x+1;
        FRAME;
    END
END
```


In this example, the **x** local variable (x coordinate of the process) will be put at 
zero and then, 1 will be added to **x** and a [FRAME](frame_statement.md) will continuously be done. If the escape key (**ESC**) is pressed, then the [BREAK](break_statement.md) statement will be executed, finishing the **LOOP** loop.

The internal statements of a **LOOP** loop can be as many as desired, and of any kind, obviously including new **LOOP** loops.

---------------------------------------
See: [Syntax](syntax_of_a_programdot.md)

