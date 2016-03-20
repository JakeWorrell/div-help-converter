**abs(**&lt;expression&gt;**)**

### Returns

The **absolute value** of the expression.

### Description

Calculates the absolute value of the expression given as parameter.
If the result of the expression is negative it will change the sign,
if it is positive, it won't do anything.

### Example program
```
PROGRAM example_abs;

GLOBAL
    INT values[15];
    INT n;

BEGIN
    FROM n=0 TO 15;
        values[n]=rand(-1000, 1000);
        write_int(0, 0, n*10,0, offset values[n]);
    END
    write(0, 0, 192, 0, "Press [SPACE] to run the function abs()");
    LOOP
        IF (key(_space))
            FROM n=0 TO 15;

                values[n] = abs(values[n]); // We find the absolute value

            END
        END
        FRAME;
    END
END
```


This program will print a list of values on the screen that can be positive or negative, 
when the space bar is pressed it will apply the function **abs()** to all these values, 
making all values positive.

---------------------------------------
See: [Expression](definition_of_an_expression.md)

