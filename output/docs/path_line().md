**path_line(**&lt;file&gt;**,** &lt;graphic&gt;**,** &lt;square size&gt;**,** &lt;x&gt;**,** &lt;y&gt;**)**

### Returns

[True (1)](true.md), if it is possible to go from one point to another without
going through any obstacle, or [false (0)](false.md) if not.

### Description

It determines if, inside of a searching map, you can go in a straight line up to a point
(starting from the current coordinates of the process), without passing through any 
obstacle of the searching map (in the user's handbook you can find information about
these maps).

In case of wanting to obtain a path between two points that dodges all the obstacles ,
use the function [path_find()](path_find().md), and to see if the destination point
is inside of an obstacle, use the function [path_free()](path_free().md).

**The searching map.**

The **&lt;file&gt;** and **&lt;graphic&gt;** codes, are related to the searching map. This
is a simplified version of the real scenario, where the free zones appear as
a **black colour**(the number 0 of the palette) and the obstacles appear as a 
**white colour** shape.

The **&lt;square size&gt;** indicates the reduction factor of the searching map,
how much the width and height of the map must be multiplied to be shown 
at real size. For example, if a searching map of 160x100 is generated for
a 320x200 screen, the square size will be 2.

**The route points.**

Now must be indicated the coordinates **&lt;x&gt;** and **&lt;y&gt;** where the process must
go (the origin is taken as the initial coordinates of the process which
executes the function **path_find()**).

---------------------------------------


### Example program
```
PROGRAM example_path_line;

BEGIN
    load_fpg("help/help.fpg");
    put_screen(0, 7);
    graph=200;
    mouse.graph=200;
    LOOP

        // It checks if you can go in a straight line to the mouse

        IF (path_line(0,201,2,mouse.x,mouse.y))

            IF (fget_dist(x,y,mouse.x,mouse.y)>4)
                xadvance(fget_angle(x,y,mouse.x,mouse.y),4);
                draw(1,24,15,0,x,y,mouse.x,mouse.y);
            ELSE
                x=mouse.x;
                y=mouse.y;
            END
        END

        FRAME;
        delete_draw(all_drawing);
    END
END
```


In this example the **graphic number 7** of the file **help.fpg**is used as the
scenario, and the **graphic number 201** of the same file is used  as its **searching map**.

The square size in the searching map is **2**.

The main process is continuously checking if you can go in a straight line
to the mouse coordinates with the function **path_line()**. If this is
possible, a line is traced with the function [draw()](draw().md), and the process 
coordinates advance in this direction with the function [xadvance()](xadvance().md).

To obtain the distance and the angle to the mouse cursor the
functions [fget_dist()](fget_dist().md) and [fget_angle()](fget_angle().md) are used.

---------------------------------------
See: [path_find()](path_find().md) - [path_free()](path_free().md)

