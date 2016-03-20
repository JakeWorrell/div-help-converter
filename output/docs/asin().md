**asin(**&lt;asin&gt;**)**

### Returns

The arcsine of a given sine.

### Description

Calculates the arcsine of the sine given as the parameter in thousandths, the corresponding
angle to a sine value is obtained (opposite operation to sine, which can be obtained
with the function [sin()](sin().md)).

The angles are always manipulated in thousandths of a degree (see the
[use of angles in the language](use_of_angles_in_the_languagedot.md)), and the asin will be returned 
in thousandths of a degree also (as a value inside of the rank 
[min_int](min_int.md) ... [max_int](max_int.md)).

The **&lt;sin&gt;** is required as a value from** -1000** to **1000** (from -1.0 to +1.0),
and the result is returned as an angle between** -90000** and **90000** (from -90
to +90 degrees).

### Example program
```
PROGRAM example_asin;

GLOBAL
    sine[15];
    angles[15];
    n;

BEGIN
    write(0,0,0,0,"Sin");
    write(0,160,0,0,"Asin (angle)");
    FROM n=0 TO 15;
        sine[n] = rand(-1000, 1000);

        angles[n] = asin(sine[n]); // calculates the arcsine of a sine

        write_int(0, 0,   20+n*10, 0, offset sine[n]);
        write_int(0, 160, 20+n*10, 0, offset angles[n]);
    END
    write(0,0,192,0,"Press ESC to finish ...");
    REPEAT
        FRAME;
    UNTIL (key(_esc));
END
```


This program will print on screen a list of sines, randomly chosen
between -1000 and 1000 (represented in thousandths), and will use the function
**asin()** to calculate the arcsine of these values.

---------------------------------------
See: [Expression](definition_of_an_expression.md) - See: [Use of the angles in the language](use_of_angles_in_the_languagedot.md)

