**key(**&lt;key code&gt;**)**

### Returns

**True** (1) if the key is pressed and **false** (0) if it is not.

### Description

Returns **true** (an odd number) if the key (indicated as the **&lt;key code&gt;** parameter)
is pressed, and returns **false** if not.

The parameter is usually specified by the key name proceeded by the **_** symbol.
For example, to read the [**A**] key, the command used would be **key(_a)**.

View the [key codes](key_codes.md) to see the complete list of keytable codes that
can be used as the parameter of the **key()** function.

### Example program
```
PROGRAM example_key;
BEGIN
    LOOP
        delete_text(all_text);

        IF (key(_space)) // Check if the space bar is being pressed

            write(0, 0, 0, 0, "You are pressing the [SPACE] key.");
        ELSE
            write(0, 0, 0, 0, "You are not pressing the [SPACE] key.");
        END
        FRAME;
    END
END
```


In this example, a message is displayed, dependant on whether the **SPACE** key is being pressed
or not.

---------------------------------------


There are three predefined global variables that can be used 
to control the keytable. These are:

[scan_code](global_scan_code.md) - Gets the Code of the last key that has been pressed. This
is a numeric value that corresponds directly with the constants
of [key codes](key_codes.md) used as parameters of the **key()** function.

[ascii](global_ascii.md) - the ASCII code of the last key pressed.

[shift_state](global_shift_status.md) - Variable that indicates a number in the function for the 
special keys (shift, alt, control, ...) which are pressed at that moment.

---------------------------------------
See: [key codes](key_codes.md) - [scan_code](global_scan_code.md) - [ascii](global_ascii.md) - [shift_state](global_shift_status.md)

