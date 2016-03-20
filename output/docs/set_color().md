**set_volume(**&lt;colour&gt;**,** &lt;red&gt;**,** &lt;green&gt;**,** &lt;blue&gt;**)**

### Description

Redefines a colour of the palette. This function is used to modify the components
of a colour of the game palette.

You must be very cautious with it, because all the graphics on the screen
that use this colour will be affected, to modify the colours of just one graphic
use the function [convert_palette()](convert_palette().md) .

The &lt;colour&gt; must be a number between **0** and **255**. The **components of the colour**
will be specified as a number between **0** (minimum) and **63** (maximum).

  **&lt;red&gt;**   - red Component of the colour.

  **&lt;green&gt;** - green Component of the colour.

  **&lt;blue&gt;**  - blue Component of the colour.


Now a program is shown which modifies randomly the colours of the palette.

### Example program
```
PROGRAM example_set_colour;
GLOBAL colour,r,g,b;
BEGIN
    load_fpg("help/help.fpg");
    put_screen(0, 2);
    LOOP
        colour=rand(1,255);
        r=rand(0,63);
        g=rand(0,63);
        b=rand(0,63);

        set_color(colour, r, g, b); // A colour of the palette is redefined.

        FRAME;
    END
END
```


In the example a multicolour screen is placed as background and inside of the program 
main loop, the component colours of the palette are modified randomly when the
space bar is pressed. To obtain random numbers use the function [rand()](rand().md).

---------------------------------------


To modify the entire palette, it is better to load a wholly different file palette with the
function [load_pal()](load_pal().md).
---------------------------------------


To realise other palette effects, the function [roll_palette()](roll_palette().md) can be used, which 
allows you to make loops of changing colours, or the function [fade()](fade().md) which allows you to realise
multiple fades and saturations of colour at different speeds.

---------------------------------------
See: [roll_palette()](roll_palette().md) - [load_pal()](load_pal().md) - [fade()](fade().md) - [fade_off()](fade_off().md) - [fade_on()](fade_on().md)

