In the indicated position of the program, there is an attempt to access a [PRIVATE](declaration_of_private_datadot.md) variable of another process. It is not allowed.

If the aim is to access a variable of a process from another process, this variable must be declared inside the [LOCAL](declaration_of_local_datadot.md) section.

### Example:}
PROGRAM my_game;
PRIVATE n;
BEGIN
    my_process();
    //...
END
PROCESS my_process()
PRIVATE n;
BEGIN
    father.n=0; // It is not possible to access external PRIVATE data.
END
**-**

It is not possible to access [PRIVATE](declaration_of_private_datadot.md) data, even when the accessed process is of the same kind as the process that is trying to access the variable.

The correct way to declare the variable **n** in the previous example is as follows:

{#9999,Example
```
PROGRAM my_game;
LOCAL n;
BEGIN
    my_process();
    //...
END
PROCESS my_process()
BEGIN
    father.n=0;
END
```


Keep in mind that all the processes of the program will have the data declared inside the [LOCAL](declaration_of_local_datadot.md) section (all the processes of the previous example
will have an own variable named **n**).

---------------------------------------
See: [Syntax](syntax_of_a_programdot.md) - [Declaration of PRIVATE data](declaration_of_private_datadot.md)

