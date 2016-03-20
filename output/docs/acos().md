**acos(**&lt;cos&gt;**)**

### Returns

The arccos of a given cos.

### Description

Calculates the arccos of the cosine given as the parameter in thousandths, the corresponding
angle to a cosine is obtained (inverse operation to the cosine, which can be obtained
using the function [cos()](cos().md)).

The angles are always manipulated in thousandths of a degree (see the
[use of angles in the language](use_of_angles_in_the_languagedot.md)), and the acos also returns values in thousandths
(as a value inside of the rank). 

The **&lt;cos&gt;** is required as a value from** -1000** to **1000** (from -1.0 to +1.0),
and the result is returned as an angle between ** -90000** and **90000** (from -90
to +90 degrees).

### Example program
```
PROGRAM example_acos;

GLOBAL
    cosine[15];
    angles[15];
    n;

BEGIN
    write(0,0,0,0,"Cos");
    write(0,160,0,0,"Acos(angle)");
    FROM n=0 TO 15;
        cosine[n] = rand(-1000, 1000);

        angles[n] = acos(cosine[n]); // The acos of a cos is calculated

        write_int(0, 0,   20+n*10, 0, offset cosine[n]);
        write_int(0, 160, 20+n*10, 0, offset angles[n]);
    END
    write(0,0,192,0,"Press ESC to finish ...");
    REPEAT
        FRAME;
    UNTIL (key(_esc));
END
```


This program will print on screen a list of the sins, randomly chosen
between -1000 and 1000 (represented in thousandths), and will use the function
**acos()** to calculate the asin of them.

---------------------------------------
See: [Expression](definition_of_an_expression.md) - See: [Use of the angles in the language](use_of_angles_in_the_languagedot.md)

