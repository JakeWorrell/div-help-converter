Processes are the different elements of a program (objects of the game). They may experience different states on creating, destroying or receiving specific signals with the [signal()](signal().md) function.

**alive or awake.** process

A process is alive when it is running (when it is interpreting the statements
located between its [BEGIN](begin.md) and its [END](end.md)).

**dead.** process

A process is dead when it finishes (either because its [END](end.md) is reached in  the execution, a [RETURN](return_statement.md) is executed or because it receives a signal [s_kill](s_kill.md) or [s_kill_tree](s_kill_tree.md)).

**asleep.** process

A process may receive the signal [s_sleep](s_sleep.md) (or [s_sleep_tree](s_sleep_tree.md)), then becoming asleep. In this state, this process will appear to be dead. But it is not as, at any moment, it may receive a signal [s_wakeup](s_wakeup.md) and return to the alive or awake states. It is also possible to kill an asleep process.

**frozen.** process

The signal [s_freeze](s_freeze.md) (or [s_freeze_tree](s_freeze_tree.md)) freezes a process. In the frozen state, the process, that is still visible, remain blocked. It may be detected by the rest of the processes (for instance, as for collisions), but it is not executed (it stops interpreting its code statements). It will remain in this state until it receives another signal that changes its state or that kills it.

A frozen process may be controlled (moved) by another process,
directly manipulating its variables.

---------------------------------------


When a signal is sent to a process, aiming at changing its state, this signal will have no effect before its following display ([FRAME](frame_statement.md)) is reached if the process is running. If the process is not running, then the signal will have an immediate effect.

No signal must be sent to nonexistent processes (to an [identifying code](_identifying_codes_of_processesdot.md) that does not correspond with any process).

This signal will be ignored when the aim is to put a process in the state in which it is already.

---------------------------------------
See: [Hierarchy of processes.](hierarchies_of_processesdot.md)

