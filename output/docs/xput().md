**xput(**&lt;file&gt;**,** &lt;graphic&gt;**,** &lt;x&gt;**,** &lt;y&gt;**,** &lt;angle&gt;**,** &lt;size&gt;**,** &lt;flags&gt;**,** &lt;region&gt;**)**

### Description

Advanced version of the [put()](put().md) function to put a graphic on the screen background. This function requires the following parameters, in order:

**&lt;file&gt;** - **file code** with the graphics library that contains both graphics. The graphics loaded with the [load_map()](load_map()_forward_slash_load_pcx().md) or [load_pcx()](load_map()_forward_slash_load_pcx().md)(or created with [new_map()](new_map().md)) functions will be used as if they belonged to the first file (the file with the code 0).

**&lt;graphic&gt;** - **code of the graphic** inside the file that is going to be displayed on screen.

**&lt;x&gt;, &lt;y&gt;** - coordinates dealing with the screen where the graphic is intended to be put. These coordinates reveal the position in which the graphic centre (or the [control point](control_pointsdot.md) number 0, if it is defined) will be placed. 

**&lt;angle&gt;** - angle (in degree thousandths) in which the graphic is going to be displayed; the normal angle is **0**.

**&lt;size&gt;** - size (in percentage) in which the graphic is going to  be displayed; the normal size is **100**.

**&lt;flags&gt;** - Indicates the mirrors and transparencies with which the graphic will be displayed; the possible values are the following ones:

 **0**-Normal graphic.

 **1**-Horizontal mirror.

 **2**-Vertical mirror.

 **3**-Horizontal and vertical (180&deg;) mirror.

 **4**-Transparent graphic.

 **5**-Horizontal transparent and mirror.

 **6**-Vertical transparent and mirror.

 **7**-Horizontal and vertical transparent, mirror.


**&lt;region&gt;** - Number of region (window inside the screen) in which the graphic must be displayed. This value will normally equal **0** to display the graphic at any position of the screen. The [define_region()](define_region().md) function must be used to define a region.

---------------------------------------


The graphics displayed in this way on the background screen will be in the game display **below all the processes, scroll regions, texts, etc.**

If the aim is that a graphic is above others, it is necessary to **create it as a new process**  and fix its [z](local_z.md) variable with the priority of its display.

The [clear_screen()](clear_screen().md) function must be used to clear the screen background.

### Example program
```
PROGRAM example_put;

PRIVATE
    file1;
    coord_x;
    coord_y;
    angle1;
    size1;
    flags1;

BEGIN
    file1=load_fpg("help/help.fpg");
    LOOP
        coord_x=rand(0, 319);
        coord_y=rand(0, 199);
        angle1=rand(-pi, pi);
        size1=rand(10, 200);
        flags1=rand(0, 7);

        // The graphic 101 is put
        xput(file1, 101, coord_x, coord_y, angle1, size1, flags1, 0);

        FRAME;
    END
END
```


In the example, the file is loaded with the graphics and, in every iteration of the loop, graphic number 101 (a triangle) is put with the **xput()** function at coordinates randomly chosen with the [rand()](rand().md) function, with random angle, size and value of **flags**, and in region number 0 (entire screen).

---------------------------------------


The [put()](put().md) function is a simplified version of the **xput()** function, and it is useful when you do not want to rotate, scale, mirror or display the graphic with transparencies.

The [map_put()](map_put().md) or [map_xput()](map_xput().md) functions must be used to put a graphic inside another one (instead of the screen background).

---------------------------------------


If the graphic intended to be put is just a screen background,
it is easier to use the [put_screen()](put_screen().md) function, as it does not require the screen coordinates because it will automatically centre the graphic on screen.

---------------------------------------
See: [put()](put().md) - [map_put()](map_put().md) - [map_xput()](map_xput().md) - [put_screen()](put_screen().md)

