**path_free(**&lt;file&gt;**,** &lt;graphic&gt;**,** &lt;square size&gt;**,** &lt;x&gt;**,** &lt;y&gt;**)**

### Returns

[True (1)](true.md), if the point in a searching map is free (is not an obstacle), or
[false (0)](false.md) if not.

### Description

Determines if, inside of a searching map, the coordinates are placed
in an accessible zone, not overlapping with any obstacle (in the user's manual
can be found information about these searching maps).

In case of wanting to obtain a route to dodge the obstacles between two points
the function [path_find()](path_find().md) must be used, and to see if it can go to a
point in a straight line without passing through any obstacle use the function [path_line()](path_line().md).

**The searching map.**

The **&lt;file&gt;** and **&lt;graphic&gt;** codes, are related to the searching map. This
is a simplified version of the real scenario, where the free zones appear as
a **black colour**(the number 0 of the palette) and the obstacles appear as a 
**white colour** shape.

The **&lt;square size&gt;** indicates the reduction factor of the searching map,
how much the width and height of the map must be multiplied to be shown 
at real size. For example, if a searching map of 160x100 is generated for
a 320x200 screen, the square size will be 2.

Now the coordinates **&lt;x&gt;** and **&lt;y&gt;** to be referenced must be indicated .

---------------------------------------


### Example program
```
PROGRAM example_path_free;

BEGIN
    load_fpg("help/help.fpg");
    put_screen(0, 7);
    mouse.graph=200;
    mouse.size=400;
    LOOP

        // Checks if the mouse is in an accessible zone

        IF (path_free(0,201,2,mouse.x,mouse.y))
            mouse.angle+=5000;
        END

        FRAME;
    END
END
```


In this example the **graphic number 7** of the file **help.fpg** is used as
the scenario, and the **graphic number 201** of the same file as its **searching map**.
the square size of the searching map is **2**

The main process is continuously checking, with the function **path_free()**,
if the mouse cursor is in a free zone, or over an obstacle.

When the cursor is in a free zone, out of any obstacle, the cursor graphic
will rotate.

---------------------------------------
See: [path_find()](path_find().md) - [path_find()](path_line().md)

