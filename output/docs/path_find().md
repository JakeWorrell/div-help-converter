**path_find(**&lt;mode&gt;**,** &lt;file&gt;**,** &lt;graphic&gt;**,** &lt;square size&gt;**,** &lt;x&gt;**,** &lt;y&gt;, &lt;OFFSET structure&gt;**,** &lt;sizeof(structure)&gt;**)**

### Returns

Number of route points, or 0 if it doesn't find any.

### Description

Finds a route from the current coordinates of the process to a determined
point, dodging the defined obstacles in a searching map
(in the user's manual, can be found information about these maps).

**The mode.**

Defines the type of route searching mode, depending on the **&lt;mode&gt;** indicated
as first parameter of the function.

  **0** - Searching less precise and faster.

  **1** - Searching more precise, but slower.


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

This function returns a group of structure points, which are the
points that form the route from the origin to the destination point.

To do this, a structure must be declared which contains two fields (x,y),
and as many registers as points that comprise the calculated route.

The two last parameters of the function contain, the address ([OFFSET](offset.md)) of
this structure and its size ([SIZEOF()](sizeof().md)), so the coordinates contained in this 
structure can be passed back to the function as the results.

---------------------------------------


### Example program
```
PROGRAM example_path_find;

GLOBAL
    num_points;
    STRUCT points[100]
      x,y;
    END
    index;

BEGIN
    load_fpg("help/help.fpg");
    put_screen(0, 7);
    graph=200;
    mouse.graph=200;
    LOOP

        // Obtains the route to the mouse's coordinates

        num_points=path_find(0,0,201,2,mouse.x,mouse.y,OFFSET points,sizeof(points));

        // If a route was obtained, it shows the route and advances to the destination

        IF (num_points>0)
            FOR (index=0;index<num_points-1;index++)
                draw(1,24,15,0,points[index].x,points[index].y,points[index+1].x,points[index+1].y);
            END
            IF (fget_dist(x,y,points[0].x,points[0].y)>4)
                xadvance(fget_angle(x,y,points[0].x,points[0].y),4);
            ELSE
                x=points[0].x;
                y=points[0].y;
            END
            draw(1,24,15,0,x,y,points[0].x,points[0].y);
        END

        FRAME;
        delete_draw(all_drawing);
    END
END
```


In this example the **graphic number 7** of the file **help.fpg** is used as the
scenario, and the **graphic number 201** of the same file as its **searching map**.

The square size of the searching map is **2**

The main process is continuously finding a route to the mouse cursor
with the function **path_find()**.

The different segments of this route are shown with lines using the
function [draw()](draw().md), and the coordinates are incremented
with the function [xadvance()](xadvance().md).

To obtain the distance and the angle to the next point of the route the 
functions [fget_dist()](fget_dist().md) and [fget_angle()](fget_angle().md) are used.

---------------------------------------


To see if it's possible to go directly in a straight line between two points (without
passing through any obstacle) the function [path_line()](path_line().md) can be used.

The function [path_free()](path_free().md) determines if a particular point of the map
is an obstacle or if it is a free point (accessible).

---------------------------------------
See: [path_line()](path_line().md) - [path_free()](path_free().md)

