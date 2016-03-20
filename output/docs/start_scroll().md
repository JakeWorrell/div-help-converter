**start_scroll(**&lt;number of scroll&gt;**,** &lt;file&gt;**,** &lt;graphic&gt;**,** &lt;background graphic&gt;**,**
               &lt;number of region&gt;**,** &lt;indicator of blocking&gt;**)**

### Description

This function has a certain complexity, requiring a special skill of the user, who (should have previously programmed) to use it.

Creates a scroll window, in which it will perform a view against a background graphic. That is to say, by using a graphic bigger than the display window as a game background, a part of this graphic can be showed and shifted in any direction.

To obtain this effect, this function will be called with the following parameters:

**&lt;scroll number&gt;** - Up to 10 scroll windows can be created on screen,
numbered from **0** to **9**. If the aim is to create only one, the best thing is to define window number **0**. This name will later be necessary to modify the parameters of the window, as the system will need to know which one of the **10** possible scroll windows is intended to change.

**&lt;file&gt;** - The graphics that are intended to be shown as a background in that window must be in a file whose **file code** must be specified here, as a second parameter of the function. The graphics loaded with the
[load_map()](load_map()_forward_slash_load_pcx().md) or [load_pcx()](load_map()_forward_slash_load_pcx().md) (or created with [new_map()](new_map().md)) 
functions will be used as if they belonged to the first file (the file with the code 0).

**&lt;graphic&gt;** - The third parameter must be the **code of the** main **graphic** that is going to be displayed as a background in the window and that must belong to the file previously indicated. This graphic
is normally the main window of the game on which the action will be developed. It is a graphic bigger than the display window, that will be shifted in one or several directions and on which the graphics of the game will be placed.

The scroll window will be initially placed with the [control point](control_pointsdot.md)
number **0** of this graphic in the upper left corner, when this point has been defined in the **graphic editor**.

**&lt;background graphic&gt;** - Here, **0** will be indicated if the aim is to obtain a single scroll plane (a single background graphic), or another **graphic code** if it is intended that it appears as scroll background (deeper),
behind the foreground. In order to see this background plane, it is indispensable that the **main graphic** (foreground) has parts painted in colour number 0 of the palette, as these transparent zones will allow us to see the **background graphic** through them.

**&lt;region number&gt;** - The rectangular screen region in which the scroll is going to be shown will be here indicated. If **0** is indicated as a region number,
it will be shown on full screen. The rest of regions must previously be defined with the [define_region()](define_region().md) function (a **region** is but a rectangular zone of the screen).

**&lt;locking indicator&gt;** - A value defining whether each of the two scroll planes is horizontally and vertically cyclical will be here indicated. For instance,
a plane is horizontally cyclical when, on leaving the picture on the right, the picture appears on the left. To obtain this value, the following quantities must be added:

 ** + 1** - If the foreground is horizontally cyclical.

 ** + 2** - If the foreground is vertically cyclical.

 ** + 4** - If the background is horizontally cyclical.

 ** + 8** - If the background is vertically cyclical.


This means that **0** if none of the two planes must be cyclical, **15** (**1**+**2**+**4**+**8**)
if both planes must be cyclical in both axes, **12** (**4**+**8**) if only the background must be cyclical, etc.

When a (foreground or background) graphic is smaller than the display window,
the system will force it to have a cyclical scroll plane. Otherwise, the scroll window could not be completely filled, without **cyclically** repeating
the graphic (tile).

---------------------------------------


**Besides the call to the function, some values of the** [scroll global structure](global_struct_scroll.md) **must be initialised** **for the correct working of the window**.
This is a structure of 10 records (one for each possible scroll window)
and every record has the following fields:

  **x0, y0**  - Foreground coordinates

  **x1, y1**  - Background coordinates

  **z**       - Depth plane

  **camera**  - [identifying code](_identifying_codes_of_processesdot.md) of the camera

  **ratio**   - Background's relative speed

  **speed**   - Foreground's maximum speed

  **region1** - First screen region

  **region2** - Second screen region


There are two ways to program the movement of the scroll windows:

- Manually, modifying in each frame of the game the fields **x0**, **y0**,
**x1** and **y1** of this structure (the scroll planes' coordinates).

- Automatically, for what the [identifying code](ways_to_obtain_the_identifying_code_of_a_processdot.md) of a process is needed in the field **camera** of this structure. From then, the system will be in charge of following the graphic of this process in the scroll window.

See the help about the [scroll structure](global_struct_scroll.md) either for further information about these fields, or to know how to access them.

---------------------------------------


### Example of AUTOMATIC scroll:}
PROGRAM example_start_scroll;

PRIVATE
    file1;

BEGIN
    file1=load_fpg(&quot;help/help.fpg&quot;);

    start_scroll(0, file1, 103, 102, 0, 15);

    scroll.camera=id;

    ctype=c_scroll;
    graph=100;
    write(0, 160, 0, 1, &quot;Use the cursors to move the ball&quot;);
    LOOP
        IF (key(_right)) x+=2; END
        IF (key(_left)) x-=2; END
        IF (key(_down)) y+=2; END
        IF (key(_up)) y-=2; END
        FRAME;
    END
END
**-**

In the example, the graphics file is loaded and then, a scroll window is created with the **start_scroll()** function. The latter is passed the following parameters:

**0** - Number of scroll window (the first one, as only a window of this kind will be created).

**file1** - Code of the file from which the graphics must be taken. This is the code of the file **help.fpg** loaded with the [load_fpg()](load_fpg().md) function.

**103** - Code of the main graphic (foreground) of the scroll. In order to see this graphic, the file must be loaded with the **Files menu**, being then possible to observe which is the graphic with **code 103**.

**102** - Code of the secondary graphic (background). This graphic will be shown in the scroll window **behind** the main graphic.

**0** - Number of the screen's region in which the scroll must **be placed**. 0 indicates that it must be put on the entire screen.

**15** - Lock indicator; 15 (1+2+4+8) indicates that the foreground as well as the background will be cyclical in both axes (horizontal and vertical).

After having called the **start_scroll()** function, the program defines the field **camera** of the [scroll structure](global_struct_scroll.md), assigning the [identifying code](_identifying_codes_of_processesdot.md)
of the main process to it (with the **scroll.camera=**[id](id.md)**;** statement). Thus, the scroll becomes **automatic**, following the graphic of the main process from that moment.

The program continues to define its **type of coordinate** as a **scroll coordinate** (with the **ctype=c_scroll;** statement), defining its graphic as number 100, that is a brown ball (with **graph=100;**), and displaying a message. Then, it will stay in a loop in which the coordinates of this process (the [x](local_x.md) and [y](local_y.md) variables) may vary with the cursor keys.

---------------------------------------


{#9999,Example of scroll MANUAL
```
PROGRAM example_start_scroll;

PRIVATE
    file1;

BEGIN
    file1=load_fpg("help/help.fpg");

    start_scroll(0, file1, 103, 102, 0, 15);

    write(0, 160, 0, 1, "Use the cursors to move the scroll");
    LOOP
        IF (key(_right))
            scroll.x0+=2;
            scroll.x1+=1;
        END
        IF (key(_left))
            scroll.x0-=2;
            scroll.x1-=1;
        END
        IF (key(_down))
            scroll.y0+=2;
            scroll.y1+=1;
        END
        IF (key(_up))
            scroll.y0-=2;
            scroll.y1-=1;
        END
        FRAME;
    END
END
```


In the example the file of graphics is loaded and then a scroll window
is created with the function **start_scroll()**. The same parameters of the previous
example are given to this last one.

After this, the program will stay in a loop inside of which, when the cursor  
keys are detected, the fields **x0**, **y0**, **x1** and **y1** of the 
[global scroll structure](global_struct_scroll.md) will change, and these define the coordinates of
the two scroll planes (**x0**, **y0** for the first plane and **x1**, **y1**
for the second).

It can be seen the difference between both methods; this last one, as it hasn't
beginning the field **camera** of the structure, will be able to manipulate
the coordinates of both planes.

---------------------------------------
**How to visualise the process graphics in the scroll**---------------------------------------


To create a process which graphic is seen in the scroll window, its local
variable [ctype](local_ctype.md) must be defined as [c_scroll](c_scroll.md) (**coordinate of type**
as **coordinate of scroll**), what will be done with the following statement:

  **ctype=c_scroll;**

Once this is done, the process will be seen in the scroll with its graphic
(defined in the local variable [graph](local_graph.md)). The process just must modify
its variables [x](local_x.md) and [y](local_y.md) to move over the scroll.

---------------------------------------


In the example, the graphics file is loaded and then, a scroll window is created with the **start_scroll()** window. The latter is passed exactly the same parameters as in the previous example.

After that, the program will stay inside a loop in which, on detecting the cursor keys, the fields **x0**, **y0**, **x1** and **y1** of the [scroll global structure](global_struct_scroll.md) will vary. These fields define the coordinates of the two planes of the scroll (**x0**, **y0** are the coordinates of the foreground and **x1**, **y1** those of the background).

The difference between both methods can be noticed. The latter can directly manipulate the coordinates of both planes, as it has not initialised the field **camera** of the structure.

---------------------------------------
**How to display processes' graphics in the scroll.**---------------------------------------


In order to create a process whose graphic is displayed in the scroll window, it is necessary to define its [ctype](local_ctype.md) local variable as [c_scroll](c_scroll.md) (**type of coordinate** as **scroll coordinate**), which will be done with the following statement:

  **ctype=c_scroll;**

After that, the process will be displayed in the scroll with its graphic (defined in the [graph](local_graph.md) local variable). The process must modified only its [x](local_x.md) and [y](local_y.md) variables to scroll.

---------------------------------------


{When a process belongs to the scroll (assigning the value c_scroll to its
local variable} [ctype](local_ctype.md)**):**

  - Its [x](local_x.md) and [y](local_y.md) variables will be referred to the point of the foreground's graphic on which the graphic of the process will be placed.

  - Its [z](local_z.md) variable will be now referred to the **variables z** of the
processes that also belong to the same scroll window. This means that
each time that a scroll window is displayed, all the graphics that belong to it (ranged by their **z**) will be displayed just after it. Then, the processes that **don't belong to that scroll window** will continue to be displayed.

  - The process will be automatically eliminated when the scroll window to which the process belongs is eliminated with the [stop_scroll()](stop_scroll().md) function.
Or when the videomode is changed with the [set_mode()](set_mode().md) function as, on doing so, the scroll windows will be also eliminated.

---------------------------------------


If there were several **scroll** windows, the process would be displayed by default in all of them. If it had to be displayed only in some of them, its [cnumber](local_cnumber.md) local variable should be defined. For instance, if there were 6 scroll windows (numbered from 0 to 5) and the aim was to display a process only in windows 0 and 2, the following statement should be included in it:

  **cnumber=c_0+c_2;**

In order to observe an example of what it has been said, the best thing is to examine some of the sample games of DIV Games Studio that use this technique. Thus, the reader is directly referred to the comments of these programs (for instance, see the example **Helioball**).

---------------------------------------
See: [stop_scroll()](stop_scroll().md) - [refresh_scroll()](refresh_scroll().md) - [move_scroll()](move_scroll().md) - [Scroll structure](global_struct_scroll.md)

