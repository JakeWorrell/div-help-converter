Constant: **s_wakeup**
---------------------------------------


This constant is used as a parameter of the [signal()](signal().md) function (to send signals to the processes).
Its value is **1**.

This signal transmits the imperative order **wakeup**
to the processes. It is used to restore the processes that have been made dormant (with the signal [s_sleep](s_sleep.md)), or frozen (with the signal [s_freeze](s_freeze.md)) to their normal state.

That is to say, on sending a signal **s_wakeup** to a process, the latter will be reactivated in the following frames of the game (it will be seen and processed again).

The constant [s_wakeup_tree](s_wakeup_tree.md) is directly linked to this constant, with the proviso that, on sending this signal, the former will wake up the indicated process and its **sons**, which are the processes created by it.

The whole list of the constants used as signals that can be sent to the different processes of a program is the following one:

[s_kill](s_kill.md)

    **s_wakeup**

    [s_sleep](s_sleep.md)

    [s_freeze](s_freeze.md)

    [s_kill_tree](s_kill_tree.md)

    [s_wakeup_tree](s_wakeup_tree.md)

    [s_sleep_tree](s_sleep_tree.md)

    [s_freeze_tree](s_freeze_tree.md)



---------------------------------------
See: [Constants](constants_predefined.md) - [signal()](signal().md) - [s_wakeup_tree](s_wakeup_tree.md)

