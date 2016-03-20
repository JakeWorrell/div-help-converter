The **FRAME** statement is an essential part of the language. A program's working is described below 
in general terms:

- The main program starts its execution. This process may create more processes (objects of the game) 
at any point. All the processes may finish at any moment, and they may create or eliminate other processes.

- The games will always be displayed frame by frame. In each frame, the system will execute all the 
processes existing at that moment, one by one, until each one executes the **FRAME** statement, which 
will indicate that it is ready for the next display (frame).

In the preparation of each frame, all the processes will be executed in the established priority 
order (the [priority](local_priority.md) local variable of the processes determines this order).

Therefore, this statement is similar to an order for the processes to be displayed.

If a process starts its execution and it neither finishes nor executes this statement, then the program 
will become blocked, as there is a process that is never ready for the next display. Therefore, the 
system won't be capable of showing the following frame.

### Example
```
PROGRAM my_game;
BEGIN
    my_process();
    my_process();
    LOOP
        IF (key(_esc))
            my_second_process();
        END
        FRAME;
    END
END
PROCESS my_process()
BEGIN
    LOOP
        FRAME;
    END
END
PROCESS my_second_process()
BEGIN
    LOOP
    END
END
```


In this program, the main process (a **my_game** type process) creates other two
processes (**my_process** type). From that moment, the three processes
will continuously be executed, each one to their **FRAME** statement. But if the escape key (**ESC**) is pressed, then the main process will create a new process (**my_second_process** type) that will remain in a [LOOP](loop_statement.md) loop indefinitely, without executing any **FRAME**. Consequently, the program will be interrupted (the system will report such a situation after few seconds; see [max_process_time](global_max_process_time.md)).

Basically, all the processes that correspond with objects of a game
construct a loop inside which, every frame establishes all its display values ([x](local_x.md), [y](local_y.md), [graph](local_graph.md), [size](local_size.md), [angle](local_angle.md), ...), executing then the **FRAME** statement.

**Synchronisation of processes**---------------------------------------


It is possible to use this statement with the following syntax:

**FRAME(**&lt;percentage&gt;**)**

By putting in brackets a whole percentage, from 0 to 100 or bigger, after the reserved word **FRAME**.

This figure will indicate the percentage of the following frame, completed by the  process. That is to say, the absence of this percentage is equivalent to putting **FRAME(100)** (100% of the work previous to the following display has been completed by the process).

For instance, if a process executes the **FRAME(25)** statement in a loop, it will need to execute it **4 times** before it is ready for the next display (as 4*25% is the 100%).

On the other hand, if a process executes the **FRAME(400)** statement inside its loop, after its first execution, it will have completed 400% the display. Therefore,even after the display, a completed 300% of display will still be missing. For that, in the preparation of the following **3** frames the system won't execute this process, as it is ready for the display. Then, this process would be executed just once every 4 frames (unlike the example of the previous paragraph, in which it was executed 4 times every game's frame).

The processes won't reach the next display unless they give **100%, at least**. For instance, if a process always executes **FRAME(80)** statements, it will execute them twice before the first display, so it will have completed 160% (2*80%) the display. Therefore, it will have pre calculated 60% (160%-100%) for the next display. For that reason, in the second display it will only require a **FRAME(80)** statement to be displayed, as this 80%, plus the remaining 60% of the first display, will be equal to a 140% completed. Therefore, it will immediately be displayed ,and a 40% will be left to prepare the next frame.

---------------------------------------


A **FRAME(0)** statement completing a 0% of the next display only makes sense in the two following cases:

- It can be a way to force the system to execute in this point the rest of the processes having the same priority as the current one and, after them, the system will execute the latter again.

- It can also be a way to initialise functions such as [get_id()](get_id().md) or
[collision()](collision().md), as they return some specific values for every frame. If the aim is to obtain values again, it is possible to execute a **FRAME(0)** statement that will be interpreted as a new frame by these functions.

---------------------------------------
See: [Syntax](syntax_of_a_programdot.md)

