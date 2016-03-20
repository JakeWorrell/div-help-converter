**map_put(**&lt;file&gt;**,** &lt;destination graphic&gt;**,** &lt;origin graphic&gt;**,** &lt;x&gt;**,** &lt;y&gt;**)**

### Description

Puts a graphic inside another one. The graphic that is going to be copied is called &lt;origin graphic&gt;
and the graphic in which the &lt;origin graphic&gt; is to be copied is called the **&lt;destination graphic&gt;**.
The function allows us to copy a graphic (origin) inside another one (destination).

Both graphics must be in the same **FPG** file. The parameters are as follows, in order:

**&lt;file&gt;** - The **file code** of the **FPG** file that contains both graphics. Graphics
loaded with the [load_map()](load_map()_forward_slash_load_pcx().md) or [load_pcx()](load_map()_forward_slash_load_pcx().md) function (or created with [new_map()](new_map().md)
function) will be used as if they were loaded from the first file (code 0).

**&lt;destination graphic&gt;** - **code of the graphic** inside which the other one is going to be copied.

**&lt;origin graphic&gt;** - **code of the graphic** that is going to be copied into the destination.

**&lt;x&gt;, &lt;y&gt;** - **coordinates inside the destination graphic** where the origin graphic is going to be copied.
The centre (or [control point](control_pointsdot.md) number 0) of the origin graphic will be located at these
coordinates.

This function will modify the &lt;destination graphic&gt;, but only the copy of it in memory. The original graphic
that is stored in the **FPG** or **MAP** files on the disk **will remain unchanged**.

If you wish to recover the original unchanged graphic you should unload the file from memory (using
[unload_fpg()](unload_fpg().md) [unload_map()](unload_map()_forward_slash_unload_pcx().md) or [unload_pcx()](unload_map()_forward_slash_unload_pcx().md) functions) and then load it back again.


### Example program
```
PROGRAM example_map_put;

PRIVATE
    x_destination;
    y_destination;
    file1;

BEGIN
    file1=load_fpg("help/help.fpg");
    graph=1;
    x=160;
    y=100;
    LOOP
        x_destination=rand(0, 320);
        y_destination=rand(0, 200);

        map_put(file1, 1, 100, x_destination, y_destination);

        angle+=1000;
        FRAME;
    END
END
```


In the example, graphic number 1 is put at the centre of the screen.

In every step of the main loop, this graphic rotates and a graphic number 100 (a ball) is put
inside the graphic 1 (the central graphic) with the **map_put()** function.

---------------------------------------


The [map_xput()](map_xput().md) function is a version a little more complex than the **map_put()**
function, but with much more utilities. Thus, the latter allows us, moreover, to put rotated,
scaled, mirror and transparent graphics.

The [map_block_copy()](map_block_copy().md) function must be used to put a part of a graphic (instead of the
full graphic) inside another one.

---------------------------------------


### Note When the **map_put()** function (or any other similar) is used to modify a graphic that
is being used as background of a **scroll** window, it is possible that the graphic you have put
does not immediately appear on screen. To solve this problem, you must use the [refresh_scroll()](refresh_scroll().md) function.

---------------------------------------
See: [map_xput()](map_xput().md) - [map_put_pixel()](map_put_pixel().md) - [refresh_scroll()](refresh_scroll().md) - [map_block_copy()](map_block_copy().md)

