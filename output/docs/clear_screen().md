**clear_screen()**

### Description

Delete from the screen all graphics placed on it with the
[put()](put().md), [xput()](xput().md), [put_pixel()](put_pixel().md) &amp; [put_screen()](put_screen().md) functions.

### Example program
```
PROGRAM example_clear_screen;
BEGIN
    load_fpg("help/help.fpg");
    put_screen(0, 1);
    write(0, 0, 0, 0, "Press [SPACE] to clear the screen.");
    write(0, 0, 10, 0, "Press [ENTER] to view it again.");
    graph=100;
    x=160;
    y=100;
    LOOP
        IF (key (_space))

            clear_screen(); // Deletes the graphic of the screen

        END
        IF (key (_enter)) put_screen(0, 1); END
        FRAME;
    END
END
```


In the example a graphic is drawn using the [put_screen()](put_screen().md) function.
When the space bar is pressed, the screen is deleted.

Pressing the key **Enter**, you can see the screen again.

You can see how the graphic of the process (a ball that appears in the
centre) doesn't disappear when you use the function **clear_screen()**, because
the function will just delete the screen.

---------------------------------------
See: [put()](put().md) - [xput()](xput().md) - [put_pixel()](put_pixel().md) - [put_screen()](put_screen().md)

