**load_fnt(**&lt;name of the file&gt;**)**

### Returns

The **code** of the loaded font.

### Description

Loads a font file (*.FNT) from the disk.

The function returns the **font code** that can be used by the
[write()](write().md) and [write_int()](write_int().md) functions to write to the screen.

The path can be specified with the font. However, it is not necessary to do so if the
file resides in the same directory as the executable or the default font directory (**\FNT**).

The new font must have the same palette as the game is currently using for it to be
displayed correctly. Otherwise, the colours may appear incorrectly.

### Example program
```
PROGRAM example_load_fnt;

PRIVATE
    font1;

BEGIN

    font1=load_fnt("help/help.fnt"); // The font for the text is loaded

    write(0, 160, 0, 1, "Text written with the system font.");
    write(font1, 160, 10, 1, "FONT LOADED FROM DISK");
    LOOP
        FRAME;
    END
END
```


In this example, a font is loaded with the **load_fnt()** function and then two messages
are written with different fonts. The first one with the system font, and the
second one loaded from the **help.fnt** file.

---------------------------------------


To unload the font from memory (freeing up the space that the font occupies), the
[unload_fnt()](unload_fnt().md) function must be called, using the **font code** as the parameter.

**It is not necessary** to unload the font unless you need the space to load other
graphics or fonts, since the system will automatically free up the font when the
program has terminated.

---------------------------------------
See: [unload_fnt()](unload_fnt().md) - [write()](write().md) - [write_int()](write().md) - [load_pal()](load_pal().md)

