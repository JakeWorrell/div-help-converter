**xadvance(**&lt;angle&gt;**,** &lt;distance&gt;**)**

### Description

Advances the process **the indicated angle** as many points as **the indicated distance** shows as parameter.

This function is equivalent to the function [advance()](advance().md), if the [angle](local_angle.md) is used as its first
parameter.

The distance can be a negative number too, so the graphic of the process
will advance  (its coordinates [x](local_x.md) and [y](local_y.md)) in the opposite direction
to this angle.

### Example program
```
PROGRAM example_xadvance;

PRIVATE
  angle2;

BEGIN
    load_fpg("help/help.fpg");
    put_screen(0, 1);
    graph=101;
    x=160;
    y=100;
    write(0, 0, 0, 0, "Use the cursors to change the direction.");
    LOOP
        angle+=5000;
        IF (key(_right)) angle2-=10000; END
        IF (key(_left)) angle2+=10000; END

        xadvance(angle2,4); // We advance the process to points

        FRAME;
    END
END
```


This example will draw a triangle on screen which will rotate in the selected direction
chosen with the cursors, independent of the orientation of the graphic on the screen
(of visible angle). The program advances 5 degrees per frame in the direction
selected by the cursors. 

Remember that the angle is specified in thousandths of a degree.

---------------------------------------
See: [Use of the angles in the language](use_of_angles_in_the_languagedot.md) - [advance()](advance().md) - [get_distx()](get_distx().md) - [get_disty()](get_disty().md)

