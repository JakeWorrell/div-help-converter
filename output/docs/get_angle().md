**get_angle(**&lt;identifier code&gt;**)**

### Returns

The angle to other process

### Description

Returns the angle from the current process (the one which called this function)
to the process which has the [identifier code](_identifying_codes_of_processesdot.md).

See [Ways to obtain the identifier code](ways_to_obtain_the_identifying_code_of_a_processdot.md), for further information.

Remember that angle is specified in thousandths of a degree. The function
will always return a value between** -180000** and **180000** (an angle between -180 and
180 degrees).

### Example program
```
PROGRAM example_get_angle;

PRIVATE
    resulting_angle;
    process_id;

BEGIN
    load_fpg("help/help.fpg");
    put_screen(0, 1);
    graph=100;
    x=160;
    y=100;

    process_id = mobile_object(80, 50, 101);

    write(0, 160, 200, 7, "Use the cursors to move the triangle.");
    write(0, 0, 0, 0, "Angle from the ball to the triangle:");
    write_int(0, 0, 10, 0, offset resulting_angle);
    LOOP

        // We find the angle between the two processes
        resulting_angle = get_angle(process_id);

        FRAME;
    END
END

PROCESS mobile_object(x, y, graph);
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
                
In the main loop of the program, the angle between the two processes is calculated and
shown on screen continuously.

The [fget_angle()](fget_angle().md) function is used to obtain the {angle between two
points}, instead of between two processes. 

For Example, if the [identifier code](_identifying_codes_of_processesdot.md) of the process refers to a variable **id2**,
then a function call of:

    **get_angle(id2)**

Would be equivalent to:

    **fget_angle(x, y, id2.x, id2.y)**


The [get_dist()](get_dist().md) function is used to obtain the **distance to the other process**
instead of the angle.

---------------------------------------
See: [Use of angles in the language](use_of_angles_in_the_languagedot.md) - [fget_angle()](fget_angle().md) - [get_dist()](get_dist().md)

