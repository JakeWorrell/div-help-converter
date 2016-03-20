**resolution=0;** // Resolution of the process coordinates---------------------------------------
.

This is a predefined [LOCAL](declaration_of_local_datadot.md) variable, which means that each process will have its own value in its **resolution** variable.

Normally, the coordinates of a process (indicated in the [x](local_x.md) and [y](local_y.md) local variables) are defined in screen pixels.

The **resolution** local variable must be used when the aim is to define the coordinates in **drives smaller** than the pixel.

That is to say, this variable indicates the precision of the process' coordinates.

By default, the variable will equal **0** and the coordinates will be specified in pixels.

The greater the value of [resolution](local_resolution.md) is, the smaller (and more accurate)
the drive in which the coordinates are interpreted will be. Some examples are show below:

**resolution=1;** - The coordinates are specified in pixels (similar to **resolution=0**, which is the value by default).

**resolution=10;** - They are specified in tenths of a pixel.

**resolution=100;** - They are specified in hundredths of pixels.

**resolution=2;** - They are specified in half pixels.

...

For instance, a process located at **160**, **100** with **resolution** equal to
**0** (or **1**), will be in the same position as a process located at
**1600**, **1000** and with **resolution** equal to **10**.

The value of **resolution** is normally defined as a **positive integer multiple of 10** (10, 100, 1000, ...).

---------------------------------------


In short, when the value of **resolution** is defined, the processes' manager of 
DIV Games Studio **will divide** the coordinates of the processes
between **resolution** when it comes to painting their graphics on screen.

---------------------------------------


### Important Much care must be taken when, in a program,
there are several processes with different resolutions of coordinates,
as some functions, such as [get_dist()](get_dist().md) (used to obtain the distance between two processes), will return **incorrect results**
when two processes using different resolution of coordinates are accessed.

It is normally advisable that all the processes active in the game,
at least all that interact (that are detected, modified or that can be collide) use the same resolution.

---------------------------------------
See: [Local data](predefined_local_data.md)

