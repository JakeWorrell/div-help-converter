**fade(**&lt;% red&gt;**,** &lt;% green&gt;**,** &lt;% blue&gt;**,** &lt;speed&gt;**)**

### Description

Fades the palette until the percentages of colour is reached - (from 0% to 200%
of the **red** (red), **green** (green) and **blue** (blue) components, specified as parameters).

The last parameter indicates the speed at which the fading will occur, 
normally defined as a number from 1 (very slowly) to
10 (Very fast).

If the speed indicates a number bigger or equal to 64, the fade will be done
instantaneously.

The fade will be done gradually in the successive frames of the game.

If all three colour components are 0 you will see a fade to black, if the three components are
set to 200, the fade will be to white, if the components are 100 you will retrieve the 
original colours of the game palette.

A value less than 100 in a component will tone down its colour, meanwhile that a value 
greater than 100, will saturate the colour.

Remember that the fade doesn't happen when the function **fade()** is called, but over 
the next [FRAME](frame_statement.md) statements . Whilst the program is executing
a fade command, the predefined global variable [fading](global_fading.md) will have a value of **true**
(1) and when the fade is finished (the required values have been reached), this
variable will be set to **false** (0).

### Example program
```
PROGRAM example_fade;
BEGIN
    load_fpg("help/help.fpg");
    put_screen(0, 1);
    write (0, 0, 0, 0, "Press [SPACE] to see the fade() effects.");
    LOOP
        IF (NOT fading AND key(_space))

            fade(rand(0, 200), rand(0, 200), rand(0, 200), 5);

        END
        FRAME;
    END
END
```


In the example a screen is loaded and a message appears.
Each time that the space bar is pressed and a fade is not already in
progress (**IF (NOT fading ...)**), a new fade will start with the three random values
chosen between 0% and 200% (with the [rand()](rand().md) function) at a speed value of 5.

---------------------------------------
See: [fading](global_fading.md) - [fade_off()](fade_off().md) - [fade_on()](fade_on().md) - [load_pal()](load_pal().md)

