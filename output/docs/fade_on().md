**fade_on()**

### Description

Creates a fade up of the colours on the screen to their natural saturation (100%).

In the successive [FRAME](frame_statement.md) statements of the game, the colours will recover their
visibility until they can be seen perfectly.

To turn off the screen (to do a fade to black) use the [fade_off()](fade_off().md) function.

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
        fade_off();

        fade_on(); // The screen is faded on

    END
END
```


In this example, a screen appears, and after that, the program waits for the
space bar to be pressed to turn off and turn on the screen.

The [fade()](fade().md) function can do this without stopping the program
or at different speeds, as well as creating more advanced palette effects.

---------------------------------------


Every game automatically executes a **fade_on()** at the beginning
of execution.

---------------------------------------
See: [fade()](fade().md) - [fade_off()](fade_off().md)

