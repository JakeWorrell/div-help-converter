**write(**&lt;font&gt;**,** &lt;x&gt;**,** &lt;y&gt;**,** &lt;centreing code&gt;**,** &lt;text&gt;**)**

### Returns

The identifying code of the text that has been written.

### Description

This function is used to show an alphanumeric text on-screen. For that, it requires the following parameters:

**&lt;font&gt;** - The **font code** or **type of letter** that is going to be used.
Here, you must put either 0 when the aim is to use the system's font
(white, small font, 6 by 8 pixels), or the **font code** returned by the [load_fnt()](load_fnt().md) function when a new font is loaded in the program.

**&lt;x&gt;**, **&lt;y&gt;** - The coordinates referred to the screen in which the text is going to be displayed, first in the horizontal axis and then in the vertical one.

**&lt;centreing code&gt;** - This code determines the position of the text specified by the previous coordinates. Its values are:

  **0**-Up left **1**-Up **2**-Up right

  **3**-Left        **4**-centre **5**-Right

  **6**-Down left  **7**-Down  **8**-Down right


For example, if a text is written at the 160, 0 coordinates and with the centreing code 1 (Up), then the text will c entre in the column 160 and it will be displayed from line 0 downwards. Or, if the aim is to have a text in the upper left corner, it must be displayed at the 0, 0 coordinates and with centreing code 0 (Up left).

**&lt;text&gt;** - The text to be written as a literal (a text in inverted commas) will be specified as last parameter (see the [literals' specifying symbols](double_quote__apostrophe.md)).

---------------------------------------


The displayed text will remain on-screen until it is deleted with the [delete_text()](delete_text().md) function, that requires as parameter the **identifying code** returned by **write()**.

The [write_int()](write_int().md) function must be used to display the numeric value of a variable (such as the score of the player).

The texts will remain unchangeable on screen even if graphics are displayed on it or processes' graphics pass before or behind them.

### Example program
```
PROGRAM example_write;

PRIVATE
    font1;

BEGIN
    font1 = load_fnt("help/help.fnt");

    write(0, 160, 100, 4, "Sample text with the system font.");
    write(font1, 0, 0, 0, "LEFT UP");
    write(font1, 320, 200, 8, "RIGHT DOWN");

    LOOP
        FRAME;
    END
END
```


In the previous example, the font contained in the **help.fnt** file is loaded
with the [load_fnt()](load_fnt().md) function (whose font code is stored in the **font1** variable), and then three texts are written:

The first one with the system font (0), being placed at the 160, 100 coordinates
(screen centre) the **centre** of the text (centreing code 4).

The second one with the loaded font (whose **font identifier** is stored in the **font1** variable), being placed at the 0, 0 coordinates the
upper left corner of the text (centreing code 0).

And finally, the third text, also with the loaded font, being placed at the 320, 200 coordinates the lower right corner of the text (centreing code 8).

After that, the program will indefinitely remain expecting inside a loop.

---------------------------------------


The depth plane in which the written texts appear is controlled through the [text_z](global_text_z.md) global variable, that is useful to regulate which graphics must be seen above the texts and which ones must be seen below them.

Then, it will be possible to move the texts towards another position if necessary, by using the [move_text()](move_text().md) function, which also requires the **identifying code** returned by **write()** as parameter.

---------------------------------------


When fonts loaded from **files FNT** are used, the colours palette used to generate these fonts must be activated (see [load_pal()](load_pal().md)). Otherwise, the colours may appear changed, and the text will be incorrectly displayed.

---------------------------------------
See: [write_int()](write_int().md) - [move_text()](move_text().md) - [delete_text()](delete_text().md) - [load_fnt()](load_fnt().md) - [text_z](global_text_z.md)

