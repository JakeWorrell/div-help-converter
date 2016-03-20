Constant: **s_wakeup_tree**
---------------------------------------


This constant is used as a parameter of the [signal()](signal().md) function (to send signals to the processes).
Its value is **101**.

This signal is used to **wake up** a process and all the processes created by it, by sending the imperative order **wakeup** to them. This is a version of the signal [s_wakeup](s_wakeup.md), which wakes a process up, but not the processes that it had created.

That is to say, the signal **s_wakeup_tree** will **wake up** the process and all its descendants. Thus, all these processes will return to their normal state in the following frames of the game.

Processes that have been **made dormant** with the signal [s_sleep_tree](s_sleep_tree.md) or **frozen** with the signal [s_freeze_tree](s_freeze_tree.md) can be woken up (reactivated).

The whole list of the constants used as signals that can be sent to the different processes of a program is the following one:

    [s_kill](s_kill.md)

    [s_wakeup](s_wakeup.md)

    [s_sleep](s_sleep.md)

    [s_freeze](s_freeze.md)

    [s_kill_tree](s_kill_tree.md)

    **s_wakeup_tree**

    [s_sleep_tree](s_sleep_tree.md)

    [s_freeze_tree](s_freeze_tree.md)


---------------------------------------
See: [Constants](constants_predefined.md) - [signal()](signal().md) - [s_wakeup](s_wakeup.md)

