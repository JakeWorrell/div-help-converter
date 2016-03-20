**z=0;** // Depth plane of the process graphic---------------------------------------
.

This is a predefined [LOCAL](declaration_of_local_datadot.md) variable, which means that each process will have its own value in its **z** variable.

The **z** local variable defines the depth plane in which the process graphic must be placed on screen (the graphic is defined in the [graph](local_graph.md) local variable). 

Any integer within the range ([min_int](min_int.md) ... [max_int](max_int.md)) may be used as a depth plane. The greater the number is, the deeper the graphic will be placed.

---------------------------------------


By default, the depth planes are arranged in the following way:

** (+) Greater depth**

** +512** - Scroll windows (see [scroll[].z](global_struct_scroll.md))

** +256** - Mode 7 windows (see [m7[].z](global_struct_m7.md))

**  0**   - Graphics of the processes (local **z**)

** -256** - Texts (see [text_z](global_text_z.md))

** -512** - Mouse pointer (see [mouse.z](global_struct_mouse.md))


** (-) Less depth**

The **z** local variable that defines the depth plane of the processes' graphics will be initialised at **0**. The processes' graphics will be placed below the mouse pointer and texts, and above the scroll and mode 7 windows (if the values are not modified by default).

---------------------------------------


All the objects (texts, graphics, windows, ...) placed in the same depth plane will appear on screen (on being superimposed) in an **undetermined order**, that may vary from some program's executions to some others.

If the aim was, for instance, that the graphic of a process appeared above all the objects of the program, a depth plane could be fixed for it above the rest (as -1000}, with the following statement:

  **z=-1000;**

At the beginning, all the processes have their **z** variable at **0**,
then the graphic of the processes will appear in any order if the plane in which 
each of them must be placed is not defined.

The depth plane of a process may be modified (by assigning a new value to its **z** 
variable) as often as necessary inside a program.

The depth planes of the rest of the objects (windows, texts
and mouse pointer) may also be modified at any stage of the program.

---------------------------------------


### Note 1 The processes that belong to a **scroll window** (having its variable [ctype](local_ctype.md)**=**[c_scroll](c_scroll.md)) will be painted in the **depth plane of the scroll window**. Nevertheless, inside that window, all the graphics of the processes will appear **in order, according to their depth plane**.

The process' depth plane (indicated as usual in the **z** variable) will be **referred to the scroll window**
in which the process appears (see [start_scroll()](start_scroll().md)).

---------------------------------------


### Note 2 The processes that belong to a **mode 7 window** (having its variable [ctype](local_ctype.md)**=**[c_m7](c_screen.md)) will appear in that window **in order, according to the depth order in the three-dimensional plane** ignoring the value of their **z** local variable.

The only sense of the **z** local variable in **mode 7** processes is to define the order in which the processes **exactly** placed at the same coordinates of the folded plane must be superposed. If two processes are placed in the three-dimensional plane at the same coordinates, then it will be possible to define, through the **z** variable, which one must appear above the other (see [start_mode7()](start_mode7().md)).

---------------------------------------
See: [Local data](predefined_local_data.md) - [mouse.z](global_struct_mouse.md) - [scroll[].z](global_struct_scroll.md) - [m7[].z](global_struct_m7.md) - [text_z](global_text_z.md)

