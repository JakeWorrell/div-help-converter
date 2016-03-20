**fade_off()**

### Description

Creates a fade to black from the colours on screen. The game stays as it is
until the screen is completely black.

To turn on the screen again (undo the fade to black), use the [fade_on()](fade_on().md) function.

### Example program
```
PROGRAM example_fade_off;
BEGIN
    load_fpg("help/help.fpg");
    put_screen(0, 1);
    write (0, 0, 0, 0, "Press [SPACE] to fade off and fade on the screen.");
    LOOP
        WHILE (NOT key(_space))
            FRAME;
        END

        fade_off(); // We turn off the screen

        fade_on();
    END
END
```


In this example, a screen appears, and after that, the program waits for the
space bar to be pressed to turn off and turn on the screen.

The [fade()](fade().md) function can do this without stopping the program
or at different speeds, as well as creating more advanced palette effects.

---------------------------------------
See: [fade()](fade().md) - [fade_on()](fade_on().md)

