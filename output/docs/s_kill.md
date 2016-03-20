Constant: **s_kill**
---------------------------------------


This constant is used as a parameter of the [signal()](signal().md) function (to send signals to the processes).
Its value is **0**.

This signal transmits the imperative order **kill**
to the processes. It is used to eliminate processes in the program
(to make certain objects of the game disappear).

That is to say, on sending a signal **s_kill** to a process, the latter will be eliminated and will not appear any longer in the following frames of the game.

The constant [s_kill_tree](s_kill_tree.md) is directly linked to this constant, with the proviso that, on sending this signal, the former will eliminate the indicated process and its **sons**, which are the processes created by it.

The whole list of the constants used as signals that can be sent to the different processes of a program is the following one:

    **s_kill**

    [s_wakeup](s_wakeup.md)

    [s_sleep](s_sleep.md)

    [s_freeze](s_freeze.md)

    [s_kill_tree](s_kill_tree.md)

    [s_wakeup_tree](s_wakeup_tree.md)

    [s_sleep_tree](s_sleep_tree.md)

    [s_freeze_tree](s_freeze_tree.md)


---------------------------------------
See: [Constants](constants_predefined.md) - [signal()](signal().md) - [s_kill_tree](s_kill_tree.md)

