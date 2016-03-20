**get_point_m8(**&lt;number of vertex&gt;**,** &lt;OFFSET x&gt;**,** &lt;OFFSET y&gt;**)**

### Returns

The **coordinates of a vertex** of a mode 8 map (in the variables which
[offset](offset.md), indicated as the two last parameters).

### Description

This function allows you to determine inside of a program, the coordinates of
a specific vertex, inside of a mode 8 region.

To do this, the **&lt;number of vertex&gt;** is required, and the [OFFSET](offset.md) (pointer) 
of the two variables where the result is stored.

This information can also be obtained from the three-dimensional
maps editor, which is explained in the user's manual.

### Example program
```
PROGRAM example_get_point_m8;

GLOBAL
    position_x;
    position_y;

BEGIN
    load_fpg("help/WLD_VIEW.FPG");
    load_wld("help/WLD_VIEW.WLD",0);
    // ...

    // Obtains a vertex's coordinates

    get_point_m8(1620,OFFSET position_x,OFFSET position_y);

    // ...
END
```


This small example shows how the function **get_point_m8()** is called 
to obtain the position of a sector vertex (in this case, in the variables **position_x**
and **position_y**).

---------------------------------------


To set or establish the positions of a vertex, the function [set_point_m8()](set_point_m8().md) must
be used.

---------------------------------------
See: [set_point_m8()](set_point_m8().md) - [start_mode8()](start_mode8().md) - [STRUCT m8](global_struct_m8.md)

