**tan(**&lt;angle&gt;**)**

### Returns

The tan of a given angle.

### Description


Calculates the tangent in thousandths of the angle given as the parameter.

The angles are manipulated always in thousandths of a degree (see the
[use of angles in the language](use_of_angles_in_the_languagedot.md)), and the tan will be returned 
in thousandths of also (as a value inside of the rank 
[min_int](min_int.md) ... [max_int](max_int.md)).

For example, **tan(45000)** will return  **1000**, because the tan of 45 degrees 
is 1.

### Example program
```
PROGRAM example_tan;

GLOBAL
    angles[15];
    tangent[15];
    n;

BEGIN
    write(0,0,0,0,"Angles");
    write(0,160,0,0,"Tans");
    FROM n=0 TO 15;
         angles[n] = rand(0, 360000);

        tangent[n] = tan(angles[n]); // calculates the tan of the angle

        write_int(0, 0,   20+n*10, 0, offset angles[n]);
        write_int(0, 160, 20+n*10, 0, offset tangent[n]);
    END
    write(0,0,192,0,"Press ESC to finish ...");
    REPEAT
        FRAME;
    UNTIL (key(_esc));
END
```


This program will print on screen a list of the angles, randomly chosen
between 0 and 360000 (from 0 to 360 degrees), and will use the function
**tan()** to calculate the tangent of them.

---------------------------------------
See: [Expression](definition_of_an_expression.md) - See: [Use of the angles in the language](use_of_angles_in_the_languagedot.md)

