**WHILE** [(]((__).md) [&lt;condition&gt;](definition_of_a_condition.md) [)]((__).md)

    [&lt;statement&gt;](declaration_of_statementsdot.md) [;](semicolon.md)

    ...

[END](end.md)


The **WHILE** statement implements a **loop**. That is to say, it is capable of {repeating a group 
of statements a specific number of times}.

In order to implement this loop, the condition that has to be complied for the group of 
statements to be executed must be specified in brackets, after the reserved word **WHILE**. 
All the statements that necessarily have to be repeated will be put after the specification 
of this condition. Finally, the end of the loop will be marked with the reserved word [END](end.md) 
(It doesn't matter whether
more words [END](end.md) appear inside the loop when they belong to internal statements of that loop).

When a **WHILE** statement is executed, the specified verification will be carried out. 
If the result is true, the internal statements will be executed. Otherwise, the program will 
continue from the [END](end.md), that marks the end of the **WHILE**.

If the internal statements have been executed (what is called to make a loop's **iteration**), 
the condition will be verified again. If it is true, another **iteration** will be made 
(the internal statements will be executed again). This process will be repeated until it is 
verified that the condition of the **WHILE** is false.

If the condition turns to be false directly while a **WHILE** statement is executed, then 
the internal statements will never be executed.

### Example
```
PROGRAM my_game;
BEGIN
    x=0;
    WHILE (x<320)
        x=x+10;
        FRAME;
    END
END
```


In this example, the **x** local variable ( x coordinate of the process) will be put at 
zero and then, providing that x is less than 320, 10 will be added to **x** and a [FRAME](frame_statement.md) will be performed.

A [BREAK](break_statement.md) statement inside a **WHILE** loop will immediately finish it, continuing the program from the following statement to that loop.

A [CONTINUE](_continue_statement.md) statement inside a **WHILE** loop will force the program to
verify the initial condition immediately and, if it is true, to execute again the internal statements from the beginning (after the **WHILE**).
If the condition turns to be false, the [CONTINUE](_continue_statement.md) statement will finish the loop.

The internal statements of a **WHILE** loop can be as many as desired, and of any kind, obviously including new **WHILE** loops.

---------------------------------------
See: [Syntax](syntax_of_a_programdot.md)

