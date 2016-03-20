Constant: **s_freeze_tree**
---------------------------------------


This constant is used as a parameter of the [signal()](signal().md) function (to send signals to the processes).
Its value is **103**.

This signal is used to freeze (immobilise) a process and all the processes created by it, by sending the imperative order **freeze** to them. This is a version of the signal [s_freeze](s_freeze.md), which freezes a process, but not the processes that it had created.

That is to say, the signal **s_freeze_tree** will **freeze** the process and all its descendants. Thus, all these processes will stop processing in the following frames of the game (they will remain immobile, as they won't execute their statements).

These **frozen** processes can be unfrozen (reactivated) with the signal [s_wakeup_tree](s_wakeup_tree.md).
.
The whole list of the constants used as signals that can be sent to the different processes of a program is the following one:

    [s_kill](s_kill.md)

    [s_wakeup](s_wakeup.md)

    [s_sleep](s_sleep.md)

    [s_freeze](s_freeze.md)

    [s_kill_tree](s_kill_tree.md)

    [s_wakeup_tree](s_wakeup_tree.md)

    [s_sleep_tree](s_sleep_tree.md)

    **s_freeze_tree**


---------------------------------------
See: [Constants](constants_predefined.md) - [signal()](signal().md) - [s_freeze](s_freeze.md)

