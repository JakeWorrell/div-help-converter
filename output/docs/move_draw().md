**move_draw(**&lt;identifier of the primitive graphic&gt;**,** &lt;colour&gt;**,** &lt;opacity&gt;**,** &lt;x0&gt;**,** &lt;y0&gt;**,** &lt;x1&gt;**,** &lt;y1&gt;**)**

### Description

Modifies a primitive graphic which has been painted with the function [draw()](draw().md),
to do this, the following parameters are required:

**&lt;identifier of the primitive&gt;** - Is the numeric code which was returned by the
function [draw()](draw().md) when the primitive graphic was painted and which is now wanted to
be modified.

**&lt;colour&gt;** - colour of ink for the primitive (from **0** to **255**, as a colour
of the palette).

**&lt;opacity&gt;** - Level of opacity of the primitive, from **0** to **15** (to allow
for transparency effects).

**&lt;x0&gt;**, **&lt;y0&gt;** - Initial point of the straight line, or the upper left corner
of the box which contains the rectangle or ellipse.

**&lt;x1&gt;**, **&lt;y1&gt;** - Final point of the straight line, or the lower right corner
of the box which contains the rectangle or ellipse and the screen coordinates
(**x**, **y**) where it must be moved to.

---------------------------------------


### Example program
```
PROGRAM example_move_draw;

PRIVATE
    id_draw;
    colour;
    opacity;

BEGIN
    write(0, 0, 0, 0, "Move the mouse ...");
    id_draw=draw(4, 127, 15, 0, 0, 0, 32, 32);
    LOOP
        colour=rand(0,255);
        opacity=rand(0,15);

        // The graphic primitive is moved to the mouse coordinates

        move_draw(id_draw, colour, opacity, mouse.x-16, mouse.y-16, mouse.x+16, mouse.y+16);

        FRAME;
    END
END
```


In the example a circular primitive graphic is painted with the function [draw()](draw().md),
and its **identifier of graphic primitive** is saved in the global variable **id_draw**.

Then, inside of a loop, the function **move_draw()** will be used 
to place the circle at or near the mouse coordinates, and assign a randomly chosen colour 
and opacity to each image.

---------------------------------------


### Note To eliminate (delete) a primitive graphic the function
[delete_draw()](delete_draw().md) is used, and with the predefined global variable [draw_z](global_draw_z.md) 
the priority of impression of them can be handled .

---------------------------------------
See: [draw()](draw().md) - [delete_draw()](delete_draw().md) - [draw_z](global_draw_z.md)

