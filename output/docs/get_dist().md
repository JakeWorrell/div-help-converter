**get_dist(**&lt;identifier code&gt;**)**

### Returns

The distance to the other process.

### Description

Returns the distance from the current process (the one which called this function) to
the process which has the [identifier code](_identifying_codes_of_processesdot.md).

See [ways to obtain the identifier code](ways_to_obtain_the_identifying_code_of_a_processdot.md), for further information.

If the process has defined its local variable [resolution](local_resolution.md) then it is important
that the process for which the distance we wish to obtain has the [resolution](local_resolution.md)
local variable set to the same value. If both processes have the coordinates in hundredths
instead of whole amounts (with [resolution](local_resolution.md)=100), then the distance between both
will be given in hundredths too, but if the value of this variable is different between
processes, then the result of the **get_dist()** function will not make sense.

### Example program
```
PROGRAM example_get_dist;

PRIVATE
    resulting_distance;
    process_id;

BEGIN
    load_fpg("help/help.fpg");
    put_screen(0, 1);
    graph=100;
    x=160;
    y=100;

    process_id = mobile_object(80, 50, 101);

    write(0, 160, 200, 7, "Use the cursors to move the triangle.");
    write(0, 0, 0, 0, "Distance from the ball to the triangle:");
    write_int(0, 0, 10, 0, offset resulting_distance);
    LOOP

        // We find the distance between the two processes
        resulting_distance = get_dist(process_id);

        FRAME;
    END
END

PROCESS mobile_object(x, y, graph)
BEGIN
    LOOP
        IF (key(_right)) angle-=10000; END
        IF (key(_left)) angle+=10000; END
        IF (key(_up)) advance(4); END
        FRAME;
    END
END
```


In this example, a ball is displayed in the centre of the screen. A **mobile_object**
process is created, and its [identifier code](_identifying_codes_of_processesdot.md) is stored in the **process_id**
variable. This process can be controlled with the cursor keys.
                
In the main loop of the program, the distance between the two processes is calculated and
updated on screen continuously.

The function [fget_dist()](fget_dist().md) is used to obtain the {distance between two
points}, instead of between two processes. If the [identifier code](_identifying_codes_of_processesdot.md)
of the process is contained, for example, in a variable denominated **id2**, then
the call to the function:

    **get_dist(id2)**

Will be equivalent to:

    **fget_dist(x, y, id2.x, id2.y)**

To obtain the distance from the coordinates (x, y) of the current process up to the
coordinates (x, y) of the process for which its [identifier code](_identifying_codes_of_processesdot.md) is **id2**.

The function [get_angle()](get_angle().md) is used to obtain the **angle to the process**
instead of the distance.

---------------------------------------


This function can be used to detect collisions between processes, though of course,
the [collision()](collision().md) function is normally used which detects when two processes 
graphics overlap.

An example of this is when a process exists within a Mode 7 window (See [start_mode7()](start_mode7().md))
the [collision()](collision().md) function can't be used, so the distance between the
processes must be obtained (normally with [get_dist()](get_angle().md)) to check if they collide
(if their distance is smaller than a specified one).

---------------------------------------
See: [fget_dist()](fget_dist().md) - [get_angle()](get_angle().md) - [get_distx()](get_distx().md) - [get_disty()](get_disty().md)

