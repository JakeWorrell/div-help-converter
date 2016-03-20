**region=0;** // Screen region assigned to the process---------------------------------------
.

This is a predefined [LOCAL](declaration_of_local_datadot.md) variable, which means that each process will have it own value in its **region** variable.

The **region** local variable defines the zone of the screen in which the graphic of the process must be visible, indicating the **number of region**.

A region is a rectangular zone of the screen, such as a window,
associated to a number.

By default, this variable will be equal to **0** in all the processes, making reference to **region number 0** that is the **entire screen**.

By default the graphics of the process will be visible
in the whole screen (at any point of the screen in which they are placed).

At the beginning, only **region number 0** is defined.
To define new screen regions, it is necessary to use the [define_region()](define_region().md) function.

---------------------------------------


For instance, for the graphic of a process  to be visible only inside a 100 by 100 pixel box placed in the upper left corner of the screen (at the coordinates 0, 0), first the new region should be defined in the following way, supposing that region number **1** is defined:

  **define_region(1, 0, 0, 100, 100);**

and then, the number of region (**1**) should be assigned to the **region** local variable of the process with the following statement:

  **region=1;**

The regions may be redefined at any moment inside a program.

---------------------------------------


### Note The graphic of a process must be indicated assigning a **graphic code** to the [graph](local_graph.md) local variable.

---------------------------------------
See: [Local data](predefined_local_data.md) - [define_region()](define_region().md)

