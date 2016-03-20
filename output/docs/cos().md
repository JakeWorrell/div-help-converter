**cos(**&lt;angle&gt;**)**

### Returns

The cosine of a given angle.

### Description

Calculates the cosine in thousandths of the angle given as the parameter.

The angles are manipulated always in thousandths of a degree (see the
[use of angles in the language](use_of_angles_in_the_languagedot.md)), and the cosine will be returned 
in thousandths of a unit also (as a value from -1000 to 1000).

For example, **cos(0)** will return  **1000**, because the cosine of 0 degrees is 1.


### Example program
```
PROGRAM example_cos;

GLOBAL
    angles[15];
    cosine[15];
    n;

BEGIN
    write(0,0,0,0,"Angles");
    write(0,160,0,0,"Cos");
    FROM n=0 TO 15;
        angles[n] = rand(0, 360000);

        cosine[n] = cos(angles[n]); // The cosine of the angle is calculated

        write_int(0, 0,   20+n*10, 0, offset angles[n]);
        write_int(0, 160, 20+n*10, 0, offset cosine[n]);
    END
    write(0,0,192,0,"Press ESC to finish ...");
    REPEAT
        FRAME;
    UNTIL (key(_esc));
END
```


This program will print on screen a list of the angles, randomly chosen
between 0 and 360000 (from 0 to 360 degrees), and will use the function
**cos()** to calculate the cosine of them.

---------------------------------------
See: [Expression](definition_of_an_expression.md) - See: [Use of the angles in the language](use_of_angles_in_the_languagedot.md)

