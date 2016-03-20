**get_joy_button(**&lt;button number&gt;**)**

### Returns

**True** (1) if the button is pressed or **False** (0) if it isn't

### Description

This function requires the joystick number button (from 0 to 3) as a parameter, and returns **true** (an odd numerical value) if it is pressed at that moment.

If the button is not pressed, the function returns **false**
(an even numeric value).

Some joysticks only have two buttons, and this case they will be mapped to button
numbers 0 and 1. On computers that have two joysticks connected, the second joystick
will have the buttons numbered 2 and 3.

### Example program
```
PROGRAM example_get_joy_button;

PRIVATE
    counter;
    buttons[3];

BEGIN
    write(0, 160, 200, 7," Press the buttons of the joystick.");
    write(0, 0, 0, 0, "Buttons (0..3):");
    write_int(0, 100, 0, 0, offset buttons[0]);
    write_int(0, 120, 0, 0, offset buttons[1]);
    write_int(0, 140, 0, 0, offset buttons[2]);
    write_int(0, 160, 0, 0, offset buttons[3]);
    LOOP
        FROM counter=0 TO 3;

            // We take the value of the joystick button
            buttons[counter] = get_joy_button(counter);

        END
        FRAME;
    END
END
```


An explanatory message is displayed in the lower part of the screen and 
the condition of the four possible buttons is displayed in the upper part of the screen; 
after that, the program stays inside of a loop updating the state of the four buttons
continuously using the **get_joy_button()** function.

---------------------------------------


There are other ways to read the joystick. The easiest is to use
the [joy](global_struct_joy.md) structure, because in there are four variables that are
continuously updated with the status of the joystick buttons.

---------------------------------------
See: [get_joy_position()](get_joy_position().md) - [Joy Structure](global_struct_joy.md)

