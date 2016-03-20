**advance(**&lt;distance&gt;**)**

### Description

Advances the process in its angle (specified by the local [angle](local_angle.md) variable)
as many points as specified in the **expression** (distance) parameter.

To advance in a different angle to the one specified in this variable, use the
[xadvance()](xadvance().md) function instead.

The value can be also a negative number, in this case, the processes' graphic  
will advance in the opposite direction to the angle specified.

### Example program
```
PROGRAM example_advance;
BEGIN
    load_fpg("help/help.fpg");
    put_screen(0, 1);
    graph=101;
    x=160;
    y=100;
    write(0, 0, 0, 0, "Use the cursors (left + right) to change direction.");
    LOOP
        IF (key(_right)) angle-=10000; END
        IF (key(_left)) angle+=10000; END

        advance(2); // We advance 2 points

        FRAME;
    END
END
```


This example will draw a triangle on screen that will advance in the specified
direction (2) in the specified local variable [angle](local_angle.md) using this function.

Remember that the angle is specified in thousandths of a degree.

The local [angle](local_angle.md) variable will be changed using the cursor keys
(adding or subtracting 10000, which is equivalent to 10 degrees).

---------------------------------------


This function is the same as executing the following two statements:

  **x+=get_distx(angle,** &lt;distance&gt;**);**

  **y+=get_disty(angle,** &lt;distance&gt;**);**


This function just modifies the coordinates of the process.
It is possible to use the two previous statements when you would like the
process to advance in a different angle to the one which in the local
[angle](local_angle.md) variable. This could be useful if you want to advance without
rotation.  Alternatively you can use the [xadvance()](xadvance().md) function.

For example, to make a process advance 8 points in a direction ( 
stored in a private variable called **angle2**) but rotated in another direction,
(the [angle](local_angle.md) variable), you would use:

  **x+=get_distx(angle2, 8);**

  **y+=get_disty(angle2, 8);**


---------------------------------------
See: [xadvance()](xadvance().md) - [Use of angles in the language](use_of_angles_in_the_languagedot.md) - [get_distx()](get_distx().md) - [get_disty()](get_disty().md)

