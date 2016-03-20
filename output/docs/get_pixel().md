**get_pixel(**&lt;x&gt;**,** &lt;y&gt;**)**

### Returns

The colour value of the pixel (0..255).

### Description

Returns the colour of the **background** at the screen coordinates that are
specified in the parameters.

The number returned is a palette index from the active palette
between 0 and 255, because the palettes have 256 colours.

The point refers to only the **background** from the picture, without taking notice
of the graphics of the processes, texts, scroll regions, etc.
Only the images placed on screen by the functions [put()](put().md),[xput()](xput().md), 
[put_pixel()](put_pixel().md) &amp; [put_screen()](put_screen().md) will be read.

### Example program
```
PROGRAM example_get_pixel;

PRIVATE
    pixel_colour;

BEGIN
    load_fpg("help/help.fpg");
    put_screen(0, 2);
    mouse.graph=200;
    write (0, 0, 190, 0, "Colour of the background pixel:");
    write_int(0, 256, 190, 0, offset pixel_colour);
    LOOP

        // We take the colour of the point of the background
        pixel_colour = get_pixel(mouse.x, mouse.y);

        FRAME;
    END
END
```


In this example, the [put_screen](put_screen().md) function is used to display an image on screen,
representing a group of squares in different colours, and a mouse pointer displayed as a cross.

In the lower part of the screen a message is displayed, along with a variable that is updated
from the **get_pixel()** command.

By using the mouse, you can obtain the colour of any pixel on the screen.


---------------------------------------
See: [put_pixel()](put_pixel().md) - [map_get_pixel()](map_get_pixel().md) - [map_put_pixel()](map_put_pixel().md) - [get_point()](get_point().md)

