**map_xput(**&lt;file&gt;**,** &lt;graphic destination&gt;**,** &lt;graphic origin&gt;**,** &lt;x&gt;**,** &lt;y&gt;**,**
           &lt;angle&gt;**,** &lt;size&gt;**,** &lt;flags&gt;**)**

### Description

Extended version of the function [map_put()](map_put().md).

Puts a graphic inside another one. The graphic that is going to be copied is called
&lt;origin graphic&gt; and the **destination graphic** is that inside which the origin will
be copied. This function allows us to copy a graphic (origin) inside
another one (destination).

Both graphics must be in the same file. The parameters are the following ones, in order:

**&lt;file&gt;** - **file code** with the graphics library that contains both graphics. The
graphics loaded with the [load_map()](load_map()_forward_slash_load_pcx().md) or [load_pcx()](load_map()_forward_slash_load_pcx().md)
(or created with [new_map()](new_map().md)) function will be used as if they belonged to
the first file (the file with the code 0).

**&lt;destination graphic&gt;** - **code of the graphic** inside which the other one is going to be put.

**&lt;origin graphic&gt;** - **code of the graphic** that is going to be copied in the destination.

**&lt;x&gt;, &lt;y&gt;** - coordinates inside the destination graphic where the aim is to put the
origin graphic. The origin graphic is going to be copied at these coordinates, from
its upper left corner.

**&lt;angle&gt;** - angle (in degree thousandths) in which the origin graphic is going to be
copied; the normal angle is **0**.

**&lt;size&gt;** - size (in percentages) in which the original graphic is going to  be copied
(the normal size is **100**).

**&lt;flags&gt;** - Indicates the mirrors and transparencies with which the original graphic will
be copied in the destination; the values are the following ones:

 **0**-Normal graphic.

 **1**-Horizontal mirror.

 **2**-vertical mirror.

 **3**-Horizontal and vertical mirror (180&deg;).

 **4**-Transparent graphic.

 **5**-Horizontal transparencies and mirror.

 **6**-vertical transparencies and mirror.

 **7**-Transparencies, horizontal and vertical mirror.


This function will modify the indicated graphic, but only its copy that has been loaded
in the computer's memory. The original graphic, that is stored in the **FPG** or **MAP** or
(PCX) files of the disk, **will remain unchangeable**.
For that, if at a specific moment of the game the aim is to recover the original state
of the graphic, it will be necessary to unload it from the memory (with [unload_fpg()](unload_fpg().md),
[unload_map()](unload_map()_forward_slash_unload_pcx().md) or [unload_pcx()](unload_map()_forward_slash_unload_pcx().md)) and then, load it again.


### Example program
```
PROGRAM example_map_xput;
PRIVATE
    x_destination;
    y_destination;
    file1;
    angle1;
    size1;
    flags1;

BEGIN
    file1=load_fpg("help/help.fpg");
    graph=1;
    x=160;
    y=100;
    LOOP
        x_destination=rand(0, 319);
        y_destination=rand(0, 199);
        angle1=rand(-pi, pi);
        size1=rand(10, 200);
        flags1=rand(0, 7);

        map_xput(file1, 1, 101, x_destination, y_destination, angle1, size1, flags1);

        angle+=2000;
        FRAME;
    END
END
```


In the example, graphic 1 is put at the centre of the screen,
continuously rotating (this graphic is a decorative background in grey tonalities).

In every step of the loop, a triangle-shaped graphic (with number 100) will be put inside
graphic 1. This new graphic will be put with coordinates,
angle, size and flags (see [flags](local_flags.md) variable) randomly chosen.

Notice how brown triangles with different applied effects are continuously appearing in
the background graphic.

---------------------------------------


The **map_xput()** function is a version a little more complex than the [map_put()](map_put().md)
function, which is easier to use when it is not required to put rotated, scaled, mirror
and transparent graphics.

The [map_block_copy()](map_block_copy().md) function must be used to put a part of a graphic (instead of
the full graphic) inside another one.

---------------------------------------


### Note When the **map_put()** function (or any other similar) is used to modify a graphic
that is being used as background of a **scroll** window, it is possible that the graphic you
have put does not immediately appear on screen. To solve this problem, you must use the
[refresh_scroll()](refresh_scroll().md) function.

---------------------------------------
See: [map_put()](map_put().md) - [map_put_pixel()](map_put_pixel().md) - [refresh_scroll()](refresh_scroll().md) - [map_block_copy()](map_block_copy().md)

