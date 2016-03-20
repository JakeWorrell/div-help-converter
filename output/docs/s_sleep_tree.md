Constant: **s_sleep_tree**
---------------------------------------


This constant is used as a parameter of the [signal()](signal().md) function (to send signals to the processes).
Its value is **102**.

This signal is used to **make** a process and all the processes created by it **dormant**, by sending the imperative order **sleep** to them. This is a version of the signal [s_sleep](s_sleep.md), which makes a process dormant, but not the processes that it had created.

That is to say, the signal **s_sleep_tree** will make the process and all its descendants dormant. Thus, all these processes will disappear in the following frames of the game (but they won't be eliminated).

These **asleep** processes can be woken up (reactivated) with the signal [s_wakeup_tree](s_wakeup_tree.md).

The whole list of the constants used as signals that can be sent to the different processes of a program is the following one:

    [s_kill](s_kill.md)

    [s_wakeup](s_wakeup.md)

    [s_sleep](s_sleep.md)

    [s_freeze](s_freeze.md)

    [s_kill_tree](s_kill_tree.md)

    [s_wakeup_tree](s_wakeup_tree.md)

    **s_sleep_tree**

    [s_freeze_tree](s_freeze_tree.md)


---------------------------------------
See: [Constants](constants_predefined.md) - [signal()](signal().md) - [s_sleep](s_sleep.md)

