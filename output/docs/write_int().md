**write_int(**&lt;font&gt;**,** &lt;x&gt;**,** &lt;y&gt;**,** &lt;centreing code&gt;**,** &lt;OFFSET variable&gt;**)**

### Returns

The identifying code of the text that has been written.

### Description

This function is used to show the numeric value of a variable. For that, it requires the following parameters:

**&lt;font&gt;** - The **font code** or **type of letter** that is going to be used.
Here, it is necessary to put either 0 when the aim is to use the system's font
(white, small font, 6 by 8 pixels), or the **font code** returned by the [load_fnt()](load_fnt().md) function when a new font is loaded in the program.

**&lt;x&gt;**, **&lt;y&gt;** - The coordinates referred to the screen in which the numeric value is going to be displayed, first in the horizontal axis and then in the vertical one.

**&lt;centreing code&gt;** - This code determines the position of the numeric value specified by the previous coordinates. Its values are:

  **0**-Up left     **1**-Up     **2**-Up right

  **3**-Left        **4**-centre     **5**-Right

  **6**-Down left      **7**-Down      **8**-Down right


For example, if a numeric value is written at the 160, 0 coordinates and with the centreing code 1 (Up), then the numeric value will be centred in the column 160 and it will be displayed from line 0 downwards. Or, if the aim is to have a numeric value in the upper left corner, it must be displayed at the 0, 0 coordinates and with centreing code 0 (Up left).

**&lt;OFFSET variable&gt;** - The offset inside the computer's memory of the variable whose value is intended to be displayed, must be specified as last parameter (the offset of the data is obtained with the [OFFSET](offset.md) operator).

---------------------------------------


The displayed numeric value will remain on-screen until it is deleted with the [delete_text()](delete_text().md) function, that requires as parameter the **identifying code** returned by **write_int()**.

### Important During the time that the value of the variable appears on screen, this value will automatically be updated every time the variable is modified. For that, new calls to **write_int()** are not necessary.

The [write()](write().md) function must be used to display any kind of alphanumeric text (a fixed text).

The texts will remain unchangeable on screen even if graphics are displayed on it or processes graphics pass before or behind them.

### Example program
```
PROGRAM example_write_int;

PRIVATE
    variable;

BEGIN
    write(0, 160, 190, 1, "Press [SPACE] to change the value of the variable.");

    write_int(0, 160, 100, 4, OFFSET variable); // A variable is displayed.

    LOOP
        IF (scan_code==_space) variable=rand(-100, 100); END
        FRAME;
    END
END
```


In the example, a text is displayed by using [write()](write().md) and the value of a variable with the **write_int()** function. This last function is passed the following
parameters:

  **0** - As **font** (0 is the system font).

  **0, 10** - As screen coordinates.

  **0** - As centreing code (Up/Left).

  **OFFSET variable** - As the offset of the variable in the memory.


In every step of the loop, if the spacebar is pressed, the value of the variable is changed, assigning it one randomly chosen with the [rand()](rand().md) function.

---------------------------------------


The depth plane in which the written texts appear is controlled through the [text_z](global_text_z.md) global variable, that is useful to regulate which graphics must be seen above the texts and which ones must be seen below them.

Then, it will be possible to move the texts towards another position if necessary, by using the [move_text()](move_text().md) function, which also requires the **identifying code** returned by **write()** as parameter.

---------------------------------------


When fonts loaded from **files FNT** are used, the colour palette used to generate these fonts must be activated (see [load_pal()](load_pal().md)). Otherwise, the colours may appear changed, being the text incorrectly displayed.

---------------------------------------


### Warning

It is not possible to display an expression, as it is shown below:

  **write_int(0, 0, 0, 0, offset variable + 1);**

To display the value of the variable plus 1. That is to say, if the aim was to display this value, it would be necessary either to add 1 to the variable or to create another variable, assigning it the value of the original variable plus 1, for
instance:

  **variable2 = variable + 1;**

  **write_int(0, 0, 0, 0, offset variable2);**


In this case, you should take into account that you had to update the value of the **variable2** at least once per every [FRAME](frame_statement.md) of the game, as by changing **variable** the value of **variable2** will not automatically be updated unless the **variable2 = variable + 1;** statement is again executed.

---------------------------------------
See: [write()](write().md) - [move_text()](move_text().md) - [delete_text()](delete_text().md) - [load_fnt()](load_fnt().md) - [text_z](global_text_z.md)

