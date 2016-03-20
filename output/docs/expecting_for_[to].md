The compiler was expecting for the reserved word [TO](to.md) of the [FROM](from_statement.md) statement in the indicated position of the program.

The syntax of the [FROM](from_statement.md) loop statement is the following one:

[FROM](from_statement.md) &lt;variable&gt;**=**[&lt;constant&gt;](definition_of_a_constantdot.md) [TO](to.md) [&lt;constant&gt;](definition_of_a_constantdot.md)
[STEP](step.md) [&lt;constant&gt;](definition_of_a_constantdot.md)**;**

    [&lt;statement&gt;](declaration_of_statementsdot.md) **;**

    ...

[END](end.md)

Being the [STEP &lt;constant&gt;](step.md) declaration optional.

After the reserved word [FROM](from_statement.md), the **name** of a variable (normally local or private) of the process must appear directly, and then the symbol [=](equal.md) (assignment), preceding a constant. After this constant value, only the reserved word [TO](to.md) can appear.

### Example
```
PROGRAM my_game;
GLOBAL
    id2;
BEGIN
    //...
    FROM id2.x=0 STEP 9; // Error: expecting for [TO].
        //...
    END
END
```


In a [FROM](from_statement.md) statement, the **initial** and **final** values of the loop's counter variable must always appear in both sides of the word [TO](to.md).

---------------------------------------
See: [Syntax](syntax_of_a_programdot.md) - [Statement FROM](from_statement.md)

