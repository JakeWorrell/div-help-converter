**out_region(**&lt;identifier code&gt;**,** &lt;number of region&gt;**)**

### Returns

**True** if the process is outside of the region or **False** in the opposite case.

### Description

This function determines whether a process is out of a screen region. For that, the function
requires the [identifying code](_identifying_codes_of_processesdot.md) of the process and a region number.

The screen regions can be defined with the [define_region()](define_region().md) function and they are simply
rectangular zones of screen.

Region number **0** can not be defined, as it will always be equivalent to the entire screen.
Therefore, if **0** is specified as a second parameter, this function determines whether a process
is out of the screen (if it is not seen).

In case that the process' graphic is out of the specified region, the function returns **True**
(an odd number). Otherwise, if the graphic is seen in that region, even partially, the function
returns **False** (any even number).

The process whose [identifying code](_identifying_codes_of_processesdot.md) is indicated must have its graphic correctly defined
(normally in its [graph](break_statement.md) variable). Otherwise, the system will produce an error,
since it is not possible to calculate the dimensions of a graphic if the process lacks it.

### Example program
```
PROGRAM example_out_region;
BEGIN
    load_fpg("help/help.fpg");
    put_screen(0, 1);
    y=100;
    x=160;
    graph=101;
    LOOP
        advance(8);

        IF (out_region(id, 0)) // Check for off screen

            x=160;
            y=100;
            angle=rand(-pi, pi);
        END
        FRAME;
    END
END
```


In the example, a background graphic is put and the main program creates a triangle-shaped
graphic at the centre of the screen with an angle randomly chosen.

In every step of the loop, the triangle advances and it is checked whether it is still present on
the screen (region 0) with the **out_region()** function. If so, it is put once again at the centre
of the screen with another angle, also randomly chosen.

---------------------------------------
See: [define_region()](define_region().md) - [region](local_region.md) - [codes identifiers](_identifying_codes_of_processesdot.md)

