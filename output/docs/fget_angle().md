**fget_angle(**&lt;x0&gt;**,** &lt;y0&gt;**,** &lt;x1&gt;**,** &lt;y1&gt;**)**

### Returns

The angle between two points.

### Description

Returns the angle from the **point 0** (x0, y0) to the **point 1**
(x1, y1).

Remember that the angle is specified in thousandths of a degree. The function
always returns a value between ** -180000** and **180000** (an  angle between -180
and 180 degrees).

Coordinates of both points (x0, y0, x1, y1) can be any valid numeric expression.

### Example program
```
PROGRAM example_fget_angle;

PRIVATE
    coord_x0, coord_y0;
    coord_x1, coord_y1;
    result;
    file1;

BEGIN
    file1=load_fpg("help/help.fpg");
    write(0, 0, 0, 0, "Coordinates point 1");
    write(0, 0, 10, 0, "X:");
    write_int(0, 20, 10, 0, offset coord_x0);
    write(0, 0, 20, 0, "Y:");
    write_int(0, 20, 20, 0, offset coord_y0);
    write(0, 0, 40, 0, "Coordinates point 2");
    write(0, 0, 50, 0, "X:");
    write_int(0, 20, 50, 0, offset coord_x1);
    write(0, 0, 60, 0, "Y:");
    write_int(0, 20, 60, 0, offset coord_y1);
    write(0, 0, 80, 0, "Angle from point 1 to point 2:");
    write_int(0, 0, 90, 0, offset result);
    write(0, 0, 200, 6, "Press [SPACE] to get another two points.");
    LOOP
        clear_screen();
        coord_x0=rand(0, 319);
        coord_y0=rand(0, 199);
        coord_x1=rand(0, 319);
        coord_y1=rand(0, 199);
        put(file1,200,coord_x0, coord_y0);
        put(file1,200,coord_x1, coord_y1);

        //We find the angle between two points
        result = fget_angle(coord_x0, coord_y0, coord_x1, coord_y1);

        scan_code=0;
        WHILE (scan_code<>_space)
            FRAME;
        END
    END
END
```


In this example, some text messages are printed on the screen, along with some 
coordinates **x** and **y** of two points set from random values. The angle between
the points is then calculated with the **fget_angle()** function.
Each time that the space bar is pressed the process will repeat.

The [get_angle()](get_angle().md) function is used to obtain the **angle between two processes**,
instead of between two points.

The [fget_dist()](fget_dist().md) function is used to obtain the {distance between two
points}, instead of the angle.

---------------------------------------
See: [Use of angles in the language](use_of_angles_in_the_languagedot.md) - [get_angle()](get_angle().md) - [fget_dist()](fget_dist().md)

