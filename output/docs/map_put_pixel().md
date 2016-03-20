**map_put_pixel(**&lt;file&gt;**,** &lt;graphic&gt;**,** &lt;x&gt;**,** &lt;y&gt;**,** &lt;colour&gt;**)**

### Description

Allows us to modify the colour of a specific pixel of a graphic.
For that, the &lt;file code&gt; where the graphic is stored, the &lt;graphic's code&gt; inside the file
and the (**x**, **y**) coordinates of the pixel whose &lt;colour&gt; is intended to set are required.

The graphics loaded with the [load_map()](load_map()_forward_slash_load_pcx().md) or [load_pcx()](load_map()_forward_slash_load_pcx().md)
(or created with [new_map()](new_map().md)) function will be used as if they belonged to the first
file (the file with the code 0).


This function will modify the indicated graphic, but only its copy that has been loaded
in the computer's memory. The original graphic, that is stored in the **FPG** or **MAP** files
of the disk, **will remain unchangeable**.
For that, if at a specific moment of the game the aim is to recover the original state of
the graphic, it will be necessary to unload it from the memory (with [unload_fpg()](unload_fpg().md),
[unload_map()](unload_map()_forward_slash_unload_pcx().md) or [unload_pcx()](unload_map()_forward_slash_unload_pcx().md) functions) and then, load it again.


### Example program
```
PROGRAM example_map_put_pixel;
PRIVATE
    file1;
    coord_x;
    coord_y;
    colour;

BEGIN
    file1=load_fpg("help/help.fpg");
    graph=5;
    x=160;
    y=100;
    size=180;
    LOOP
        coord_x=rand(0, 199);
        coord_y=rand(0, 199);
        colour=rand(0, 15);

        // Points are placed in the graphic number 5 of the file1
        map_put_pixel(file1, 5, coord_x, coord_y, colour);

        angle+=2000;
        FRAME;
    END
END
```


In the example, graphic number 5 is put at the centre of the screen, continuously
rotating. This graphic is a completely black background. For that reason, nothing
will initially be seen on screen.

But then, in every step of the loop, pixels of a colour randomly chosen between 0
and 15 (greys) are put in this graphic, at a pair of coordinates randomly chosen too.

These pixels are put using the **map_put_pixel()** function.

Notice how it seems that there are more and more pixels rotating on screen, when
the only thing that really rotates is graphic number 5.

---------------------------------------


The [map_put()](map_put().md) or [map_xput()](map_xput().md) functions may be used to put a full
graphic inside another one (and not only at one pixel). The [map_block_copy()](map_block_copy().md)
function may be used to put just a part of a graphic inside another one.

---------------------------------------


### Note When the **map_put_pixel()** function is used to put a pixel in a graphic that
is being used as background of a **scroll** window, it is possible that this pixel does
not immediately appear on screen. To solve this problem, you must use the [refresh_scroll()](refresh_scroll().md)
function.

---------------------------------------
See: [map_put()](map_put().md) - [map_xput()](map_xput().md) - [refresh_scroll()](refresh_scroll().md) - [map_block_copy()](map_block_copy().md)

