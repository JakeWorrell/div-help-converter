**draw(**&lt;type&gt;**,** &lt;colour&gt;**,** &lt;opacity&gt;**,** &lt;region&gt;**,** &lt;x0&gt;**,** &lt;y0&gt;**,** &lt;x1&gt;**,** &lt;y1&gt;**,****)**

### Returns

The **identifier of the primitive graphic** painted.

### Description

This is a generic function able to draw some primitive graphics
on screen (such as lines, boxes and circles). The following parameters
must be indicated:

**&lt;type&gt;** - Type of primitive graphic, as one of the following:

  **1** - Straight line.

  **2** - Rectangle.

  **3** - Filled rectangle.

  **4** - Ellipse.

  **5** - Filled ellipse.


**&lt;colour&gt;** - colour of the ink with which the primitive will be drawn 
(from **0** to **255**, as a colour of the palette).

**&lt;opacity&gt;** - Level of opacity of the primitive, from **0** to **15** (to allow
for transparency effects).

**&lt;region&gt;** - Number of region (window inside of the screen) where the primitive 
can be painted ; normally this value will be **0** to print the 
primitive in any position of the screen. To define
a region on the function [define_region()](define_region().md) must be used.

**&lt;x0&gt;**, **&lt;y0&gt;** - Starting point of the straight line, or the upper left corner
of the box which contains the rectangle or ellipse.

**&lt;x1&gt;**, **&lt;y1&gt;** - End point of the straight line, or the lower right corner
of the box which contains the rectangle or ellipse.

---------------------------------------


When a primitive graphic is painted with **draw()** this will remain fixed
on screen until it is moved with the function [move_draw()](move_draw().md), or eliminated with
the function [delete_draw()](delete_draw().md).

The **identifier of the primitive** returned by the function **draw()** will be 
necessary in order to move or delete the primitive.

The representation system of these graphic primitives is quite similar
to the system for texts; texts are painted with [write()](write().md) and will remain fixed
until they are moved with [move_text()](move_text().md) or eliminated with [delete_text()](delete_text().md).

---------------------------------------


### Note The level of impression or depth of the primitive graphics can be controlled 
with the predefined global variable [draw_z](global_draw_z.md).

---------------------------------------


### Example program
```
PROGRAM example_draw;

GLOBAL
    counter;
    types;
    colour;
    opacity;
    x0,y0;
    x1,y1;

BEGIN
    write(0,0,0,0,"Press ESC to finish ...");
    REPEAT
        FROM counter=1 TO 10;
            types=rand(1,5);
            colour=rand(0,255);
            opacity=rand(0,15);
            x0=rand(0,319);
            y0=rand(0,199);
            x1=rand(0,319);
            y1=rand(0,199);

            // Paints a primitive graphic 

            draw(types,colour,opacity,0,x0,y0,x1,y1);

        END
        FRAME;
        delete_draw(all_drawing);
    UNTIL (key(_esc));
END
```


This example program draws on screen  10 primitive graphics
whose characteristics are selected randomly with the function
[rand()](rand().md), and after creating an image with [FRAME](frame_statement.md), it then deletes
them with the function [delete_draw()](delete_draw().md).

The process is repeated until the ESC key is pressed.

---------------------------------------


### Note a maximum of **256** primitive graphics can be represented on the screen at the same time.

---------------------------------------
See: [move_draw()](move_draw().md) - [delete_draw()](delete_draw().md) - [draw_z](global_draw_z.md)

