**let_me_alone()**

### Description

Sends a [s_kill](s_kill.md) signal to every process (except the one that called
this function) to stop processing.

This function is normally called from the main process when a game has finished, 
to eliminate every process (shots,enemies, etc.) that still remain active 
and recover the control of the program.

A call to **let_me_alone()** could always  be swapped for a group of calls to the 
[signal()](signal().md) function with the [s_kill](s_kill.md) signal, but to do this
you need to know the types of the processes that you wish to eliminate
or their [identifier codes](_identifying_codes_of_processesdot.md).

### Example program
```
PROGRAM example_let_me_alone;
BEGIN
    load_fpg("help/help.fpg");
    ball (160, 100, 100);
    write (0, 160, 0, 1, "Press [SPACE] to eliminate the process");
    WHILE (NOT key (_space))
        FRAME;
    END

    let_me_alone(); // The other processes are eliminated

    LOOP
        FRAME;
    END
END

PROCESS ball(x, y, graph)
BEGIN
    LOOP
        FRAME;
    END
END
```


In this example a **ball** process is created, and the program waits for the space bar to
be pressed. At this point, the **let_me_alone()** function is called, which eliminates
every process except the main one, which kills the ball process.

---------------------------------------


If you wish to check the processes that are active in a program at any given
moment, the debugger may be accessed by pressing the [**F12**] key.

---------------------------------------


The [exit()](exit().md) function is used to finish a program instantly, returning
to the operating system.

---------------------------------------
See: [exit()](exit().md) - [signal()](signal().md)

