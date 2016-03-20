**map_get_pixel(**&lt;file&gt;**,** &lt;graphic&gt;**,** &lt;x&gt;**,** &lt;y&gt;**)**

### Returns

The colour of the point (0..255).

### Description

This function allows us to obtain the colour of a graphic's specific pixel.
For this, the &lt;file code&gt; in which the graphic is stored, the &lt;graphic code&gt;
inside the file and the **x** and **y** coordinates of the graphic where you wish to
obtain the colour are needed to be passed as parameters.

Graphics loaded with the [load_map()](load_map()_forward_slash_load_pcx().md) or [load_pcx()](load_map()_forward_slash_load_pcx().md) functions
(or created with [new_map()](new_map().md) function) are treated as if they were loaded from
the first **FPG** file (code 0).

### Example program
```
PROGRAM example_map_get_pixel;

PRIVATE
    file1;
    figure;

BEGIN
    file1=load_fpg("help/help.fpg");
    put_screen(0, 7);
    mouse.graph=200;
    write(0, 0, 0, 0, "FIGURE:");
    write_int(0, 42, 0, 0, offset figure);
    LOOP

        // We take the colour of the bitmap's pixel
        figure = map_get_pixel(file1, 8, mouse.x, mouse.y);

        FRAME;
    END
END
```


In this example, 6 different geometrical figures are drawn on the screen in the same colour.
The mouse graphic is defined as a little cross.

The image displayed on screen directly corresponds to another graphic (graphic number 8
in the **FPG** file), which has the same figures but every one is in a different colour
(the first one of colour 1, the second one of colour 2, etc.).

In the main loop, the **map_get_pixel()** function is used to get a colour from graph 8, at the
mouse's x and y coordinates.

This value will be shown in the upper left corner of the screen and when the mouse is over
one of the shapes, will show a value from 1 to 6.

---------------------------------------


This function is normally used to detect zones inside a graphic.
This technique is called using **hardness maps** and allows us to use two different graphics, one
with the picture and the second with the zones to detect, painted using colours.

---------------------------------------
See: [get_pixel()](get_pixel().md) - [map_put_pixel()](map_put_pixel().md)

