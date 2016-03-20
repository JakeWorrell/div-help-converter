**IF** [(]((__).md) [&lt;condition&gt;](definition_of_a_condition.md) [)]((__).md)

    [&lt;statement&gt;](declaration_of_statementsdot.md) [;](semicolon.md)

    ...

[END](end.md)

(or)

**IF** [(]((__).md) [&lt;condition&gt;](definition_of_a_condition.md) [)]((__).md)

    [&lt;statement&gt;](declaration_of_statementsdot.md) [;](semicolon.md)

    ...

[ELSE](else.md)

    [&lt;statement&gt;](declaration_of_statementsdot.md) [;](semicolon.md)

    ...

[END](end.md)

The **IF** statement is used to run a block of statements optionally, when a condition is complied. In the second aforementioned variant,
another block of statements will also be executed (inside the
[ELSE](else.md) section) when the condition is **not** complied.

A program with several **IF** statements is now shown.

### Example
```
PROGRAM my_game;
BEGIN

    IF (key(_esc))
        exit("Good by!", 0);
    END

    IF (x>100 AND x<220)
        y=y+4;
    ELSE
        y=y-8;
    END

    IF (size>0)
        size=size-1;
    END

    IF (timer[5]>1000)
        z=1;
    ELSE
        z=-1;
    END

    // ...
END
```


It is possible to nest **IF** statements with no limits. That is to say, more **IF** statements can be put inside the part that is running when the condition is complied (**IF part**) or inside the one that is executed when the condition is not
complied (part [ELSE](else.md)).

---------------------------------------
See: [Syntax](syntax_of_a_programdot.md)

