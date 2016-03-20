**signal(**&lt;id&gt;**,** &lt;signal&gt;**)**

### Description

Sends a signal to a process (an object of the game). This function is used mainly to 
destroy (kill) a process from other, sending it a signal [s_kill](s_kill.md).

If you don't know the meaning of process father, son,
**brother**, of an **orphaned** process, etc., then see [Hierarchy of processes](hierarchies_of_processesdot.md).

If you don't know the terms live, **dead**, **slept**, etc., referred to processes
, then see [Process state](states_of_a_processdot.md)

### Example:}
PROGRAM my_game;
PRIVATE id2;
BEGIN
    id2=my_process();
    // ...
    signal(id2, s_kill);
END
PROCESS my_process()
BEGIN
    // ...
    LOOP
        FRAME;
    END
END
**-**

This program would create a **my_process** type process and then it would delete it with the **signal(id2,s_kill)** statement (id2 is a variable of the main program that contains the [identifying code](_identifying_codes_of_processesdot.md) of the process that is going to be deleted).

Any process may send a signal to another one, provided that the former has the [identifying code](_identifying_codes_of_processesdot.md) of the latter. See:

  [Identifying codes of processes](_identifying_codes_of_processesdot.md)

  [Ways to obtain the identifying code of a process](ways_to_obtain_the_identifying_code_of_a_processdot.md)


Nevertheless, there are other **signal types** that may be sent to a process,
and they are the following ones:

[s_kill](s_kill.md) - Order to **kill** the process. The process will not appear in the following frames of the game any longer.

[s_sleep](s_sleep.md) - Order to **make** the process **dormant**. The process will remain paralyzed, without executing its code and without being displayed on screen (nor being detected by the rest of the processes), as if it had been killed. But the process will continue to exist in the computer's memory (see **s_wakeup**).

[s_freeze](s_freeze.md) - Order to **freeze** the process. The process will remain motionless without running its code. But it will continue being displayed on screen and it will be possible to detect it (in the collisions) by the rest of the processes. The process will continue to exist in the computer's memory, even if its code is not executed (see **s_wakeup**).

[s_wakeup](s_wakeup.md) - Order to **wake up** the process. It returns a **slept** or **frozen** process to its normal state. The process will be executed and displayed again from the moment that it receives this signal normally.
A process that has been deleted (killed) can not be returned to its normal state, since it does not exist in the computer's memory any longer.

A process can also send these signals to itself, taking into account that the [identifying code](_identifying_codes_of_processesdot.md) of a process is always [ID](id.md) (word reserved in the  language to this purpose). The statement would be as follows:

**signal(**[id](id.md)**,** &lt;signal&gt;**)**

Self-deleting a process in this way, sending a [s_kill](s_kill.md) signal to itself, will not instantaneously destroy the process, but in the following ([FRAME](frame_statement.md)) display. The [RETURN](return_statement.md) statement can be used to immediately delete a process.

**All the signals sent to processes will be implemented just before the next display of the game**, in the next [FRAME](frame_statement.md) of the game (not instantaneously).

Together with these four signals, there are other four signals that directly correspond to the previous ones. They are: [s_kill_tree](s_kill_tree.md), [s_sleep_tree](s_wakeup_tree.md), [s_freeze_tree](s_freeze_tree.md) and [s_wakeup_tree](s_sleep_tree.md).

These signals are sent not only to the indicated process, but also **to all the processes that it has created**. That is to say, if a [s_kill_tree](s_kill_tree.md) signal is sent to a process, the latter and all its descendants (sons, grandsons, ...) will be deleted as well as all the processes created by it and the processes created by the latter.

An exception to these last four signals is when there is an **orphan process**, a process whose father (the process that called it) is already dead. The orphan processes will not receive the signal when it is sent to a process from which they are descended as, on having disappeared their father, it won't be able to send the signal to the processes it created.

{#9999,Example program
```
PROGRAM example_signal;
PRIVATE
    id_text;
BEGIN
    load_fpg("help/help.fpg");
    put_screen(0, 1);
    write(0, 0, 0, 0, "1 - create the process");
    write(0, 0, 10, 0, "2 - kill the process");
    write(0, 0, 20, 0, "3 - sleep the process");
    write(0, 0, 30, 0, "4 - freeze the process");
    write(0, 0, 40, 0, "5 - wake up the process");
    id_text=write(0, 0, 190, 0, "There is no process");
    LOOP
        IF (key(_1) AND NOT son)
            delete_text(id_text);
            my_process();
            id_text=write(0, 0, 190, 0, "Process alive");
        END
        IF (key(_2) AND son)
            delete_text(id_text);
            signal(son, s_kill);
            id_text=write(0, 0, 190, 0, "There is no process");
        END
        IF (key(_3) AND son)
            delete_text(id_text);
            signal(son, s_sleep);
            id_text=write(0, 0, 190, 0, "Process slept");
        END
        IF (key(_4) AND son)
            delete_text(id_text);
            signal(son, s_freeze);
            id_text=write(0, 0, 190, 0, "Process frozen");
        END
        IF (key(_5) AND son)
            delete_text(id_text);
            signal(son, s_wakeup);
            id_text=write(0, 0, 190, 0, "Process alive");
        END
        FRAME;
    END
END

PROCESS my_process()
BEGIN
    graph=100;
    LOOP
        x=160+get_distx(angle, 140);
        y=100+get_disty(angle, 80);
        angle+=5000;
        FRAME;
    END
END
```


With the **1** key, this program will create a process (**my_process**) that rolls around the screen; with the keys from **2** to **5**, different signals will be sent to this process, by using this function. The [identifying code](_identifying_codes_of_processesdot.md)
of **my_process** is located in the **son** local variable of the main program by default.

When a process is created, the system defines the [son](local_son.md) variable of the father with the [identifying code](_identifying_codes_of_processesdot.md) of the son, and the [father](local_father.md) variable of the son with the identifying code of the father.

---------------------------------------


**signal(**[TYPE](types_of_processesdot.md) &lt;name of the process&gt;**,** &lt;signal&gt;**)**

### Description

This second meaning of the **signal** function is similar to the previous one, with the exception that, instead of sending a signal to a process from its [identifying code](_identifying_codes_of_processesdot.md), it allows us to send a signal {to all the processes
of a specific type} or to them and their descendants, when the used signals are
of the type **s_kill_tree** (see: [Types of processes](types_of_processesdot.md)).

For instance, if several processes of the **enemy** type exist or may exist in a game, and the aim is to freeze these processes (without freezing their descendants), the following statement will be used:

  **signal(TYPE enemy, s_freeze);**

As it can be noticed, it is necessary to have the [identifying code](_identifying_codes_of_processesdot.md) of a specific process in order to send a signal to it. To delete a group of processes, it is necessary either that they are of the same kind, that this group is made up of a process and its descendants, or that all their identifiers are known ( in order to send them the signal one by one).

It is possible to send a signal to a type of processes, even if no process of this type is being executed in the game. But if a signal is sent to a process that has already been killed, with its [identifying code](_identifying_codes_of_processesdot.md) (first meaning of the **signal** statement), there is a risk that the [identifying code](_identifying_codes_of_processesdot.md) is now used by another process, which is going to receive the signal. This happens, for instance, when the aim is to kill a process that has already been killed, as it is possible that another different one is being killed.

---------------------------------------


### Note If the aim is to delete all the processes except the current one, the [let_me_alone()](let_me_alone().md) function may be used. This function sends a **s_kill** signal  to all the processes, except the one that executed this function.

---------------------------------------
See: [let_me_alone()](let_me_alone().md) - [Identifier codes](_identifying_codes_of_processesdot.md) - [Types of processes](types_of_processesdot.md)

