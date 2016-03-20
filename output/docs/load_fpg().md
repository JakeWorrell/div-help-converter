**load_fpg(**&lt;name of the file&gt;**)**

### Returns

The **code** of the fpg file that was loaded.

### Description

Loads an ***.FPG** file from disk.

An FPG file may contain anywhere from 0 to 999 graphic images. Every image in
in the file will have a numeric code, this is the **graphic code** (a number that ranges from
**1** to **999**) that is used to identify the graphic inside the file.

It is possible to load as many graphics **FPG** files as necessary, as long as there is available
memory (this function has to be called several times to load several files).

The function returns the **file code** that can be used by many functions that require a graphic.
For that, it is necessary to indicate the **file code** in which the graphic is and the
**graphics code** inside the file.

The path can be specified with the graphics file. However, it is not necessary to do so if the
file resides in the same directory as the executable or the default **FPG** directory (**\FPG**).
---------------------------------------


When different files have been loaded, take into account that if they have different palettes,
every palette has to be activated previously with the [load_pal()](load_pal().md) function, indicating
the (FPG) file name as a parameter before using its graphics.

### Example program
```
PROGRAM example_load_fpg;

PRIVATE
    file1;

BEGIN

    file1 = load_fpg("help/help.fpg"); // The graphics' file is loaded

    put_screen(file1, 1); // We use graphic 1 of the file
    write(0, 160, 0, 1, "Graphics' file successfully loaded");
    LOOP
        FRAME;
    END
END
```


In this example, the **FPG** file that is going to be used in the program is loaded using
the **load_fpg()** function. Then, graphic number 1 is put as a screen background
(with the [put_screen()](put_screen().md) function).

---------------------------------------


To unload the graphics file (**FPG**) from memory (freeing up the space that the graphics file
occupies), the [unload_fpg()](unload_fnt().md) function must be called, using the **file code**
as the parameter.

**It is not necessary** to unload file unless you need the space to load other
graphics or fonts, since the system will automatically unload the file when the
program has terminated.


---------------------------------------
See: [unload_fpg()](unload_fpg().md) - [load_map/pcx()](load_map()_forward_slash_load_pcx().md) - [load_pal()](load_pal().md) - [file](local_file.md)

