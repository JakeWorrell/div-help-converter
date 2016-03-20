**roll_palette(**&lt;initial colour&gt;**,** &lt;number of colours&gt;**,** &lt;increment&gt;**)**

### Description

Rotates a range of palette colours. This function is used to create movement
effects in static graphics, like the effect of flowing water.

To use this function, it is first necessary to create graphics that use a
range of consecutive colours of the original palette, in a perpetual cycle
(for instance, colours ranging from **0** to **15**, painting something with
the colours 0, 1, 2, 3, ... , 14, 15, 0, 1, 2, ...).

Then, it is necessary to take care that those colours are not used by other graphics that are going to appear on the screen at the same time, if you do not want to implement the effects on them.

The **increment** (third parameter) is normally **1** to perform the rotation in a direction and** -1** to perform it in the opposite direction, but other values may be used to perform the colours cycle at higher speed.

To perform a cycle of colours from **0** to **15**, it would be necessary to specify **0** as &lt;initial colour&gt; and **16** as &lt;number of colours&gt;.

### Example program
```
PROGRAM example_roll_palette;
BEGIN
    load_fpg("help/help.fpg");
    put_screen(0, 2);
    write(0, 160, 0, 1, "Press [SPACE] to rotate the entire palette.");
    LOOP
        IF (scan_code==_space)

            roll_palette(0, 256, 1); // The 256 colours rotate.

        END
        FRAME;
    END
END
```


In the example, a multicolour screen is put as background and, inside the program's main loop, the 256 colours of the palette will rotate every time that the spacebar is pressed.

---------------------------------------


To determine the palette which is going to realise the circle
of colour, this must be loaded from an file with the function 
[load_pal()](load_pal().md).

---------------------------------------


To perform other palette effects without replacing some colours by other ones in cycles, the [fade()](fade().md) function must be used. This function allows us to perform many colours fading and saturations at different speeds.

There are two simplified versions of this last function that allow us to carry out a fading to black ([fade_off()](fade_off().md)) and undo it ([fade_on()](fade_on().md)).

---------------------------------------
See: [set_color()](set_color().md) - [load_pal()](load_pal().md) - [fade()](fade().md) - [fade_off()](fade_off().md) - [fade_on()](fade_on().md)

