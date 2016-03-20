The blocks of the programs starting with the reserved word [PROCESS](declaration_of_processesdot.md)
determine the performance of a specific process type. Then, when the program is executed,  any number of processes of this type will be able to exist at a specific moment. Each of these processes will have a different [identifying code](_identifying_codes_of_processesdot.md), but all of them are of the same type.

### Example
```
PROGRAM my_game;
BEGIN
    // ...
END
PROCESS spacecraft()
BEGIN
    // ...
END
PROCESS enemy()
BEGIN
    // ...
END
PROCESS shot()
BEGIN
    // ...
END
```


In this example, four types of processes are defined: **my_game** (the type of the program's initial process), **spacecraft**, **enemy** and **shot**.

The number of processes of each of these types existing in the game depends on the number of calls made to these processes.

All the processes of **spacecraft** type will always execute the statements defined in the **PROCESS spacecraft()** of the program.

**A &quot;process type&quot; is a numeric code referred to the name of the PROCESS that determines how the** process **works** **during the game. This numeric code can be obtained with: TYPE &lt;name_of_the_process&gt;.**

**TYPE** is an operator defined in the language that, applied to a process name,
returns this numeric code.

For instance, **TYPE spacecraft** will be equivalent to a specific numeric constant and **TYPE enemy** will be equivalent to another one.

All the processes have a local variable containing this numeric code, which is: **reserved.process_type**.

**What is the process type for?**---------------------------------------


The process type is used for several things, as it is mentioned below:

- For the [get_id()](get_id().md) function that receives a process type (for instance, **get_id(TYPE enemy)**) as a parameter and returns the identifying codes of the processes of this type existing in the game at that moment.

- For the [collision()](collision().md) function is similar to the previous one, with the proviso that it returns the identifying codes of the processes with which it is colliding (the graphics of both processes are partially superposed).

- For the [signal()](signal().md) function, that may send a signal to all the existing processes of a specific type.

- Or to verify, from a process' [identifying code](_identifying_codes_of_processesdot.md), what kind of process it is (type spacecraft, type shot, etc.).

---------------------------------------


The operator TYPE can only be used preceding a process name of the program or the word **mouse**, to detect collisions with the mouse pointer (with **collision(TYPE mouse)**).

---------------------------------------
See: [Identifying codes of processes.](_identifying_codes_of_processesdot.md)

