In the indicated position of the program, the aim is to access a variable
of another process. But this is not possible, as this variable is not local
in the other process.

It is necessary to verify that the variable intended to access either is defined inside the [LOCAL](declaration_of_local_datadot.md) section of the program, or is a local variable predefined in the language (such as [x](local_x.md), [y](local_y.md), [graph](local_graph.md),
[size](local_size.md), ...).

### Example
```
PROGRAM my_game;
GLOBAL
    id_my_process;
    score=0;
BEGIN
    id_my_process=my_process();
    id_my_process.x=0;
    id_my_process.score=0; // Error: Local variable that can not be accessed.
END
PROCESS my_process()
BEGIN
    //...
END
```


In this case, the aim is to access the **score** of **my_process**, but
**score** is just a single [GLOBAL](declaration_of_global_datadot.md) variable and not a [LOCAL](declaration_of_local_datadot.md)
variable of every process. This can also happen by trying to access a constant
(defined in [CONST](definition_of_a_constantdot.md)) or an expression like:

  **x=id_my_process.(x+1);**

In this example, the expression makes no sense at all. The following expression would probably be the one intended to be used:

  **x=id_my_process.x+1;**

  (equivalent to **x=(id_my_process.x)+1;**).

---------------------------------------
See: [Syntax](syntax_of_a_programdot.md) - [Declaration of local data](declaration_of_local_datadot.md)

