All the processes have their own [identifying code](_identifying_codes_of_processesdot.md) in [ID](id.md)
(reserved word in the language that is equivalent to the [identifying code](_identifying_codes_of_processesdot.md) of the process).

When a process is created (is called), it returns its own [identifying code](_identifying_codes_of_processesdot.md) as return value, unless it has finished with a [RETURN](return_statement.md)[(]((__).md)&lt;expression&gt;[)]((__).md). That is to say, a process will always return its [identifying code](_identifying_codes_of_processesdot.md) when it finishes (when its [END](end.md) is reached), when it executes the [FRAME](frame_statement.md) or the [RETURN](return_statement.md) statements without expression in brackets.

In the following example, a process (**my_process** type) is created from the main program, and its identifier is stored in the **id2** variable.

### Example:}
PROGRAM my_game;
PRIVATE id2;
BEGIN
    id2=my_process();
    // ...
END
PROCESS my_process()
BEGIN
    // ...
END
**-**

All the processes have the following local variables predefined with identifiers of other processes:

[father](local_father.md) - father, identifier of the process that created it (the one that made the call).

[son](local_son.md) - son, identifier of the last process created by it (last called process).

[bigbro](local_bigbro.md) - Elder brother, identifier of the last process created by the father before creating it.

[smallbro](local_smallbro.md) - Younger brother, identifier of the following process created by the father after having created it.

These variables can be equal to **0** if they have not been defined (for instance,
[son](local_son.md) will be equal to **0** until a process is not created or if this process has disappeared).

The processes' identifying codes allow us to access their local variables (&lt;identifier&gt;.&lt;variable&gt;) and, as [father](local_father.md), [son](local_son.md), etc. are also local variables, it is possible to make combinations such as **son.bigbro** to access the identifier of the penultimate process created (as [son](local_son.md) is the last one; therefore, its elder brother will be the penultimate one).

Besides creation or direct relationship, there are other ways to obtain identifying codes of processes, as indicated below:

- The [get_id()](get_id().md) function to obtain the identifiers of the processes of a specific type (spacecraft, shot, etc.) existing at a specific moment in the game.

- The [collision()](collision().md) function to obtain the identifiers of the
processes with which it is colliding.

When a specific process needs to access from many others, as it is an important process such as, for instance, the protagonist spacecraft of a game,
then it can be more useful to assign its identifier to a [GLOBAL](declaration_of_global_datadot.md) variable of the program (that can be accessed by any process at any point). Thus, any process will be able to interact with it, as it will have its identifier.

{#9999,Example
```
PROGRAM my_game;
GLOBAL
  id_spacecraft;
BEGIN
    id_spacecraft=spacecraft();
    // ...
END
PROCESS spacecraft()
BEGIN
    // ...
END
PROCESS enemy()
BEGIN
    // ...
    id_spacecraft.z=0;
    // ...
END
```


In this example, at a specific point the **enemy** type processes access the **z** variable of the **spacecraft** created by the main program, using for that purpose its identifier, that is included in the **id_spacecraft** global variable.

---------------------------------------
See: [Identifying codes of processes.](_identifying_codes_of_processesdot.md)

