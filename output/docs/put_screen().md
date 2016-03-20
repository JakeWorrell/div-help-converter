**put_screen(**&lt;file&gt;**,** &lt;graphic&gt;**)**

### Description

Establishes the background screen. The function requires the **file code** in which the graphic is, and the own **code of the graphic** intended to be displayed in the background screen inside the file.

The graphics loaded with the [load_map()](load_map()_forward_slash_load_pcx().md) or [load_pcx()](load_map()_forward_slash_load_pcx().md)
(or created with [new_map()](new_map().md)) function will be used as if they belonged to the first file (the file with the code 0).

The function does not require any coordinate as a parameter since, if the graphic size (in pixels) is different from that of the screen, the former will simply be displayed centred in the latter.

The [clear_screen()](clear_screen().md) function must be used to clear the screen background.

### Example program
```
PROGRAM example_put_screen;

PRIVATE
    file1;

BEGIN
    file1=load_fpg("help/help.fpg");

    put_screen(file1, 1); // Graphic 1 is established as background.

    LOOP
        FRAME;
    END
END
```


In the example, the graphics' file is loaded and a background graphic (contained in the file with the graphic code number 1) is set with the [put_screen()](put_screen().md) function.

---------------------------------------


If the aim is to display a graphic on a specific part of the screen or a graphic **that is not centred**, the [put()](put().md) may be used. Moreover, the [xput()](xput().md) function allows us to display rotated, scaled, mirror and/or transparent graphics in any screen region.

---------------------------------------
See: [put()](put().md) - [xput()](xput().md) - [put_pixel()](put_pixel().md) - [clear_screen()](clear_screen().md)

