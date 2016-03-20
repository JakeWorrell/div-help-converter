**fget_dist(**&lt;x0&gt;**,** &lt;y0&gt;**,** &lt;x1&gt;**,** &lt;y1&gt;**)**

### Returns

The distance between two points.

### Description

Returns the distance between **point 0** (x0, y0) and **point 1**
(x1, y1).

Coordinates of both points (x0, y0, x1, y1) can be specified by any
valid numeric expression.

### Example program
```
PROGRAM example_fget_dist;

PRIVATE
    coord_x0, coord_y0;
    coord_x1, coord_y1;
    result;
    file1;

BEGIN

    file1=load_fpg("help/help.fpg");
    write(0, 0, 0, 0, "Point 1 Co-ordinates");
    write(0, 0, 10, 0, "X:");
    write_int(0, 20, 10, 0, offset coord_x0);
    write(0, 0, 20, 0, "Y:");
    write_int(0, 20, 20, 0, offset coord_y0);
    write(0, 0, 40, 0, "Point 2 Co-ordinates");
    write(0, 0, 50, 0, "X:");
    write_int(0, 20, 50, 0, offset coord_x1);
    write(0, 0, 60, 0, "Y:");
    write_int(0, 20, 60, 0, offset coord_y1);
    write(0, 0, 80, 0, "Distance between point 1 and point 2");
    write_int(0, 0, 90, 0, offset result);
    write(0, 0, 200, 6, "Press [SPACE] to find another distance.");
    LOOP
        clear_screen();
        coord_x0=rand(0, 319);
        coord_y0=rand(0, 199);
        coord_x1=rand(0, 319);
        coord_y1=rand(0, 199);
        
        put(file1,200,coord_x0, coord_y0);
        put(file1,200,coord_x1, coord_y1);

        //Find the distance between the two points
        result = fget_dist(coord_x0, coord_y0, coord_x1, coord_y1);

        scan_code=0;
        WHILE (scan_code<>_space)
            FRAME;
        END
    END
END
```


In this example, the program sets the 2 sets of co-ordinates to random values,
and then obtains the distance between them with the **fget_dist()** function.
Each time that the space bar is pressed, the process is repeated.

The [get_dist()](get_angle().md) function is used to obtain the {distance from one process
to another}, instead of from one point to another.

The [fget_angle()](fget_dist().md) function is used to obtain the {angle between two
points}, instead of the distance.

---------------------------------------


This function could be used to detect collisions between processes, but of course,
you would normally use the [collision()](collision().md) function which detects when two processes 
have their graphics overlapping.

An example of this is when a process exists within a Mode 7 window (See [start_mode7()](start_mode7().md))
the [collision()](collision().md) function can't be used, so the distance between the
processes must be obtained (normally with [get_dist()](get_angle().md)) to check if they collide
(if their distance is smaller than a specified one).

---------------------------------------
See: [get_dist](get_dist().md) - [fget_angle](fget_angle().md) - [collision()](collision().md)

