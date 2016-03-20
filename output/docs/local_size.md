**size=100;** // Size (percentage) of the graphic---------------------------------------
.

This is a predefined [LOCAL](declaration_of_local_datadot.md) variable, which means that each process will have its own value in its **size** variable.

The **size** local variable defines the size in which the graphic of the process must be seen. This size is a percentage related to its original size.

By default, the value of this variable will be equal to **100** (100%) for all the processes, and when the graphic is modified, it will **scale** (reducing or expanding its size) to adjust to the new size.

To **double** the size of the graphic displayed, it will be necessary to specify **200%**. The following statement will be used for this purpose:

  **size=200;**

Therefore, if this value is lesser than **100**, the graphic will be seen smaller; otherwise, it will be seen bigger.

At first, there is no limit for the graphic size, but if the **size** local variable is put at **0** (0%), then the graphic of the process won't be seen.

---------------------------------------


### Note The graphic of a process must be indicated assigning **a graphic code** to the [graph](local_graph.md) local variable.

---------------------------------------
See: [Local data](predefined_local_data.md)

