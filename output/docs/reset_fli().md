**reset_fli()**

### Description

This function **rewinds** an **FLI/FLC** animation to the beginning. This animation
started with the [start_fli()](start_fli().md) function.

After having called this function, the animation will entirely be displayed again
from the beginning (to display every frame of the animation, you must call the [frame_fli()](frame_fli().md) function).

The utility of this function deals with the possibility of stopping an animation
and repeating it again from the beginning, without unloading it ([end_fli()](end_fli().md)) and loading it again.

If the aim is to perform an animation indefinitely, restarting when it is over, then
**it is not necessary to use this function**, since it will automatically be done
with [frame_fli()](frame_fli().md), if you keep on calling once the animation is over.

Only one animation can exist at the same time. Thus, it is not necessary to specify
any parameter for this function.

### Example program
```
PROGRAM example_reset_fli;
BEGIN
    start_fli("help/help.fli", 0, 0);
    write(0, 160, 0, 1, "Press [SPACE] to restart the animation.");
    LOOP
        frame_fli();
        IF (scan_code==_space)

            reset_fli(); // The animation is initialised

        END
        FRAME;
    END
END
```


In the example, an animation is loaded with the [start_fli()](start_fli().md) function and
then, it is indefinitely performed with the [frame_fli()](frame_fli().md) function.

In the loop, it is checked whether the spacebar has been pressed. If so, the animation
is reinitialised with the **reset_fli()** function.

---------------------------------------
See: [start_fli()](start_fli().md) - [frame_fli()](frame_fli().md) - [end_fli()](end_fli().md)

