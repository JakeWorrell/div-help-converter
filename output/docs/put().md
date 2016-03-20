**put(**&lt;file&gt;**,** &lt;graphic&gt;**,** &lt;x&gt;**,** &lt;y&gt;**)**

### Description

Puts a graphic in the screen background. The function requires the **file code** in which
the graphic is stored, the **graphic code** inside the same file and the (**x**, **y**) coordinates at
which the graphic is intended to be put.

The graphics loaded with the [load_map()](load_map()_forward_slash_load_pcx().md) or [load_pcx()](load_map()_forward_slash_load_pcx().md)
(or created with [new_map()](new_map().md)) function will be used as if they belonged to the first file
(the file with the code 0).

If the centre graphic was not specified (setting its [control point](control_pointsdot.md)
number 0 from the painting tool), the coordinates will be referred to the position on the screen in
which the graphic **centre** will be located.

The graphics displayed on the screen background like this will be within the game's display
**under all the processes, scroll regions, texts, etc.**

If the aim is to have a graphic over some others, it must be **created as a new process** and
its [z](local_z.md) variable must be established, indicating the priority of its display.

The [clear_screen()](clear_screen().md) function must be used to clear the screen background.

### Example program
```
PROGRAM example_put;

PRIVATE
    file1;
    coord_x;
    coord_y;

BEGIN
    file1=load_fpg("help/help.fpg");
    LOOP
        coord_x=rand(0, 319);
        coord_y=rand(0, 199);

        put(file1, 100, coord_x, coord_y); // The graphic 100 is "put".

        FRAME;
    END
END
```


In the example, the file with the graphics is loaded and in every iteration
of the loop graphic number 100 (a ball) is put, with the **put()** function, at random coordinates
(randomly chosen with the [rand()](rand().md) function).

---------------------------------------


If the graphic that is intended to be put is merely a background screen, it is easier to use the
[put_screen()](put_screen().md) function, since it does not require the screen coordinates, because it will
automatically centre the graphic on the screen.

---------------------------------------


The [xput()](xput().md) function is a version a little more complex than the **put()** function, but
with much more utilities since, at the same time, it allows us to put rotated, scaled, mirror
and transparent graphics.

To put a graphic inside another one (instead of in the screen background), the [map_put()](map_put().md)
or [map_xput()](map_xput().md) functions must be used.

---------------------------------------
See: [put_screen()](put_screen().md) - [xput()](xput().md) - [map_put()](map_put().md) - [map_xput()](map_xput().md) - [put_pixel()](put_pixel().md)

