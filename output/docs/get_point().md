**get_point(**&lt;file&gt;**,** &lt;graphic&gt;**,** &lt;number&gt;**,** &lt;OFFSET x&gt;**,** &lt;OFFSET y&gt;**)**

### Returns

The position of the checkpoint (placed into the variables which [offset](offset.md) is
declared in the last two parameters).

### Description

This function will place the coordinate values of a map point into the variable you specify
from an indicated graphic.

A [checkpoint](control_pointsdot.md) is a point that can be defined in the graphic editor
(draw tool), in the checkpoints function.

The function needs the **address** (which is obtained with the [offset](offset.md) operator)
in memory **of two variables** in which the **x** and **y** values of the checkpoint will
be stored.

Graphics loaded with the [load_map()](load_map()_forward_slash_load_pcx().md) or [load_pcx()](load_map()_forward_slash_load_pcx().md) functions
(or created with [new_map()](new_map().md)) will be used as if they were from the first
file (the one with the code 0).

### Example Program
```
PROGRAM example_get_point;

GLOBAL
    file1;
    point=1;
    x_point;
    y_point;

BEGIN
    file1=load_fpg("help/help.fpg");
    put_screen(0, 4);
    graph=101;
    LOOP
        IF (fget_dist(x, y, x_point, y_point)<6)
            IF (point++==50) point=1; END
        END

        // Store the checkpoint coordinate values in x_point and y_point
        get_point(file1, 4,point, offset x_point, offset y_point);

        angle=fget_angle(x, y, x_point, y_point);
        advance(6);
        FRAME;
    END
END
```


In this example, an image of a circuit is displayed on the screen. On this map there are
50 [checkpoints](control_pointsdot.md) defined {from 1 to 50) in the circuit.

The main process appears as a triangle that travels throughout the circuit.

The number of the checkpoint is stored in the local variable **point**
which at the beginning is set to 1.

The coordinates of each checkpoint, obtained with the **get_point()** function,
are saved in the **x_point** and **y_point** variables and are used to make the process
move to that position with the [fget_angle()](fget_angle().md) functions (to obtain the local **angle**
variable) and [advance()](advance().md) (to advance 6 points in that direction).

The distance to the next checkpoint is checked using the [fget_dist()](fget_dist().md) function,
if that point number is detected as being less than 6 pixels away, then
the triangle is directed onto the next point.
When point number 50 is reached it will reset back to point 1.

---------------------------------------


This function returns the exact coordinates that the checkpoints were placed
inside the graphic, without regard to how the graphic is displayed (zoomed,rotated,etc).
To obtain the position of a checkpoint in an graphic that is zoomed or rotated,
and relative to the coordinates of screen (and not of the original graphic) you must use the 
[get_real_point()](get_real_point().md) function.

---------------------------------------
See: [Checkpoints](control_pointsdot.md) - [get_real_point()](get_real_point().md) - [get_pixel()](get_pixel().md)

