**new_map(**&lt;width&gt;**,** &lt;height&gt;**,** &lt;centre x&gt;**,** &lt;centre y&gt;**,** &lt;colour&gt;**)**

### Returns

The **code of the graphic** created.

### Description

Creates a new map in memory (without loading it from an file of the disk).

To do this, the function requires the **&lt;width&gt;** and **&lt;height&gt;** (in pixels) of the map
that must be created, a central point (of the same) in **&lt;centre x&gt;** and **&lt;centre y&gt;**,
and the colour with which the map will be initially filled (the number of the colour
inside of the active palette, from 0 to 255).

This function acts similarly to the function [load_map()](load_map()_forward_slash_load_pcx().md), except that an file
graphic from the disk is not loaded, and the graphic created is a solid graphic of just one
colour.

The value returned is the **code of the graphic**, which is a numeric value
which must be specified to use the graphic, in the variable
[graph](local_graph.md) or, in general, in every function which requires a **code of graphic**
in its parameters.

---------------------------------------


### Important

When, inside of a function, the **code of file** which belongs
to the graphic is required , you must be indicate the code **0** (which is the code of the
first **file FPG** that is loaded in the program).

---------------------------------------


### Example program
```
PROGRAM example_new_map;

BEGIN

    // Is created a map of 16x32 points
    // with its centre in the point (0,0)
    // and with the colour 15 of the palette

    mouse.graph = new_map(16,32,0,0,15); // Is assigned as mouse cursor

    REPEAT
        FRAME;
    UNTIL (key(_esc));

    unload_map(mouse.graph); // And finally the graphic is deleted 
END
```


In the example a map is created with the function **new_map()** and is saved as 
the **code of the graphic** which is returned in the variable [mouse.graph](global_struct_mouse.md), as 
the mouse cursor.

Pressing the **ESC** key takes you out of the loop of the program and
the graphic will be deleted with the function [unload_map()](unload_map()_forward_slash_unload_pcx().md) (exactly the same
as if it were loaded from an file).

---------------------------------------


The function [unload_map()](unload_map()_forward_slash_unload_pcx().md) frees up the computer memory used
by the graphic when it is used no more, and due to that
the **code of the graphic** is also required to know which graphic is the one
that is to be deleted from memory.

**It is not necessary to delete the graphic from memory** before exiting the
program, because the system will do that automatically.

---------------------------------------
See: [load_map/pcx()](load_map()_forward_slash_load_pcx().md) - [unload_map/pcx()](unload_map()_forward_slash_unload_pcx().md) - [graph](local_graph.md)

