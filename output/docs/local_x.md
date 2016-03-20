**x=0;** // Horizontal coordinate of the graphic---------------------------------------
.

This is a predefined [LOCAL](declaration_of_local_datadot.md) variable, which means that each process will have its own value in its **x** variable.

The **x** and [y](local_y.md) local variables of the processes define where their graphic (defined in the [graph](local_graph.md) local variable) must be placed.

The **x** local variable defines the process' **horizontal coordinate**,
which may be defined as an integer within the range ([min_int](min_int.md) ...
[max_int](max_int.md)), putting the positive coordinates to the right and the negative ones, to the left.

By default, these coordinates will be specified in **pixels**,
referred to screen coordinates, where the upper left corner is the point placed at (**0**, **0**).

**Type of coordinates.**---------------------------------------


There are several systems of coordinates that may be used by the processes and that are defined with the [ctype](local_ctype.md) local variable. The coordinates related to the screen are the system by default.

**Resolution of the coordinates.**---------------------------------------


The [resolution](local_resolution.md) local variable indicates the precision of the process coordinates. By default, this variable will be equal to **0** and the (**x**, [y](local_y.md)) coordinates will be specified in pixels.

The higher the value of [resolution](local_resolution.md) is, the smaller (and more precise) the drive in which the coordinates are interpreted will be. Some examples are now shown:

**resolution=1;** - The coordinates are specified in pixels.

**resolution=10;** - They are specified in tenths of pixels.

**resolution=100;** - They are specified in hundredths of pixels.

**resolution=2;** - They are specified in half pixel.

...

---------------------------------------


### Note A different type and resolution of coordinates may be either defined for each 
process or changed while executing if necessary.

---------------------------------------


### Important When a graphic is placed at some specific coordinates, it is the graphic **centre** that will normally be placed at these coordinates.

This can be changed by defining in the **graphic editor** the [control point](control_pointsdot.md) number **0** of the graphic of the process (whose **graphic code** is indicated in the [graph](local_graph.md) variable).

If the control point has been defined, it will be placed at the specified coordinates.

For instance, if control point number **0** is placed in the upper left corner of the graphic, and then, the graphic is put at the (100, 100) coordinates, the upper left corner of the graphic will be placed at these coordinates.

---------------------------------------
See: [Local data](predefined_local_data.md) - [ctype](local_ctype.md) - [resolution](local_resolution.md)

