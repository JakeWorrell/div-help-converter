In a [FROM](from_statement.md) statement:

- If the initial value **is less** than the final value, a negative value can not be specified in the declaration [STEP](step.md).

- If the initial value **is bigger** than the final value, a positive value can not be specified in the declaration [STEP](step.md).

### Example
```
PROGRAM my_game;
BEGIN
    FROM x=0 TO 10 STEP -1; // Error: The value STEP is not valid.
        //...
    END
END
```


This loop is not valid as, if **1** is subtracted from **x** (that originally will be equal to **0**) in every iteration, it will never reach **10**. If the aim is to create a continuous loop, the [LOOP](loop_statement.md) statement must be used.

---------------------------------------
See: [Syntax](syntax_of_a_programdot.md) - [Statement FROM](from_statement.md)

