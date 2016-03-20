**load_screen(**&lt;name of the file&gt;**)**

### Description

Loads an image file **MAP** or **PCX** into the background of the screen.

If the graphic is a different size (in pixels) to the screen size
the graphic will be printed centred on the screen.

To delete the screen background the function [clear_screen()](clear_screen().md) must be used.

---------------------------------------


It is a function that combines three actions into one:

**1 -** To load a file which contains a map with the background image (using the
function [load_map()](load_map()_forward_slash_load_pcx().md) or [load_pcx()](load_map()_forward_slash_load_pcx().md)).

**2 -** To establish the image as the background (using [put_screen()](put_screen().md)).

**3 -** To delete the previous image file from memory (with [unload_map()](unload_map()_forward_slash_unload_pcx().md) or
[unload_pcx()](unload_map()_forward_slash_unload_pcx().md))

---------------------------------------


### Example program
```
PROGRAM example_load_screen;
BEGIN
    load_screen("help/help.map");
    LOOP
        FRAME;
    END
END
```


In the example the background image contained in the file **help.map**
is loaded with the function **load_screen()**.

---------------------------------------


### Note If you want to print a graphic on a solid part of the screen
or region which is **not centred**, then use the function [put()](put().md)
in conjunction with it. The function [xput()](xput().md) allows, you 
to print graphics rotated, scaled, mirrored and/or transparent
on any region of the screen.

---------------------------------------
See: [load_map/pcx()](load_map()_forward_slash_load_pcx().md) - [put_screen()](put_screen().md) - [unload_map/pcx()](unload_map()_forward_slash_unload_pcx().md)

