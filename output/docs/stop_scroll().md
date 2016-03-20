**stop_scroll(**&lt;number of scroll&gt;**)**

### Description

Eliminates the scroll window which number (from 0 to 9) is given as parameter.
This &lt;number of scroll&gt; is the one indicated as first parameter in the function
[start_scroll()](start_scroll().md) and it is necessary due to can be up to 10 different scroll
windows, and the system needs to know which one is ending.

When a scroll window is eliminated, every process which belongs exclusively to this
window will die automatically, so, every process which has its
variable [ctype](local_ctype.md) with the value [c_scroll](c_scroll.md) and they are not being 
seen in any other scroll window.

### Important When the video mode is changed with the function [set_mode()](set_mode().md)
every scroll window (and its processes) will be eliminated, without being in this
case, necessary to use this function (**stop_scroll()**).

### Example program
```
PROGRAM example_stop_scroll;
BEGIN
    load_fpg("help/help.fpg");
    write(0, 160, 0, 1, "Press [ENTER] to activate the scroll window.");
    write(0, 160, 10, 1, "Press [SPACE] to end the scroll.");
    LOOP
        IF (scan_code==_space)

            stop_scroll(0); // The scroll is quit.

        END
        IF (scan_code==_enter)
            start_scroll(0, 0, 103, 102, 0, 15);
        END
        scroll.x0+=1;
        scroll.y0+=1;
        scroll.x1-=1;
        FRAME;
    END
END
```


In the example a file of graphics is loaded and the instructions of the program
appear on screen.

When the ENTER key is pressed, a scroll window will be created and when the
space bar is pressed, the function **stop_scroll()** is called, eliminating
this scroll window.

Inside of the main loop, the coordinates of the scroll are accessed, being contained
in the [global scroll structure](global_struct_scroll.md) to move manually the scroll window
(**scroll.x0+=1; ...**).

---------------------------------------


To create a scroll window is a bit complex procedure and requires to start some
parameters, some of them, required by the function [start_scroll()](start_scroll().md) 
and other contained in the [global scroll structure](global_struct_scroll.md)
(as the variable **scroll.x0** used in the example).

---------------------------------------
See: [start_scroll()](start_scroll().md) - [scroll structure](global_struct_scroll.md)

