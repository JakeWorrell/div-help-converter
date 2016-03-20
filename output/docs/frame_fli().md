**frame_fli()**

### Returns

**True** if the animation continues and **false** if it has finished.

### Description

Shows the next image of an animation **FLI/FLC** that was started with the [start_fli()](start_fli().md)
function. This function returns **0** (false) if the animation has finished.

It is only possible to run one **FLI/FLC** animation at a time. It is not possible to
have two animations playing at the same time.

The next frame of animation will be seen in the next [FRAME](frame_statement.md) of the game, 
but if a loop is created without a [FRAME](frame_statement.md) statement, the animation
will not be seen.

### Example program
```
PROGRAM example_frame_fli;
BEGIN
    start_fli("help/help.fli", 0, 0);
    LOOP

        frame_fli(); // Show the next frame of animation

        FRAME;
    END
END
```


In the example, the animation **FLI/FLC** is loaded and then played repeatedly
with the **frame_fli()** function.

---------------------------------------
See: [start_fli()](start_fli().md) - [reset_fli()](reset_fli().md) - [end_fli()](end_fli().md)

