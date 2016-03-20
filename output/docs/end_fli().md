**end_fli()**

### Description

Finishes an animation **FLI/FLC** shown on screen and frees the memory that was
being used.

The animations **FLI/FLC** are initiated with the [start_fli()](start_fli().md) function.

Only one animation can be loaded at a time.

### Example program
```
PROGRAM example_end_fli;
BEGIN
    LOOP
        start_fli("help/help.fli", 0, 0); // load and play the animation
        WHILE (frame_fli()<>0)
            FRAME;
        END

        end_fli(); // Unload the animation

    END
END
```


In this example, the animation is loaded with the [start_fli()](start_fli().md) function
and then is displayed via [frame_fli()](frame_fli().md) until it finishes (when
[frame_fli()](frame_fli().md) returns 0). At that moment it is unloaded from memory using **end_fli()**.

The program does this sequence of commands (load, play, update  and unload)
of the animation **FLI/FLC**) indefinitely.

It is not necessary for the animation to have finished before it is unloaded from
the memory.

---------------------------------------
See: [start_fli()](start_fli().md) - [frame_fli()](frame_fli().md) - [reset_fli()](reset_fli().md)

