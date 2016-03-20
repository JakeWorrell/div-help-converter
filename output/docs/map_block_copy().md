**map_block_copy(**&lt;file&gt;**,** &lt;destination graphic&gt;**,** &lt;x destination&gt;**,** &lt;y destination&gt;**,**
                 &lt;origin graphic&gt;**,** &lt;x&gt;**,** &lt;y&gt;**,** &lt;width&gt;**,** &lt;high&gt;**)**

### Description

The **map_block_copy()** function allows us to transfer a rectangular block from a graphic to another one.

The graphic from which the rectangular region is taken is called the **&lt;origin graphic&gt;** and
the graphic in which the block will be copied to is called the **&lt;destination graphic&gt;**.

The parameters are the following ones, in order:

**&lt;file&gt;** - Both graphics must come from the same graphics file **FPG**. The **file code** must be
specified as first parameter (see [load_fpg()](load_fpg().md)). The graphics loaded with the
[load_map()](load_map()_forward_slash_load_pcx().md) or [load_pcx()](load_map()_forward_slash_load_pcx().md) functions (or created with [new_map()](new_map().md) function)
will be used as if they were from the first file (file code 0).

**&lt;destination graphic&gt;** - **graphic code** in which the block is going to be put.

**&lt;x destination&gt;, &lt;y destination&gt;** - **x** and **y** coordinates at which the copied block is
to be placed inside the destination graphic.

**&lt;origin graphic&gt;** - **graphic code** from which the copied block is going to be taken.

**&lt;x&gt;, &lt;y&gt;** - **starting** coordinates of the block inside the origin graphic.

**&lt;width&gt;, &lt;height&gt;** - **dimensions** of the block that is going to be copied.

This function will modify the indicated graphic, but only the copy that has been loaded
into memory. The original graphic that is stored in the **FPG**, **MAP** or (PCX) files on disk
**will remain unchanged**. If you wish to recover the original graphics, then you must unload
the graphic (with [unload_fpg()](unload_fpg().md), [unload_map()](unload_map()_forward_slash_unload_pcx().md) or [unload_pcx()](unload_map()_forward_slash_unload_pcx().md))
and then, load it in again to obtain the unchanged version.

### Example program
```
PROGRAM example_map_block_copy;

PRIVATE
    x_destination, y_destination;
    x_origin, y_origin;
    map_width, map_height;
    file1;

BEGIN
    file1=load_fpg("help/help.fpg");
    graph=1;
    x=160;
    y=100;
    LOOP
        x_destination=rand(0, 320);
        y_destination=rand(0, 200);
        map_width=rand(1, 32);
        map_height=rand(1, 32);
        x_origin=rand(0, 32-map_width);
        y_origin=rand(0, 32-map_height);

        map_block_copy(file1, 1, x_destination, y_destination, 100, x_origin, y_origin, map_width, map_height);

        FRAME;
        angle+=1000;
    END
END
```


In this example, an **FPG** graphics file is loaded, and a graph (graphic number 1) is placed in
the centre of the screen and continuously rotated. Within the main loop, a ball graphic
(graphic number 100) is copied inside the destination graphic (number 1)
at some randomly chosen coordinates.

---------------------------------------


When a graphic is put inside another one that is being used as a scroll region's background,
it will not automatically appear on screen unless the [refresh_scroll()](refresh_scroll().md) function is used.

---------------------------------------
See: [map_xput()](map_xput().md) - [map_put()](map_put().md) - [map_put_pixel()](map_put_pixel().md)

