**get_joy_position(**&lt;axis number&gt;**)**

### Returns

The position of the joystick axis

### Description

This function returns the coordinate in which is found the indicated axis
(with a number from **0** to **3**) of the analogic joystick.

Axis **0** - Axis **X** main.

Axis **1** - Axis **Y** main.

Axis **2** - Axis **X** secondary.

Axis **3** - Axis **Y** secondary.


The coordinate of the joystick can change due to the type of joystick and
computer in which it is played, in all cases it is a number which changes between
**4** and **200**, more or less.

The axes **main** and **secondary** can be integrated in just one joystick
in some cases (flight joysticks with a **hat**, **pedals**, etc.). In computers
with two joysticks connected, the main axis will be the joystick 1 and the
secondary axis will be the joystick 2.

### Example program
```
PROGRAM example_get_joy_position;

PRIVATE
    joystick_axis[3];
    counter;

BEGIN
    write (0, 160, 200, 7, "Move the joystick");
    write (0, 0, 0, 0, "Coordinate X main.");
    write_int(0, 0, 10, 0, offset joystick_axis[0]);
    write (0, 0, 40, 0, "Coordinate & main.");
    write_int(0, 0, 50, 0, offset joystick_axis[1]);
    write (0, 0, 80, 0, "Coordinate X secondary.");
    write_int(0, 0, 90, 0, offset joystick_axis[2]);
    write (0, 0, 120, 0, "Coordinate & secondary.");
    write_int(0, 0, 130, 0, offset joystick_axis[3]);
    LOOP
        FROM counter=0 TO 3;

            // We take the value of the joystick axis
            joystick_axis[counter] = get_joy_position(counter);

        END
        FRAME;
    END
END
```


Information is printed on the screen, then the program is put into a continuous loop.
The screen updates with the state of each  joystick position, stored in the joystick_axis[]
array, and updated using the get_joy_position() function.

---------------------------------------


There are other ways to read the joystick. The easiest is to use
the [joy](global_struct_joy.md) structure when analogue reading of the joystick (its coordinates)
is not required. This tells you the simple directions of the joystick, like the centre,
to the right, down, etc.

---------------------------------------
See: [get_joy_button()](get_joy_button().md) - [joy structure](global_struct_joy.md)

