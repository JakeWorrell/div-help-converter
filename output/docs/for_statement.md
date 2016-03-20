**FOR** [(]((__).md)&lt;initialisation&gt;[;](semicolon.md) &lt;condition&gt;[;](semicolon.md) &lt;increment&gt;[)]((__).md)

    [&lt;statement&gt;](declaration_of_statementsdot.md) [;](semicolon.md)

    ...

[END](end.md)

The **FOR** statement (replica of the C language) implements a **loop** and is capable of {repeating 
a group of statements a specific number of times}.

In order to implement this loop, three different parts must be specified in brackets, 
separated by symbols [;](semicolon.md) (semicolon) after the reserved word **FOR**. 
These three parts, that are optional (they can be omitted), are the following ones:

- **Initialisation**. An assignment statement is normally codified in this part. This kind of statement establishes the initial value of the variable that is going to be used as a counter of the loop's **iterations** (each execution of the inner group of statements is called a loop's **iteration**).  The assignment statement **x=0**, that would put the **x** variable at zero at the beginning of the loop (value
for the first iteration), is an example.

- [Condition](definition_of_a_condition.md). A condition is specified in this part. Just before each iteration, this condition will be checked and, if it is true, the group of statements will be executed. If the condition is false, the **FOR** loop will finish, continuing the program after the [END](end.md) of the **FOR** loop.
An example of condition can be **x&lt;10**, that would allow the inner group of statements to be executed only when the **x** variable is a number
less than **10**.

- **Increment**. The increment of the variable used as a counter for each iteration of the loop is indicated in the third part. It is normally expressed with an assignment statement. For instance, the **x=x+1** statement would add **1** to the **x** variable after each iteration of the loop.

The group of inner statements of the loop that are going to sequentially be repeated while the condition of continuance (second part) is complied, must appear after the definition of the **FOR** loop with its three parts. After this group of statements, the reserved word [END](end.md) will determine the end of the **FOR** loop.

When a **FOR** statement appears in a program, the part of the initialisation will be executed first, 
checking the condition. If it is true, the inner group of statements first and, the part of the 
increment then, will be executed, being the condition checked again, etc. If, before any iteration, 
the condition turns to be false, the **FOR** loop will immediately finish.

A program with a **FOR** loop containing the three parts mentioned in the previous sections is now shown.

### Example:}
PROGRAM my_game;
BEGIN
    FOR ( x=0 ; x&lt;10 ; x=x+1 )
        // The internal statements would be put here.
    END
END
**-**

This loop would first run with the **x** variable equal to **0**, the second one equal to **1**, ..., and the last variable equal to **9**. The part of the increment would be executed after this iteration, becoming **x** equal to **10**. Then, on
checking the condition of continuance in the loop (**x** is less than **10**), if it is false, the loop would finish.

As it has been mentioned, the three parts in the definition of the loop are optional. If the three were omitted:

  **FOR ( ; ; )**

      // ...

  **END**

Then, this loop would be equivalent to a [LOOP](loop_statement.md) ... [END](end.md) loop.

Moreover, several parts of initialisation, condition or increment can be put in a **FOR** loop, separated by commas ([,](comma.md)). At first, all the initialisations will be executed. Then, all the conditions of continuance will be checked (if any of them turns to be false, the loop will finish). The inner statements and, after every iteration, all the increments, will finally be checked.

[Example:]()
PROGRAM my_game;
BEGIN
    FOR ( x=0, y=1000 ; x&lt;y ; x=x+2, y=y+1 )
        // The internal statements would be put here.
    END
END
**-**

A [BREAK](break_statement.md) statement inside a **FOR** loop will immediately finish it, continuing the program from the following statement of this loop.

A [CONTINUE](_continue_statement.md) statement inside a **FOR** loop will force to execute the part of the increment directly and then, to verify the condition of continuance. If it is true, then the inner statements will be executed again from the beginning. If the condition turns to be false, then the [CONTINUE](_continue_statement.md) statement will finish the **FOR** loop.

A **FOR** loop is practically equivalent to a [WHILE](while_statement.md) loop, implemented
in the following way:

{#9999,Example
```
PROGRAM my_game;
BEGIN
    x=0;
    WHILE (x<10)
        // The internal statements would be put here.
        x=x+1;
    END
END
```


With the only exception that a [CONTINUE](_continue_statement.md) statement, inside this [WHILE](while_statement.md) loop, would not execute the part of the increment, while it would do so inside a **FOR** loop.

If, after the execution of the initialisation, the condition turns to be false directly inside a **FOR** loop, no inner statements will ever be executed.

The internal statements of a **FOR** loop can be as many as desired, and of any kind, obviously including new **FOR ** loops.

---------------------------------------
See: [Syntax](syntax_of_a_programdot.md)

