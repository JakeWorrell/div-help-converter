**put_pixel(**&lt;x&gt;**,** &lt;y&gt;**,** &lt;colour&gt;**)**

### Description

Plots a pixel of the specified **colour** at the indicated coordinates (**x**, **y**) on the background screen.

The pixels put with this function in the background screen will be displayed in the game {below
all the processes, scroll regions, texts, etc.}

If the aim is to see a pixel over other graphics, you must create a new process, assigning the
picture of a point (in its [graph](local_graph.md) variable) as a graphic and fixing its **z** variable
with the priority of its printing.

To clear the background screen, the [clear_screen()](clear_screen().md) function must be used.

### Example program
```
PROGRAM example_put_pixel;

PRIVATE
    x_pixel;
    y_pixel;
    colour;

BEGIN
    LOOP
        x_pixel=rand(0, 319);
        y_pixel=rand(0, 199);
        colour=rand(0, 15);

        // The pixels are put in the background screen at random
        put_pixel(x_pixel, y_pixel, colour);

        FRAME;
    END
END
```


In the example, in every step of the loop the pixels are put with the
**put_pixel()** function, with coordinates and colour chosen at random with the [rand()](rand().md) function.

---------------------------------------


To read the colour of a specific background screen colour, the [get_pixel()](get_pixel().md) function must be used, returning a number between 0 and 255 corresponding to the order of the colour inside the palette.

The [put()](put().md) function must be used to set a graphic on the screen, instead of a simple pixel.

It is also possible to set the colour of a pixel in a specific graphic, instead of in the background screen, by using the [map_put_pixel()](map_put_pixel().md) function.

---------------------------------------
See: [get_pixel()](get_pixel().md) - [put()](put().md) - [map_put_pixel()](map_put_pixel().md) - [map_get_pixel()](map_get_pixel().md)

