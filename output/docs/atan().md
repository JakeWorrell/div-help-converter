**atan(**&lt;tan&gt;**)**

### Returns

The arctan of a given tangent.

### Description

Calculates the arctan of the tan given as a parameter in thousandths, the corresponding
angle to a tan is obtained (inverse operation to the tan of an angle, which can be obtained
with the function [tan()](tan().md)).

The angles are always manipulated in thousandths of a degree (see the
[use of angles in the language](use_of_angles_in_the_languagedot.md)), and the arctan will be returned 
in thousandths of a degree also.

The **&lt;tan&gt;** is required as a value inside of the rank [min_int](min_int.md)...
[ max_int](max_int.md) (from -inf to +inf), and the result is returned as an 
angle between** -90000** and **90000** (from -90 to +90 degrees).

---------------------------------------


### Note There is another function to calculate the arctan called [atan2()](atan2().md),
this function takes as its parameters the values **&lt;x&gt;** and **&lt;y&gt;** and returns the arctan
of **y/x** between -180000 and 180000 (of -180 to 180 degrees).

---------------------------------------


### Example program
```
PROGRAM example_atan;

GLOBAL
    tangent[15];
    angles[15];
    n;

BEGIN
    write(0,0,0,0,"Tan");
    write(0,160,0,0,"Atan(angle)");
    FROM n=0 TO 15;
        tangent[n] = rand(-1000, 1000);

        angles[n] = atan(tangent[n]); // The arctan of a tan is calculated

        write_int(0, 0,   20+n*10, 0, offset tangent[n]);
        write_int(0, 160, 20+n*10, 0, offset angles[n]);
    END
    write(0,0,192,0,"Press ESC to finish ...");
    REPEAT
        FRAME;
    UNTIL (key(_esc));
END
```


This program will print on screen a list of the tans, randomly chosen
between -1000 and 1000 and use the function **atan()** to calculate the
arctan of them (between -45 and 45 degrees).

---------------------------------------
See: [Expression](definition_of_an_expression.md) - See: [Use of the angles in the language](use_of_angles_in_the_languagedot.md)

