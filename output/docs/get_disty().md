**get_disty(**&lt;angle&gt;**,** &lt;distance&gt;**)**

### Returns

The vertical distance towards the vector (angle, distance).

### Description

Returns the vertical distance (in the **x** axis) from the angle and **distance** (over this angle) passed as parameters.
It returns the distance that the vector moves vertically (along the y-axis), made by the
angle and **length** (distance or module of the vector) indicated.

Keep in mind that the angle is specified in thousandths of a degree and
distance can be specified by any valid numeric expression.

The function used to calculate the horizontal distance, instead of the
vertical one is [get_distx()](get_disty().md).

### Example program
```
PROGRAM example_get_disty;

GLOBAL
    distance;
    horizontal_distance;
    vertical_distance;

BEGIN
    load_fpg("help/help.fpg");
    put_screen(0, 3);
    write(0, 160, 200, 7, "Use the cursors to move the triangle.");
    write(0, 0, 0, 0, "Vertical distance:");
    write_int(0, 0, 10, 0, offset vertical_distance);
    graph=101;
    LOOP
        IF (key(_up)) distance+=2; END
        IF (key(_down)) distance-=2; END
        IF (key(_right)) angle-=2000; END
        IF (key(_left)) angle+=2000; END

        // We calculate the horizontal distance
        horizontal_distance= get_disty(angle, distance);

        vertical_distance = get_disty(angle, distance);
        x=160+horizontal_distance;
        y=100+vertical_distance;
        FRAME;
    END
END
```


In the example, a circular graphic is placed on screen, then a triangle process is shown, whose angle and distance can be controlled using the cursor keys.

The program calculates the horizontal and vertical distances to the triangle from the coordinates of the centre of the screen
(160, 100), showing the vertical distance in the upper left corner all the times.

---------------------------------------


If the aim is to advance the coordinates of the process a **distance** in a specific angle, the following statements may be used:


  **x+=get_disty(**&lt;angle&gt;**,** &lt;distance&gt;**);**

  **y+=get_disty(**&lt;angle&gt;**,** &lt;distance&gt;**);**


This would be equivalent to (using the [xadvance()](xadvance().md) function).

  **xadvance(**&lt;angle&gt;**,** &lt;distance&gt;**);**

If the angle that you wish to move the process is the one declared in the local variable [angle](local_angle.md), then you would use the [advance()](advance().md) function like this:

  **advance(**&lt;distance&gt;**);**

---------------------------------------


The **get_disty()** function is the same as calculating the **sine** of the angle and
multiplying it by the **distance**.

---------------------------------------
See: [Use of angles in the language](use_of_angles_in_the_languagedot.md) - [get_distx()](get_disty().md) - [xadvance()](xadvance().md) - [advance()](advance().md)

