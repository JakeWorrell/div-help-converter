**FROM** &lt;variable&gt;[=](equal.md)[&lt;constant&gt;](definition_of_a_constantdot.md) [TO](to.md) [&lt;constant&gt;](definition_of_a_constantdot.md)[;](semicolon.md)

    [&lt;statement&gt;](declaration_of_statementsdot.md) [;](semicolon.md)

    ...

[END](end.md)

(or)

**FROM** &lt;variable&gt;[=](equal.md)[&lt;constant&gt;](definition_of_a_constantdot.md) [TO](to.md) [&lt;constant&gt;](definition_of_a_constantdot.md) [STEP](step.md) [&lt;constant&gt;](definition_of_a_constantdot.md)[;](semicolon.md)

    [&lt;statement&gt;](declaration_of_statementsdot.md) [;](semicolon.md)

    ...

[END](end.md)

The **FROM** statement implements a **loop**. That is to say, it is capable of **repeating a group of statements a specific number of times**.

A [GLOBAL](declaration_of_global_datadot.md), [LOCAL](declaration_of_local_datadot.md) or [PRIVATE](declaration_of_private_datadot.md) variable of the process itself that can be used as a loop counter is needed to implement this loop.

The reserved word **FROM** must be put before the statements that will comprise the inner group of statements. This word will be followed by the **name of the counter variable**, the symbol of assignment ([=](equal.md)), the **initial value** of the variable, the reserved word [TO](to.md) and, finally, the **final value** of the variable.
The symbol [;](semicolon.md) (semicolon) must be put after this declaration of the loop **FROM**.

The inner group of statements that is intended to be repeated a specific number of times is put after this head defining the conditions of the loop. Finally, the reserved word [END](end.md) will be put.

The name of **iteration** of the loop is referred to the number of times that the inner set of statements is executed.

The first iteration will be performed with the **initial value**
in the variable used as a counter. After this iteration, **1 will be added**
to this variable (if the initial value **is less** that the final value). Otherwise **1 will be subtracted** from it. After having updated the value of the variable, it is necessary to pass to the following iteration, provided that the value of this variable has not reached (or exceeded) the **final value** of the loop.

The reserved word [STEP](step.md) can be put as second meaning of the **FROM** statement, after the initial and final values of the statement. This word must be followed by a **constant value** indicating the increment of the counter variable after every iteration of the loop, instead of **1** or** -1**, which are the increments
that will be performed by default if the [STEP](step.md) declaration is omitted.

The following example shows a program with two loops **FROM**: one without 
[STEP](step.md) declaration (with increment or decrement by default) and the other with it.

### Example:}
PROGRAM my_game;
BEGIN
    FROM x=9 TO 0;
        // Inner statements ...
    END
    FROM x=0 TO 9 STEP 2;
        // Inner statements ...
    END
END
**-**

The first loop will be executed **10** times with the **x** variable . Its value will range between **9** and **0** in the different iterations. By default, 1 will be subtracted from the variable each time, as the initial value (9) is bigger than the final value (0).

In the second loop, constant **2** is indicated as the increment of the variable. Thus, the loop will be executed **5** times with the **x** variable, whose values will be **0**, **2**, **4**, **6** and **8**, respectively, in the consecutive iterations.
As it can be noticed, no iteration will be performed with **x** being equivalent to **9**, even if it is the loop's **final value**.

By default, if **2** had not been specified as [STEP](step.md) of the loop,
**1** would have been added to the **x** variable after each iteration.

A loop **FROM** can always be performed with the [FOR](for_statement.md) statement,
as it is now shown (with two loops equivalent to those of the previous example).

{#9999,Example
```
PROGRAM my_game;
BEGIN
    FOR ( x=9 ; x>=0 ; x=x-1 )
        // Inner statements ...
    END
    FOR ( x=0 ; x<=9 ; x=x+2 )
        // Inner statements ...
    END
END
```


The **initial** and **final** values of a loop **FROM** must be different.

If the initial value **is less** than the final value, it is not possible to specify a negative value in the [STEP](step.md) declaration.

If the initial value **is bigger** than the final value, it is not possible to specify a positive value in the [STEP](step.md) declaration.

A [BREAK](break_statement.md) statement inside a loop **FROM** will immediately finish it, continuing the program from the following statement to this loop (after the [END](end.md)).

A [CONTINUE](_continue_statement.md) statement inside a **FROM** loop will force the program to increment the variable used as a counter immediately and then, if the final value has not been exceeded, to start the following iteration.

The statements inner to a loop **FROM** may be as many as desired, of any kind, obviously including new loops **FROM**.

---------------------------------------
See: [Syntax](syntax_of_a_programdot.md)

