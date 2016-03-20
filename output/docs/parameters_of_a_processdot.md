The parameters of a process are basically a list of data in which the process will receive different information every time it is called or used from another process.

The processes can receive parameters in the following types of data:

- A predefined local variable (such as [x](local_x.md), [size](), [flags](local_flags.md), ...).

- A local variable defined inside the [LOCAL](declaration_of_local_datadot.md) section.

- A global variable defined inside the [GLOBAL](declaration_of_global_datadot.md) section.

- A process' private variable declared inside the [PRIVATE](declaration_of_private_datadot.md) section of the process itself.

- A private variable **not declared** inside the [PRIVATE](declaration_of_private_datadot.md) section.

In all these cases, it is understood that a variable may be referred to a variable,
to a specific position of a table or to an element inside a structure.

As an example of the different types of parameters, a program with a process that receives five parameters different from the types respectively indicated in the previous list, is now shown.

### Example
```
PROGRAM my_game;
GLOBAL
    score=0;
LOCAL
    energy=0;
BEGIN
    my_process(1, 2, 3, 4, 5);
    // ...
END

PROCESS my_process(x, energy, score, n, m)
PRIVATE
    n;
BEGIN
    // ...
END
```


The process **my_process** receives five parameters in five variables:
predefined local, local, global, [private](declaration_of_private_datadot.md) declared and [private](declaration_of_private_datadot.md) not
declared variables.

Receiving a parameter (such as the [GLOBAL](declaration_of_global_datadot.md) **score** variable) in a global data is equivalent to make the assignment (**score=3;**) and then,
call the process.

---------------------------------------
See: [Syntax](syntax_of_a_programdot.md)

