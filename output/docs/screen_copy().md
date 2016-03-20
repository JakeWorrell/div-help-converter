**screen_copy(**&lt;region&gt;**,** &lt;file&gt;**,** &lt;graphic&gt;**,** &lt;x&gt;**,** &lt;y&gt;**,** &lt;width&gt;**,** &lt;height&gt;**)**

### Description

Copies a screen region to a region of any graphic.

This is a potent function that can be very useful, because it gives
&quot;feedback&quot; from the computer screen, and can send an image of the screen to a graphic
(opposite operation to the normal).

First you must define the number of the rectangular **&lt;region&gt;** which is going to be
copied from the screen (of the previous image of the program), these regions are defined
with the function [define_region()](define_region().md). The **region number 0** is always related to
the entire screen.

Then, the graphic where the image is going to be transferred to must be indicated 
with the parameters **&lt;file&gt;** and **&lt;graphic&gt;** (the file will be the number 0, if the
graphic belongs to the first FPG loaded, or if it has been loaded already).

Finally,  **the zone inside of the graphic** the image must be transferred to will be defined.
This will be defined as **&lt;x&gt;**, **&lt;y&gt;**, **&lt;width&gt;** and **&lt;height&gt;**, related
to the coordinates inside of the graphic (being the coordinates [0,0] its upper left
corner).

### Example program
```
PROGRAM example_screen_copy;

GLOBAL
    angle1;
    angle2;

BEGIN
    load_fpg("help/help.fpg");
    graph=2;
    x=160;
    y=100;
    put(0,graph,x,y);
    LOOP

        // Copies the screen (region 0) to the graphic 2

        screen_copy(0,0,2,0,0,320,200);

        angle1+=1000;
        angle2+=1971;
        angle=get_distx(angle1,25000);
        size=95+get_disty(angle2,30);
        FRAME;
    END
END
```


In this example the file help.fpg is loaded, in which the **graphic number 2** is
a cell of different colours, and is placed on the screen and defined as the graphic
of the main process, which will rotate and change its size
(depending on the **angle** and **angle2**, respectively).

Then the function **screen_copy()** is used again to send the updated
image of the screen to this graphic, so this effect happens.

---------------------------------------


### Note The **size** of the screen region (the transferred zone) and the size of the
graphic region (where it's transferred) **doesn't have to match**. The function
**screen_copy()** will do a **reduction** or **ampliation** when needed to adjust
the size of the transferred zone.

---------------------------------------
See: [define_region()](define_region().md) - [clear_screen()](clear_screen().md) - [graph](local_graph.md)

