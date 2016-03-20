**sqrt(**&lt;expression&gt;**)**

### Returns

The entire square root of the expression.

### Description

Calculates the square root of the expression passed as a parameter, **truncated to an integer**.

For instance, as a result, **sqrt(10)** will return **3** and not **3.1623**, which is the real value (approximately) of the square root of ten.

### Example program
```
PROGRAM example_sqrt;

GLOBAL
    values[15];
    n;

BEGIN
    FROM n=0 to 15;
        values[n]=rand(0, 100000);
        write_int(0, 0, n*10, 0, offset values[n]);
    END
    write(0, 0, 192, 0, "Press [SPACE] to calculate its square root");
    LOOP
        IF (scan_code==_space)
            FROM n=0 TO 15;

                values[n] = sqrt(values[n]);

            END
        END
        FRAME;
    END
END
```


This program will display a list of randomly chosen values on-screen. When the spacebar is pressed, the program will apply the **sqrt()** function to all these values, calculating their square root.

---------------------------------------
See: [Expression](definition_of_an_expression.md)

