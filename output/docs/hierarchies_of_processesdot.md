A process is an independent object of the program, that executes its own code and that may have its own coordinates, graphics, etc. For instance, a shot, spacecraft or enemy can be processes of a program.

When a program starts to run there is only one process: the initial process, which starts the execution of the main code's statements. But, from this moment, this process can create new processes that, at the same time can create other processes, destroy them, etc.

In order to clarify the events appearing through a program, we use a simile, treating the processes as if they were alive beings that are born and killed (when they are created or destroyed). For that reason, the following terms are established:

**Father**, name given to the process that has created another one (mother would have been a more appropriate name).

**Son**, process created by another one.

**Brothers**, processes created by the same father.

**Orphan**, process whose father has died (as it has been either eliminated or finished).

This vocabulary may be spread as far as your imagination desires **grandfathers**, **grandsons**, **uncles**, etc.

All the processes have direct access to the identifying codes of the processes with which they have direct relationship (see: [Ways to obtain the **#1039,identifying code](ways_to_obtain_the_identifying_code_of_a_processdot.md) of a process**.

Occasionally, reference is made to actions performed by  &quot;**the system**&quot;. This process, called **div_main**, controls the rest. Therefore, it is in charge of creating the initial process at the beginning of the execution, of setting the speed execution, the debugger, etc. All the processes that are orphaned become sons of this process.

The **div_main identifier** can be obtained with [get_id(0)](get_id().md). It can be used to send a tree signal to all the processes, but this process won't be displayed on screen , even if its [x](local_x.md), [y](local_y.md), [graph](local_graph.md), etc. variables are defined.

---------------------------------------
See: [States of a process ](states_of_a_processdot.md)

