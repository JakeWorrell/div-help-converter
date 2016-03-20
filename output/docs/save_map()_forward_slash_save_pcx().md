**save_map(**&lt;file&gt;**,** &lt;graphic&gt;**,** &lt;name of the file&gt;**)**

**save_pcx(**&lt;file&gt;**,** &lt;graphic&gt;**,** &lt;name of the file&gt;**)**

### Returns

**1** - If the file was loaded successfully.

**0** - While saving the file there was an error.

### Description

Creates a MAP or PCX file from a graphic loaded in memory.

The function requires the **&lt;file&gt;** and **&lt;graphic&gt;** codes which identify
the graphic, and the **&lt;name of the file&gt; MAP** or **PCX** which must be created
on the disk containing that image. The name of the file must be specified
as a literal (text between quotation marks, as &quot;image.pcx&quot;).

Graphics loaded with the functions [load_map()](load_map()_forward_slash_load_pcx().md) or [load_pcx()](load_map()_forward_slash_load_pcx().md)
(or created with [new_map()](new_map().md)) will be used as if they were from the
first file (the file with the code 0).

The function **save_map()** always creates **MAP** files, and **save_pcx()**
will always create **PCX** files, **independent of the indicated extension** in the
**&lt;name of the file&gt;**. If there is no error, the function will create the file
with the image and will return back the value **1**.

---------------------------------------


These maps can be loaded in the graphical environment of
DIV Games Studio or in the programs, using the functions
[load_map()](load_map()_forward_slash_load_pcx().md) o [load_pcx()](load_map()_forward_slash_load_pcx().md).

---------------------------------------


### Example program
```
PROGRAM example_save_map;
BEGIN
    load_fpg("help/help.fpg");

    save_pcx(0,1,"help/help.pcx"); // Creates a PCX file 

END
```


This example uses the function **save_pcx()** to create a PCX file 
containing an image previously loaded inside of the file
**help.fpg** with the function [load_fpg()](load_fpg().md).

---------------------------------------


A graphic can be created with the function [new_map()](new_map().md), and to
modify a graphic the following functions can be used:

[map_block_copy()](map_block_copy().md) - Transfers a block of a graphic to another.

[map_get_pixel()](map_get_pixel().md) - Obtains the colour of a graphic pixel.

[map_put()](map_put().md) - Puts a graphic into another.

[map_put_pixel()](map_put_pixel().md) - Fixes the colour of one point in a graphic.

[map_xput()](map_xput().md) - Places a graphic into another, with added effects.


---------------------------------------


### Note The function [write_map()](write_in_map().md) allows you to write text in a 
graphic created in memory (instead of writing it on screen).

---------------------------------------
See: [load_map/pcx()](load_map()_forward_slash_load_pcx().md) - [unload_map/pcx()](unload_map()_forward_slash_unload_pcx().md)

