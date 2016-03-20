**stop_mode7(**&lt;number of m7&gt;**)**

### Description

Eliminates the mode 7 window which number (from 0 to 9) is given as parameter.
This &lt;number of m7&gt; is the one indicated as first parameter in the function
[start_mode7()](start_mode7().md), is necessary due to that can be up to 10 different mode 7
windows, and the system needs to know which of them is ending.

When a mode 7 window is eliminated, every process which belongs exclusively to
this window will die automatically, so, every process which has its
variable [ctype](local_ctype.md) with the value [c_m7](c_m7.md) and they are not being 
seen in any other mode 7 window.

### Important When the video mode is changed with the function [set_mode()](set_mode().md)
every mode 7 window (and its processes) will be eliminated, without being in this
case, necessary to use this function (**stop_mode7()**).

### Example program
```
PROGRAM example_stop_mode7;
BEGIN
    load_fpg("help/help.fpg");
    write(0, 160, 0, 1, "Press [ENTER] to start the mode 7 display.");
    write(0, 160, 10, 1, "Press [SPACE] to stop the mode 7 display.");
    write(0, 160, 190, 1, "Use the mouse to move the mode 7 display.");
    angle=90000;
    LOOP
        IF (scan_code==_space)

            stop_mode7(0); // The mode 7 is stopped

        END
        IF (scan_code==_enter)
            start_mode7(0, 0, 4, 0, 0, 64);
            m7.camera=id;
        END
        x=mouse.x;
        y=mouse.y;
        FRAME;
    END
END
```


In the example a file of graphics is loaded, and the instructions of the program
appear on screen, after this, the coordinates of the main process, which will be
the camera of the mode 7, will be controlled with the mouse (through the
statements **x=mouse.x;** and **y=mouse.y**).

When the ENTER key is pressed, a mode 7 window is created with a graphic
of a circle, controlled by the main process.

When the space bar is pressed, the function **stop_mode7()** will be called,
eliminating this window of the mode 7 visualisation.

---------------------------------------


To Create a mode 7 window is a bit complex procedure and requires to
begin some parameters, as in this case the camera, some of them required
by the function [start_mode7()](start_mode7().md) and other variables in the global
structure [m7](global_struct_m7.md) (as the variable **m7.camera** used in the example).

---------------------------------------
See: [start_mode7()](start_mode7().md) - [m7 structure](global_struct_m7.md)

