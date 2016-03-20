**move_scroll(**&lt;number of scroll&gt;**)**

### Description

Forces to scroll automatically and immediately. This function is rather advanced and,
for that reason, it could be difficult to understand its purpose.

As a parameter, the function requires the &lt;scroll number&gt; from 0 to 9 that was indicated
in the [start_scroll()](start_scroll().md) function as first parameter when the scroll started.

This function is used when a scroll region is automatically controlled, as the **camera**
field of the [scroll structure](global_struct_scroll.md) corresponding to the identifier of a process has been defined.

The purpose is to force the (**x0**, **y0**, **x1** and **y1**) values of that structure to be
updated. If this function is not used, these values won't be updated until the following game's frame.

This means that when a scroll is automatically controlled and another process needs
to know the value of the coordinates of that scroll before the next frame (normally
to be located in a position in keeping with the background movement), do as follows:

**1** - The scroll starts with [start_scroll()](start_scroll().md).

**2** - The process that will be used as camera is created and its [identifying code](_identifying_codes_of_processesdot.md)
is put in the **camera** field of the [scroll structure](global_struct_scroll.md).

**3** - A very high priority must be set for this process, for it to run before the rest
of the processes (putting in its [priority](local_priority.md) local variable a positive whole value
like, for instance, 100).

**4** - The **move_scroll()** function will be called just before the [FRAME](frame_statement.md) statement
of the process' loop used as camera.

Thus, you will guarantee the previous execution of this process and, just at the end, the
updating of the values (**x0**, **y0**, **x1** and **y1**) of the
[scroll structure](global_struct_scroll.md), so the rest of the processes may use these variables already updated.

The most widespread use of this function is when you want to have more than two backgrounds
in a scroll window. For that, a series of processes simulating a third or fourth plane are
created. The position of their coordinates will depend on the exact position of the scroll
in every frame. A program doing so is shown below.

### Example program
```
PROGRAM example_move_scroll;

PRIVATE
    file1;
    counter;

BEGIN
    set_fps(100, 0);
    file1=load_fpg("help/help.fpg");
    start_scroll(0, file1, 103, 102, 0, 15);
    scroll.camera=id;
    priority=100;

    write(0, 160, 0, 1, "Use the right and left cursors to move");
    graph=101;
    ctype=c_scroll;
    LOOP
        if (key(_right))
            x+=2;
            flags=0;
        END
        if (key(_left))
            x-=2;
            flags=1;
        END

        move_scroll(0); // Updates the scroll structure[]

        FRAME;
    END
END
```

This example starts a scroll at full screen with two planes. Then, it moves a triangle to the
right and left with the cursors. This process will function as a scroll camera, automatically
focusing the vision on it (by putting **scroll.camera=**[id](id.md)**;**).

But, at the same time, it creates a total of 40 processes (from -2000 to 2000, every 100 pixels)
with the picture of a vertical band with moving colours as if they were a third scroll plane
(processes of the type **movable_process**).

For that, it is important that their **z** coordinate is greater than the rest of the processes
(**z=100;**) and that the priority of the process that controls the camera is higher than
(**priority=100;**) and that the latter uses the **move_scroll()** function before every frame (**FRAME;**).

The processes simulated by the third plane (**movable_process**), place their **x** coordinate
at a point depending on the **scroll's x** and its original position.

The difference lies in the fact that, if **move_scroll()** had not been used, the processes,
by using the **scroll.x0** variable without being updated, would move with a certain slowness
that detracted from the credibility  of the game.

---------------------------------------
See: [start_scroll()](start_scroll().md) - [Scroll structure](global_struct_scroll.md) - [Priority](local_priority.md) - [Z](local_z.md)

