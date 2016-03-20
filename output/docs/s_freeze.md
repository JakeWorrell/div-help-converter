Constant: **s_freeze**
---------------------------------------


This constant is used as a parameter of the [signal()](signal().md) function (to send signals to the processes).
Its value is **3**.

This signal transmits the imperative order **freeze**
to the processes. It is used to freeze (immobilise) a process. A frozen process will continue to appear in the following frames of the game, but it won't be processed, so it will remain immobile. This process can be **reactivated** at any moment if a signal [s_wakeup](s_wakeup.md) is sent to it.

That is to say, on sending a signal **s_freeze** to a process, the latter will stop processing (stop interpreting its statements) in the following frames of the game (until it is activated or eliminated with [s_kill](s_kill.md)).

The constant [s_freeze_tree](s_freeze_tree.md) is directly linked to this constant, with the proviso that, on sending this signal, the indicated process as well as its **sons** (which are the processes created by it) will be frozen.

The whole list of the constants used as signals that can be sent to the different processes of a program is the following one:

    [s_kill](s_kill.md)

    [s_wakeup](s_wakeup.md)

    [s_sleep](s_sleep.md)

    **s_freeze**

    [s_kill_tree](s_kill_tree.md)

    [s_wakeup_tree](s_wakeup_tree.md)

    [s_sleep_tree](s_sleep_tree.md)

    [s_freeze_tree](s_freeze_tree.md)


---------------------------------------
See: [Constants](constants_predefined.md) - [signal()](signal().md) - [s_freeze_tree](s_freeze_tree.md)

