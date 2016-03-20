**define_region(**&lt;region number&gt;**,** &lt;x&gt;**,** &lt;y&gt;**,**&lt;width&gt; **,**&lt;height&gt; **)**

### Description

Defines a new region within the screen (like a borderless window).
Regions are rectangular areas inside the screen, in which you will see some kind
of process, scroll windows or mode 7 windows.

The **region number** must be between 1 and 31. Up to 31 different 
regions in the screen can be defined that are assignable, after that, to different processes
(fixing its local variable [region](local_region.md) to the new number) as its view window
or use it like a border for a scroll window or a mode 7 window, indicating it in the  
parameter of the functions [start_scroll()](start_scroll().md) or [start_mode7()](start_mode7().md).

The **region number 0** can't be redefined, because it will be always be the entire screen,
a window at the coordinates (0, 0) and as wide and as high as the screen.
This is the region in which every process will be displayed,
because its local variable [region](local_region.md) always has a value 0.

### Example program
```
PROGRAM example_define_region;

PRIVATE
    counter;

BEGIN
    load_fpg("help/help.fpg");
    put_screen(0, 1);

    define_region(1, 0, 0, 160, 200);   // We define the region 1
    define_region(2, 160, 0, 160, 200); // We define the region 2

    write(0, 0, 0, 0, "Region 1");
    write(0, 320, 0, 2, "Region 2");

    FROM counter=1 TO 20;
        mobile_process(rand(0, 319), rand(0, 159), rand(-8, 8), rand(-8, 8), rand(1, 2));
    END
END

PROCESS mobile_process(x, y, increment_x, increment_y, region);

BEGIN
    graph=100;
    LOOP
        IF (x<0 OR x>320) increment_x=-increment_x; END
        IF (y<0 OR y>200) increment_y=-increment_y; END
        x+=increment_x;
        y+=increment_y;
        FRAME;
    END
END
```


First you define two regions as lateral divisions of the screen.
After that, 20 processes of the type **mobile_process** are created using a loop at random
coordinates and movement, in one of the two regions.

You can see in the execution how each process can be seen in only one of the two halves
of the screen (just in its region).

---------------------------------------
See: [out_region()](out_region().md) - [start_scroll()](start_scroll().md) - [start_mode7()](start_mode7().md) - [Variable region](local_region.md)

