**load_pal(**&lt;name of the file&gt;**)**

### Description

Loads a colour palette from disk (from a PAL, FPG, MAP or FNT file) defining the
**256 colours** displayed on the screen.

From that moment, the game will be seen with the colours set indicated by that palette.

If when the palette was loaded, the program had already another one assigned, a fading
of the screen colours to black will be carried out. Then, the new
colour palette will gradually appear in the following frames of the game.

The file path may be specified with the palette, although this is not necessary if the
file is in the same directory as the executable, or in the default directory (depending on
file type) (**\PAL, \FPG, \MAP or \FNT**).

The program will automatically read the palette of the first of these types of files loaded
in the program, even if the **load_pal()** function is not used. Then, this function will be
used when the program uses several different palettes to change from one to another.

### Example program
```
PROGRAM example_load_pal;
BEGIN
    load_fpg("help/help.fpg");
    put_screen(0, 1);
    write(0, 160, 0, 1, "Press [SPACE] to load a different palette.");
    write(0, 160, 10, 1, "Press [ENTER] to load the original palette.");
    LOOP
        IF (key(_space))

            load_pal("help/help.pal"); // The palette of a .pal file is loaded

        END
        IF (key(_enter))

            load_pal("help/help.fpg");  // The palette of a .fpg file is loaded

        END
        FRAME;
    END
END
```


In this example, a graphics file is loaded (**FPG**) and an image is placed on the background,
along with the necessary text messages.

The main program is a small loop, testing for the space and enter keys. When a key is pressed,
a palette is loaded. The **help2.pal** file is loaded when the spacebar is pressed, and the
original palette is loaded (from the **help.fpg** file) when the ENTER key is pressed.

---------------------------------------


A palette can not be unloaded from the computer's memory, since only one palette can be loaded
at any time.

---------------------------------------
See: [load_map/pcx()](load_map()_forward_slash_load_pcx().md) - [load_fpg()](load_fpg().md) - [load_fnt()](load_fnt().md)

