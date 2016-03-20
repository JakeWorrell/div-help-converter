Constant: **s_sleep**
---------------------------------------


This constant is used as a parameter of the [signal()](signal().md) function (to send signals to the processes).
Its value is **2**.

This signal transmits the imperative order **sleep** to the processes. It is used to make a process dormant. An asleep process will not appear in the following frames of the game, but it won't be eliminated, as it happens with the signal 
[s_kill](s_kill.md). Indeed, this kind of process may **wake up** at any moment with a signal [s_wakeup](s_wakeup.md).

That is to say, on sending a signal **s_sleep ** to a process, the latter will not appear in the following frames of the game (until it is awaken or eliminated).

The constant [s_sleep_tree](s_sleep_tree.md) is directly linked to this constant, with the proviso that, on sending this signal, the former will make dormant the indicated process and its **sons**, which are the processes created by it.

The whole list of the constants used as signals that can be sent to the different processes of a program is the following one:

    [s_kill](s_kill.md)

    [s_wakeup](s_wakeup.md)

    **s_sleep**

    [s_freeze](s_freeze.md)

    [s_kill_tree](s_kill_tree.md)

    [s_wakeup_tree](s_wakeup_tree.md)

    [s_sleep_tree](s_sleep_tree.md)

    [s_freeze_tree](s_freeze_tree.md)


---------------------------------------
See: [Constants](constants_predefined.md) - [signal()](signal().md) - [s_sleep_tree](s_sleep_tree.md)

