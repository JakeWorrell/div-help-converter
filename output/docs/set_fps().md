**set_fps(**&lt;number of frames per second&gt;**,** &lt;number of allowed jumps&gt;**)**

### Description

This function regulates the speed of the game; it defines how many frames per second will be
displayed during the game.

By default, the display will be regulated at 18 frames per second, which means
that if a process moves a pixel per every (**FRAME**),
it will move on-screen at a speed of 18 pixels per second.

This function may establish the number of Frames Per Second (**FPS**) from a minimum of **4** to a maximum of **200**; in general, no more than
24 frames per second are necessary to obtain a fluid and slight movement.

The second parameter, **maximum number of allowed omissions**, is referred to how the program must preferably work when it is executed on a computer fast enough to calculate the required number of frames per second. It works as follows.

**Number of allowed omissions.**

**0** - The game will go at a slower speed when it is executed on a computer that is too slow
to keep the required frame rate - It will only display the frames per second that the computer
has had time to calculate.

**1** - If the computer cannot calculate all the frames, it is allowed to occasionally
skip a frame to try to keep the game's relative speed. The game movements will become
a little more abrupt, but faster.

**2 or more** - The game is allowed to skip as many consecutive frames as is indicated
in this parameter to maintain the original relative speed of the game. For instance,
if the number of omissions is set at **4** and in the game a process moved one pixel
at a time, in a very slow computer it could move four pixels at a time.

### Example program
```
PROGRAM example_set_fps;

PRIVATE
    frames=24;
    omissions=4;

BEGIN
    load_fpg("help/help.fpg");
    graph=1;
    x=160;
    y=100;
    write(0, 0, 0, 0, "Frames per second: Up(+) / Down(-)");
    write_int(0, 0, 10, 0, offset frames);
    write(0, 0, 20, 0, "Allowed omissions: Right(+) / Left(-)");
    write_int(0, 0, 30, 0, offset omissions);
    write(0, 160, 200, 7, "Use the CURSORS to change the values.");
    LOOP

        // The number of frames per second is chosen
        set_fps(frames, omissions);

        IF (key(_up) AND frames<200) frames++; END
        IF (key(_down) AND frames>4) frames--; END
        IF (key(_right) AND omissions<20) omissions++; END
        IF (key(_left) AND omissions>0) omissions--; END
        angle+=4000;
        FRAME;
    END
END
```


In the example, the necessary messages are displayed and the main process
creates a graphic, which is indefinitely rotating at the centre of the screen.

In every step of the loop the cursor keys are detected, the number of frames per second (**frames**) is changed with **up/down** and
the maximum number of allowed **omissions** is changed with **right/left**.

At the beginning of every iteration of the loop, the speed is set with the  **set_fps()** function, according to the values of both variables.

---------------------------------------


### Note The global variable [fps](global_fps.md) monitors the number of 
frames per second which is being reached in the program.

---------------------------------------
See: [FRAME](frame_statement.md) - [max_process_time](global_max_process_time.md) - [set_mode()](set_mode().md) - [fps](global_fps.md)

