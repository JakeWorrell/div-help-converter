**get_real_point(**&lt;number&gt;**,** &lt;OFFSET x&gt;**,** &lt;OFFSET y&gt;**)**

### Returns

Sets the coordinates of the checkpoint to the variables which
[offset](offset.md) indicated as the two last parameters.

### Description

This function returns where a checkpoint of the main processes graphic
is at a particular moment in the coordinates system used by
the process (See local variable [ctype](local_ctype.md)), evaluating the
original location of the point, the current coordinates of the
process, its size, angle, etc.

A [checkpoint](control_pointsdot.md) is a point that can be defined in the graphics 
editor (drawing tool), in the options given to the function.

The function needs the **address** (which is obtained with the [offset](offset.md) operator)
in memory **of two variables** in which the **x** and **y** values of the checkpoint will
be stored.

Graphics loaded with the [load_map()](load_map()_forward_slash_load_pcx().md) or [load_pcx()](load_map()_forward_slash_load_pcx().md) functions
(or created with [new_map()](new_map().md)) will be used as if they were from the first
file (the one with the code 0).

### Example program
```
PROGRAM example_get_real_point;

PRIVATE
    point;
    x_point;
    y_point;

BEGIN
    load_fpg("help/help.fpg");
    graph=4;
    x=160;
    y=100;
    LOOP
        FROM point=1 TO 50;

            // We take the coordinates where there at this moment the checkpoint is
            get_real_point(point, offset x_point, offset y_point);

            cross(x_point, y_point, 200);
        END
        angle+=1000;
        FRAME;
    END
END

PROCESS cross(x, y, graph);
BEGIN
    FRAME;
END
```


In the example a circuit that rotates on the screen is defined as the graphic of the 
main process . This graphic has 50 defined [checkpoints](control_pointsdot.md) numbered from 1 to 50.

The program stays inside of a loop, rotates this graphic
with the angle command,and creating 50 processes
of a cross type, one for each of the 50 checkpoints of the graphic.

You can check how the relative position of two points doesn't change
though the graphic of the circuit rotates.

---------------------------------------


This function is usually used to locate some important key points of a graphic.
For example, in a process in which the graphic is a man with a gun that can
be escalated, rotated or that has some animations, a checkpoint could be defined
in the cannon of the gun to know at each moment where the bullets must go the case
of gun being fired.

If the original graphic was inside of a scroll region 
(See[start_scroll()](start_scroll().md)) the given coordinates will be relative to
to the scroll region.

---------------------------------------


The [get_point()](get_point().md) function returns the position where a checkpoint of
the graphic was placed initially, instead of its current position
like **get_real_point()**.

---------------------------------------
See: [Checkpoints](control_pointsdot.md) - [get_point()](get_point().md) - [get_pixel()](get_pixel().md)

