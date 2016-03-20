**priority=0;** // Level of priority of the process---------------------------------------
.

This is a predefined [LOCAL](declaration_of_local_datadot.md) variable, which means that each process will have its own value in its **priority** variable.

In the preparation of each frame, all the processes will be executed in
the priority order established by the **priority** local variable.

The higher the value of **priority** in a process is, the sooner it will be processed in each frame. The priority value may be established as any integer within the ([min_int](min_int.md) ... [max_int](max_int.md)) range. For instance, to establish the priority level of a process at **10**, the following statement must be used:

  **priority=10;**

All the processes active in the program having **the same level of priority** will be executed in a **undetermined order** that, moreover, may vary from some executions of the game to others.

By default, the **priority** local variable will be initialised at **0**
in all the processes created in the program. Thus, it will be possible to execute them in any order, if the value of this variable is not defined.

If the **priority** of a single process is fixed at a positive number, such as 1, it will be executed before the rest of the of the processes. On the other hand, if it is fixed at a negative number, such as -1, then it will be executed after the rest (supposing that the **priority** variable of the rest has not been modified, so its value is still equal to **0**).

**When the processes priority must be established?**---------------------------------------


When a process needs to use data of another process for its calculations, it is normally advisable to execute it after the latter, defining its lowest priority for the data of the second process to be updated when they are read.

For instance, if process **B** must place its graphic 8 pixels lower than the graphic of process **A**, the priority of **A** must be greater than that of **B**, for the latter to be executed first.

Thus, when process **B** obtains its **y** coordinate by adding 8 to the one of process **A**, this calculation is done with the **y** coordinate of process **A**
already updated for the following frame (to ensure that in each frame, the **y** coordinate of process **A** first, and then that of process **B** will be established).

For that purpose, suffice would be to define either the priority of **A** as **1** or the priority of **B** as** -1**, since by default both priorities are at **0**.

---------------------------------------


### Note The priority level of the process has nothing to do with the depth plane in which its graphic appears on screen, as this plane is indicated in the [local z](local_z.md) variable.

---------------------------------------
See: [Local data](predefined_local_data.md)

