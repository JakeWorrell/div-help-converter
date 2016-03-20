The compiler is expecting for a bracket with the [(]((__).md) symbol to be opened in the indicated position of the program.

There are many cases in which the opening of a [bracket]((__).md) is obligatory:

- **After a process name or a function**, its call parameters must always be indicated in brackets. Even when the process or the function have no parameters, a bracket must be opened and, later, closed.  

### Example:}
PROGRAM my_game;
BEGIN
    my_process();
    //...
END
PROCESS my_process()
BEGIN
  //...
END
**-**

- **In the control statements requiring a condition** to control the program's flow, that condition must be put in brackets.

[Example:]()
PROGRAM my_game;
BEGIN
    IF (x&lt;10)
        //...
    END

    WHILE (x&lt;10)
        //...
    END

    REPEAT
        //...
    UNTIL (x&lt;10)

    SWITCH (x)
        //...
    END

    FOR (x=0;x&lt;10;x++)
        //...
    END
END
**-**

  In this example, it is possible to see how the different control statements indicate the condition in brackets. There are two exceptions:

  - The [SWITCH](switch_statement.md) statement does not require a condition, but a simple expression, which must be in brackets, anyhow.

  - The [FOR](for_statement.md) statement has three parts inside the brackets, separated
by  semicolons. These parts are the following ones: initialisation (**x=0**),
condition (**x&lt;10**) and increment (**x++**).

- **After the [DUP](dup.md) operator** (used to initialise
tables and structures) it is also obligatory to open a bracket.

{#9999,Example
```
PROGRAM my_game;
GLOBAL
    table1[]=10 dup (1, 2, 3);
BEGIN
    //...
END
```


  In this example, table1 would be a table of 30 positions (from table1[0]
to table1[29]) initialised in the following way: 1, 2, 3, 1, 2, 3, ...

---------------------------------------
See: [Syntax](syntax_of_a_programdot.md) - [( )]((__).md)

