**joy_filter=10;** // Filter applied to the joystick---------------------------------------
.

This global variable is used to define the filter applied to the read
joystick's coordinates.

It is defined as a percentage from **0 %** to **99 %**. By default, **joy_filter**
will equal **10** (a 10% filter will be applied).

The purpose of applying this filter to the joystick's coordinates is to make its movements gentler and to avoid possible &quot;**irregularities**&quot; in the coordinates' reading. Those joystick's coordinates must be obtained with the [get_joy_position()](get_joy_position().md) function. The **joy_filter** variable will only be useful when the latter function is being used.

The bigger the filter applied to the joystick is, the gentler the movements of the latter will be. But, at the same time, its answer will take longer.

As the task performed by this &quot;**filter**&quot; is somewhat difficult to understand,
an example is now shown.

### Example program
```
PROGRAM example_joy_filter;
BEGIN
    write(0, 0, 0, 0, "joy_filter=");
    write_int(0, 70, 0, 0, offset joy_filter);
    write(0, 160, 180, 1, "The graphic is shown at the joystick's coordinates");
    write(0, 160, 190, 1, "Use the up/down keys to vary the filter");
    load_fpg("help/help.fpg");
    put_screen(0, 1);
    graph=100;
    LOOP
        IF (scan_code==_up AND joy_filter<99)
            joy_filter++;
        END
        IF (scan_code==_down AND joy_filter>0)
            joy_filter--;
        END
        x=get_joy_position(0);
        y=get_joy_position(1);
        FRAME;
    END
END
```


This program displays the graphic of a ball at the coordinates returned by the main joystick with the 
[get_joy_position()](get_joy_position().md) function.

It can be notice how, for small values of **joy_filter**, many &quot;**irregularities**&quot; appear in the reading, and for very big values (like 95%) the coordinates' read is much gentler and regular, but slightly slower.

### Note It is indispensable to have a joystick (or gamepad) connected to the computer for this variable to be useful. If the joystick is connected during the program's execution, the system won't detect it (it must be connected from the beginning). See the [joy_status](global_joy_status.md) global variable.

---------------------------------------
See: [Global data](predefined_global_data.md) - [get_joy_position()](get_joy_position().md) - [joy_status](global_joy_status.md)

