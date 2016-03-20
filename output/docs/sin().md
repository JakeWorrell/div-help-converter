**sin(**&lt;angle&gt;**)**

### Returns

The sin of a given angle.

### Description

Calculates the sin in thousandths of the angle given as the parameter.

The angles are always manipulated in thousandths of degree (see the
[use of angles in the language](use_of_angles_in_the_languagedot.md)), and the sin will be returned 
in thousandths of a unit as well (as a value from -1000 to 1000).

For example, **sin(90000)** will return  **1000**, because the sin of 90 degrees is 1.

### Example program
```
PROGRAM example_sin;

GLOBAL
    angles[15];
    sine[15];
    n;

BEGIN
    write(0,0,0,0,"Angles");
    write(0,160,0,0,"Sins");
    FROM n=0 TO 15;
        angles[n] = rand(0, 360000);

        sine[n] = sin(angles[n]); // The sin of the angle is calculated

        write_int(0, 0,   20+n*10, 0, offset angles[n]);
        write_int(0, 160, 20+n*10, 0, offset sine[n]);
    END
    write(0,0,192,0,"Press ESC to finish ...");
    REPEAT
        FRAME;
    UNTIL (key(_esc));
END
```


This program will print on screen a list of angles, randomly
chosen between 0 and 360000 (from 0 to 360 degrees), and use the function
**sin()** to calculate the sine of them.

---------------------------------------
See: [Expression](definition_of_an_expression.md) - See: [Use of the angles in the language](use_of_angles_in_the_languagedot.md)

