**set_point_m8(**&lt;number of vertex&gt;**,** &lt;x&gt;**,** &lt;y&gt;**)**

### Description

Modifies the coordinates of a three-dimensional map's vertex on a mode 8 sector.
The following parameters are required:

**&lt;number of vertex&gt;** - Number of vertices of the map which position is wanted to
modified. This number can also be obtained from the editor of the three-dimensional maps,
as is explained in the user's manual.

**&lt;x&gt;**, **&lt;y&gt;** - The new coordinates of the vertex must be defined. The
coordinates inside of a three-dimensional map are placed with the rank (**0** ..
**30200**).

To create a mode 8 region, the function [start_mode8()](start_mode8().md) must be called.

---------------------------------------


### Note This is a function which can give rise to multiple
**errors of visibility**. For that reason, it is not recommended for use by inexperienced users.

The vertices can only move **inside of the sector** in which they started,
**sector boundaries can't be crossed** (not the vertex, nor the lines which these make) and, besides,
all sectors which can't contain processes may not be moved.

---------------------------------------


### Example program
```
PROGRAM example_set_point_m8;

GLOBAL
    position1;
    position2;
    angle1;
    angle2;

BEGIN
    load_fpg("help/WLD_VIEW.FPG");
    load_wld("help/WLD_VIEW.WLD",0);
    start_mode8(id,0,0);
    ctype=c_m8;
    go_to_flag(1);
    FRAME;
    z+=64;
    LOOP
        position1=3400+get_distx(angle1,150);
        angle1+=5000;
        position2=3400+get_distx(angle2,150);
        angle2+=7000;

        set_point_m8(1620,position1,9280); // Fixes the vertex 1620

        set_point_m8(1621,position2,9456); // Fixes the vertex 1621

        FRAME;
    END
END
```


This small example initialises a mode 8 region, loading the map
**wld_view.wld**, and places it in the predetermined coordinates with
the function [go_to_flag()](go_to_flag().md).

Then, inside of the program's main loop, the position of the vertex
**1620** and **1621** is fixed with the function **set_point_m8()**.

---------------------------------------


The function [get_point_m8()](get_point_m8().md) allows you to find the coordinates of a vertex
of a three-dimensional map in a mode 8 region.

---------------------------------------
See: [get_point_m8()](get_point_m8().md) - [start_mode8()](start_mode8().md) - [STRUCT m8](global_struct_m8.md)

