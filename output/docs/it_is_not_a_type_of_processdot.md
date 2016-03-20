The [TYPE](types_of_processesdot.md) operator may only be used if it goes before a process name of the program or the word [mouse](global_struct_mouse.md) (to detect collisions with the mouse pointer).

In the indicated position of the program, it is not preceding a process name. It is probable either that the process name has been incorrectly written or that the type of a process is intended to be obtained from its [identifying code](_identifying_codes_of_processesdot.md).

There is a way to obtain the type of a process having its [identifying code](_identifying_codes_of_processesdot.md), as it is shown below (suppose that we have the identifier in the **id2** variable).

    **id2.reserved.process_type**

Instead of **TYPE id2** that is not allowed (as there is no process
named **id2**, since **id2** is a variable).

Next, an example of correct use of the [TYPE](types_of_processesdot.md) operator is shown
(with the aim of obtaining the [identifying code](_identifying_codes_of_processesdot.md) of a process).

### Example
```
PROGRAM my_game;
PRIVATE
    id2;
BEGIN
    //...
    id2=get_id(TYPE my_process);
    //...
    id2=get_id(TYPE id2); // Error: It is not a type of process.
    //...
END
PROCESS my_process()
BEGIN
    //...
END
```


As it can be noticed, the [TYPE](types_of_processesdot.md) operator requires the process name of the program with no brackets or parameters.

---------------------------------------
See: [Syntax](syntax_of_a_programdot.md) - [Types of processes](types_of_processesdot.md)

