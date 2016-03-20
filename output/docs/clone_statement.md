**CLONE**

    [&lt;statement&gt;](declaration_of_statementsdot.md) [;](semicolon.md)

    ...

[END](end.md)

This statement creates a new process identical to the current one, with the exception that the statement between the reserved words **CLONE** and [END](end.md) will only be executed in the new process, but not in the current one.

For instance, if any process of the program, with specific coordinates ([x](local_x.md), [y](local_y.md)) and with a specific graphic ([graph](local_graph.md)), executes the following statement:

  **CLONE**

      x=x+100;

  [END](end.md)

A new process will be created, identical to the former, with the same graphic and the same values in all its variables, with the exception of the [x](local_x.md) coordinate that, in the new process, will be placed **100** pixels farther to the right.

This statement is used to create replicas of a process, dividing it into two processes (almost) similar.

### Example:}
PROGRAM my_game;
BEGIN
    // ...
    x=0;
    y=0;
    CLONE
        x=x+10;
    END
    CLONE
        y=y+10;
    END
    // ...
END
**-**

In this example, the **2** **CLONE** statements will create **3** copies of the main process (and not 2, as it could have been expected).

On executing the first **CLONE** statement, a new process will be created. Thus, there will be **2** processes: one in (x=0, y=0) and the other in (x=10, y=0). These two processes will execute the second **CLONE** statement. The first one (the original one) will create a new process in (x=0, y=10), and the second one will create the new process in (x=10, y=10).

To create only **2** copies of the original process, the program could have been constructed, for instance, in the following way:

{#9999,Example
```
PROGRAM my_game;
BEGIN
    // ...
    x=0;
    y=0;
    CLONE
        x=x+10;
        CLONE
            y=y+10;
        END
    END
    // ...
END
```


The original process (x=0, y=0) will create one in (x=10, y=0) and the latter will create another one in (x=10, y=10). Therefore, only two copies of the original will be created.

Much care must be taken when it comes to using the **CLONE** statement sequentially or inside a **loop**,
as it is necessary to take into account that the first '**clones**' may also create new '**clones**'.

This statement can be used without putting statements between the words **CLONE** and [END](end.md).
But, intending to have two identical processes with the same coordinates, the same graphic and
executing the same code, seems to make little sense, at least at first.

---------------------------------------
See: [Syntax](syntax_of_a_programdot.md)

