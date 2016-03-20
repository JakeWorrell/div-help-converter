**near_angle(**&lt;angle&gt;**,** &lt;final angle&gt;**,** &lt;increment&gt;**)**

### Returns

A new angle nearer to the final angle.

### Description

Brings an angle nearer another one at the given increment. The function returns the new angle.

It is used when the aim is that an angle (&lt;angle&gt;) gradually varies
until it becomes another angle (&lt;final angle&gt;). For that, the  function needs the original angle,
the **final angle** and the angular **increment** that is going to be added to or subtracted from the
original angle.

Keep in mind that all the angles are specified in degree thousandths. The angular **increment**
is but a small angle (such as one degree (**1000**) or five (**5000**).

### Example program
```
PROGRAM example_near_angle;

PRIVATE
    angle2;

BEGIN
    load_fpg("help/help.fpg");
    put_screen(0, 1);
    mouse.graph=200;
    graph=101;
    write(0, 160, 200, 7, "Move the mouse cursor");
    LOOP
        angle2=fget_angle(x, y, mouse.x, mouse.y);

        // Brings the current angle closer to the final one in 10 degrees at the most
        angle = near_angle(angle, angle2, 10000);

        advance(6);
        FRAME;
    END
END
```


In the example, the mouse cursor is defined as a little cross that can be moved by the user.

The main program defines its graphic as a triangle (**graph=101;**)
that, in every loop's iteration, obtains the angle towards the mouse cursor with the [fget_angle()](fget_angle().md)
function. Then, it modifies its angle
to move 10 degrees (10000) at the most towards the cursor angle, using the **near_angle()** function.
Finally, it advances 6 points
in that direction by using the [advance()](advance().md) function.

Notice how the triangle continuously pursues the mouse cursor without making any abrupt turn (bigger
than 10 degrees).

---------------------------------------
See: [Use of the angles in the language](use_of_angles_in_the_languagedot.md) - [angle](local_angle.md) - [get_angle()](get_angle().md) - [fget_angle()](fget_angle().md)

