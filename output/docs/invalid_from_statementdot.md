In a [FROM](from_statement.md) statement:

- The **initial** and **final** values of a [FROM](from_statement.md) loop must be different.

### Example
```
PROGRAM my_game;
BEGIN
    FROM x=0 TO 0; // Error: Invalid FROM statement.
        //...
    END
END
```


Creating this loop makes no sense, as the inner set of statements will be repeated just once, which would be equivalent to initialising **x** at **0** (with the **x=0;** statement) and, then, to directly putting the inner statements, omitting the loop [FROM](from_statement.md).

If the aim is to create an ever-repeating loop, the [LOOP](loop_statement.md) statement must be used.

---------------------------------------
See: [Syntax](syntax_of_a_programdot.md) - [FROM statement](from_statement.md)

