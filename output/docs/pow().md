**pow(**&lt;expression&gt;**,** &lt;expression&gt;**)**

### Returns

The first expression **raised** to the second.

### Description

Calculates the result when the first expression is raised to the second one.

For instance, **pow(3, 2)** will return **9**, which is **3** squared, **3&sup2;**, or **3*3**.

### Example program
```
PROGRAM example_pow;
GLOBAL
    values[15];
    n;
BEGIN
    FROM n=0 TO 15;
        values[n]=rand(-100, 100);
        write_int(0, 0, n*10, 0, offset values[n]);
    END
    write(0, 0, 192, 0, "Press [SPACE] to square these numbers");
    LOOP
        IF (scan_code==_space)
            FROM n=0 TO 15;

                values[n] = pow(values[n], 2); // Square the values (value² or value ^ 2)

            END
        END
        FRAME;
    END
END
```


This program will display a list of numbers randomly chosen between -100 and 100 on the screen.
When the spacebar is pressed, these numbers will square.

Take into account that in the language **it is only possible to use integers within the**
([min_int](min_int.md) ... [max_int](max_int.md)) **range**. Therefore, when the result of the function exceeds
this range, **incorrect results will be shown**. In this case, the system won't produce an error,
so care must be taken.

---------------------------------------
See: [Expression](definition_of_an_expression.md)

