**exit(**&lt;message&gt;**,** &lt;return code&gt;**)**

### Description

Ends the game, killing all processes and returning to the operating system
(or to the DIV IDE) with a **message** and a **numeric code**.

The message is  text message displayed between quotation marks which will be shown when the game
finishes as an indication to the user that they have left DIV2.

The **return code** is valid for the use of external programs to
DIV Games Studio (like *.BAT files ), to determine the action
that must be done after finishing the game.

When the function **exit()**is used, you do not need to close any resources as this
will be done for you (such as maps, fli, sounds and songs) as the system frees
all resources automatically .

### Example program
```
PROGRAM example_exit;
BEGIN
    write(0, 160, 0, 1, "Press [SPACE] to finish the program.");
    LOOP
        IF (key (_space))
            fade_off();

            exit("Thanks for using me!", 0); // We exit the program

        END
        FRAME;
    END
END
```


In the example you can see a message whilst the program waits for the
space bar to be pressed, then exits with the **exit()** function.
---------------------------------------


Every DIV program will finish its execution at any moment if the key combination
**[ALT]+[X]** is pressed. This is similar to calling the **exit()** function, but
without any messages and with the return code 0.

---------------------------------------
See: [let_me_alone()](let_me_alone().md) - [fade_off()](fade_off().md)

