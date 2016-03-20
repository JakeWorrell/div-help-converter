**collision(**&lt;type of process&gt;**)**

### Returns

The [identifier code](_identifying_codes_of_processesdot.md) of one process or **0**.

### Description

This is the function **to detect collisions** between graphics.

Checks if the current process (the one that executed this function) collides with
one of the indicated parameter types. It checks to see if the graphics
of both processes are overlapped.

If a collision is detected, it returns the [identifier code](_identifying_codes_of_processesdot.md)
of the process which is colliding with the current process. If not, the function will return **0**.

If the current process collides with more process of the specified type, the function
**collision()** will return the rest of the identifiers in the successive calls to the
**collision()** function.

To get every [ identifier code](_identifying_codes_of_processesdot.md) of the process that is in collision with the
current one, you must not use a [FRAME](frame_statement.md) statement between successive calls to the
**collision()** function. As soon as a [FRAME](frame_statement.md) statement is reached, the function will
start returning collision ID's starting with the first.

Something similar happens if you run a call to the function specifying a different
type of process; if, after this, collisions are still detected with the previous
type, this function will return every code from the first.

If you want to obtain every [identifier code](_identifying_codes_of_processesdot.md) of the processes
of one particular type without collision, you must call the function [get_id()](get_id().md).

If you want to check how near two processes are so that their graphics do not 
collide, then you must use the [get_dist()](get_dist().md) function.

### Example program
```
PROGRAM example_collision;

PRIVATE
    id2;

BEGIN
    load_fpg("help/help.fpg");
    put_screen(0, 1);
    graph=100;
    x=160;
    y=100;
    mobile_process(80, 50, 101);
    LOOP
        delete_text(all_text);
        write(0, 160, 0, 1, "Use the cursors to move the triangle");

        id2 = collision(TYPE mobile_process); // Collision detected

        IF (id2<>0)
            write(0, 160, 200, 7, "¡ COLLISION DETECTED!");
        END
        FRAME;
    END
END

PROCESS mobile_process(x, y, graph);

BEGIN
    LOOP
        IF (key(_right)) angle-=10000; END
        IF (key(_left)) angle+=10000; END
        IF (key(_up)) advance(4); END
        FRAME;
    END
END
```


In this example you can see a ball in the centre of the screen as
the graphic of the main program. After that a process named **mobile_process**
is created with the picture of a controllable triangle with the cursor keys.

The main program will call the function **collision()** to check if its graphic
(the circle) collides with the graphic of the **mobile_process** type (the triangle).
The result of the function is saved in the private variable **id2** of the main program.
This value will be **0** until a collision is detected, and will return the
[identifier code](_identifying_codes_of_processesdot.md) of **mobile_process** when it does.

The identifier codes of the processes are always odd numbers, which in the DIV
language are true conditions (the even numbers are associated with the false conditions),
thus, in the example program we could have changed the statement to:

  **IF (id2&lt;&gt;0)** ... **END**

For the next one:

  **IF (id2)** ... **END**

For further information about this, see: [Definition of a condition.](definition_of_a_condition.md)

---------------------------------------


When you can see the mouse pointer in a DIV program (by assigning the code of the
corresponding graphic in the [mouse structure](global_struct_mouse.md)), it is possible to see
if it has collided with the current process using this function in the following way:

  **IF (collision(TYPE mouse))**

      // The process collides with the mouse pointer

  **END**


When a collision with the mouse pointer is detected, it won't be done with the entire
graphic used as a pointer like a normal graph, but only with the main [checkpoint](control_pointsdot.md)
(the number 0) of the same item, known commonly as the &quot;hotspot&quot; (**hotspot**) of the mouse.

---------------------------------------


This function is used to detect collisions between graphics on the screen
or in a window with a scrollbar.

It's not possible to use this function to detect collisions with processes 
that don't have a graphic (a valid code allocated to its variable
[graph](local_graph.md)) or between graphics of a window of mode 7 or mode 8 (with its variable
[ctype](local_ctype.md) allocated to the value [c_m7](c_m7.md) o [c_m8](c_m8.md)).

It is **essential** that the particular item of the current process that is the
specified graphic has a defined graphic associated with it.

To detect collisions between graphics of a window of mode 7 or mode 8 you must use
the [get_dist()](get_dist().md) function to detect when the distance between the
two processes is smaller than the distance stipulated as a **collision distance**.

---------------------------------------
See: [get_id()](get_id().md) - [get_dist()](get_dist().md) - [Types of processes](types_of_processesdot.md) - {#1038,Ways to obtain
the identifier code}

