**get_id(**&lt;type of process&gt;**)**

### Returns

The [identifier code](_identifying_codes_of_processesdot.md) of a process or **0**.

### Description

This function checks to see if there are any processes of the specified type.
If any are found, then the function will return the [identifier code](_identifying_codes_of_processesdot.md) of the
first occurrence, and if none are found will return a 0.

If there are more processes of the specified type, the function **get_id()**
will return the next [identifier code](_identifying_codes_of_processesdot.md) for each successive call.

Once every [identifier code](_identifying_codes_of_processesdot.md) has been returned, the function
will return 0, until the next [FRAME](frame_statement.md) statement is executed, at which point
the function will be reset, and once again will begin to return every
[identifier code](_identifying_codes_of_processesdot.md) of the specified type of process.

If you wish to get all of the [identifier codes](_identifying_codes_of_processesdot.md) of the processes of that
type, you should not use the [FRAME](frame_statement.md) statement between two successive calls to
**get_id()**. If you execute a [FRAME](frame_statement.md) statement between calls to **get_id()** then
the function will again reset and start returning values from the first occurrence of that
type of process.

A similar thing happens if you call **get_id()** with a different process type. Each time a new 
process type is called, the identifiers reset and start with the first process of that type.

### Example program
```
PROGRAM example_get_id;

PRIVATE
    process_id;
    counter;

BEGIN
    load_fpg("help/help.fpg");
    put_screen(0, 1);
    FROM counter=1 TO 20;
        my_process(rand(0, 319), rand(0, 199), 101);
    END
    LOOP
        FROM counter=1 TO 20;

            // Get the Processes ID
            process_id = get_id(TYPE my_process);
    
            // Change the processes LOCAL angle variable using the ID
            process_id.angle+=rand(-5000, 5000);
        END
        FRAME;
    END
END

PROCESS my_process(x, y, graph);
BEGIN
    LOOP
        FRAME;
    END
END
```


In the example, after having loaded the file with graphics and set the background screen, 20 **movable_process** type processes are
created with their positions randomly chosen and with a triangle-shaped graphic.

These processes will only execute [FRAME](frame_statement.md) statements inside a loop, in order to be displayed.

From the main program, the identifiers of the **movable_process** type processes are taken with the **get_id()** function (storing them in the **process_identifier** variable) and using them to modify their angle (their [angle](local_angle.md) local variable).                                                               
On having the [identifying code](_identifying_codes_of_processesdot.md) of a process, it is possible to consult or modify its local variables (like [angle](local_angle.md) in this example) or else, to send signals to the process with the [signal()](signal().md) function.

---------------------------------------


The [collision()](collision().md) function is used to obtain the [identifier codes](_identifying_codes_of_processesdot.md)
of processes of a determined type that collide with the current process.

---------------------------------------
See: [Ways to obtain the identifier code](ways_to_obtain_the_identifying_code_of_a_processdot.md) - [Types of processes](types_of_processesdot.md) - [Identifier codes](_identifying_codes_of_processesdot.md)

