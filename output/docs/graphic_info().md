**graphic_info(**&lt;file&gt;**,** &lt;graphic&gt;**,** &lt;information&gt;**)**

### Returns

The information that was requested about the graphic.

### Description

It returns the information of a **graphic** for in a **file** that was requested.

Information:

The returned value will depend on the third parameter **information** that is passed
to the function as follows:

**g_wide** - The **original width** of the graphic
**g_height** - The **original height** of the graphic.
**g_x_center** - The (x coordinate} of the centre of the graphic.
**g_y_center** - The **y coordinate** of the centre of the graphic.

Graphics loaded with the [load_map()](load_map()_forward_slash_load_pcx().md) or [load_pcx()](load_map()_forward_slash_load_pcx().md) functions
(or created with [new_map()](new_map().md)) will be treated as if they were loaded from the first
file (code 0).

### Example program
```
PROGRAM example_graphic_info;

PRIVATE
    file1;
    myheight;
    mywidth;
    x_centre;
    y_centre;

BEGIN
    file1=load_fpg("help/help.fpg");
    put_screen(file1, 1);
    graph=100;
    x=160;
    y=100;

    // We take the information about the height of the graphic
    myheight = graphic_info(file1, 100, g_height);

    // We take the information about the width of the graphic
    mywidth = graphic_info(file1, 100, g_wide);

    // We take the information about the coordinate x of the centre of the graphic
    x_centre = graphic_info(file1, 100, g_x_center);

    // We take the information about the coordinate & of the centre of the graphic
    y_centre = graphic_info(file1, 100, g_y_center);

    write(0, 0, 0, 0, "Height of the graphic:");
    write_int(0, 0, 10, 0, offset myheight);
    write(0, 0, 20, 0, "Width of the graphic:");
    write_int(0, 0, 30, 0, offset mywidth);
    write(0, 0, 40, 0, "Horizontal centre of the graphic:");
    write_int(0, 0, 50, 0, offset x_centre);
    write(0, 0, 60, 0, "Vertical centre of the graphic:");
    write_int(0, 0, 70, 0, offset y_centre);
    LOOP
        FRAME;
    END
END
```


In this example, the program fetches the information about graphic number 100 in the
**help.fpg** file, which is a ball of 32 pixels square and has a centre of (16, 16).

To obtain this information, it makes 4 calls to the **graphic_info()** function, each
time passing a different (&lt;information&gt;) argument (g_wide, g_height, etc) to get the
required values.

---------------------------------------
See: [g_width](g_wide.md) - [g_height](g_height.md) - [g_x_center](g_x_centre.md) - [g_y_center](g_y_centre.md)

