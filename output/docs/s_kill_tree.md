Constant: **s_kill_tree**
---------------------------------------


This constant is used as a parameter of the [signal()](signal().md) function (to send signals to the processes).
Its value is **100**.

This signal is used to eliminate a process and all the process created by it, by sending the imperative order **kill** to them. This is a version of the signal [s_kill](s_kill.md), which eliminates a process, but not the processes that it had created.

That is to say, the signal **s_kill_tree** will eliminate the process and all its descendants. Thus, none of them will appear any longer in the following frames of the game.

The whole list of the constants used as signals that can be sent to the different processes of a program is the following one:

    [s_kill](s_kill.md)

    [s_wakeup](s_wakeup.md)

    [s_sleep](s_sleep.md)

    [s_freeze](s_freeze.md)

    **s_kill_tree**

    [s_wakeup_tree](s_wakeup_tree.md)

    [s_sleep_tree](s_sleep_tree.md)

    [s_freeze_tree](s_freeze_tree.md)


---------------------------------------
See: [Constants](constants_predefined.md) - [signal()](signal().md) - [s_kill](s_kill.md)

