**start_mode7(**&lt;number of m7&gt;**,** &lt;file&gt;**,** &lt;graphic&gt;**,** &lt;exterior graphic&gt;**,**
              &lt;number of region&gt;**,** &lt;height of the horizon&gt;**)**

### Description

This is an advanced function whose use requires special skill of its user.

Creates a mode-7 display window. That is to say, it displays a **three-dimensional** graphic in a folded plane. In order to obtain this effect, this function will be called with the following parameters:

**&lt;m7 number&gt;** - Up to 10 mode-7 windows can be created on-screen,
numbered from **0** to **9**. If the aim is to create but one, the best thing to do is to define window number **0**. This number will be necessary later to modify the window parameters, as the system will need to know which one of the possible **10** mode-7 windows is intended to modify.

**&lt;file&gt;** - The graphics intended to be folded in the window must be in a file whose **file code** must be specified here, as a second parameter of the function. The graphics loaded with the[load_map()](load_map()_forward_slash_load_pcx().md) or [load_pcx()](load_map()_forward_slash_load_pcx().md) (or created with [new_map()](new_map().md)) function will be used as if they belonged to the first file (the file with the code 0).


**&lt;graphic&gt;** - The third parameter must be the main **code of the graphic**
which is going to be brought down in the window and must belong to the file
previously indicated.

**&lt;external graphic&gt;** - Here, it is possible to indicate either a **0**, if the aim is not to see any graphic beyond the graphic folded in the perspective, or a **graphic code** of the same file that will be shown in the perspective beyond the **main graphic**, until it gets the horizon. The height and width of this graphic must be powers of two, not higher than **8192** (these powers of two are: 1, 2, 4, 8, 16, 32, 64, 128, 256, 512, 1024, 2048, 4096 &amp; 8192). For instance, it can be a 64 pixel width by 32 pixel height graphic. This graphic will also be shown folded.

**&lt;region number&gt;** - Here, the rectangular screen region in which the mode-7 is going to be shown, will be indicated. If **0** is indicated as a region number,
this region will be shown on the whole screen. The rest of regions must previously be defined with the [define_region()](define_region().md) function (a **region** is but a rectangular zone of the screen).

**&lt;Height of the horizon&gt;** - The last parameter to indicate will be the distance, in pixels, from the upper part of the window, where the horizon line is intended to be put. If the camera is placed above the folded plane, then nothing will be displayed above the horizon line (this space is normally filled with another  scroll or mode-7 window). Otherwise, if the camera is placed below the plane, then nothing will be shown below this horizon line. 

---------------------------------------


**Besides the call to the function, some values of the** [global structure m7](global_struct_m7.md) **must be initialised** **for the correct window's working**.
This is a structure of 10 records (one for every possible mode-7 window)
and every record has the following fields:

  **camera**   - [Identifying code](_identifying_codes_of_processesdot.md) of the camera

  **height**   - Height of the camera

  **distance** - Distance of the camera

  **horizon**  - Height of the horizon

  **focus**    - Focus of vision

  **z**        - Depth plane

  **colour**    - Exterior colour


### Important In order to activate the mode 7 window it is **indispensable**  to start the **camera** field as, without this field, the window can not determine from where the folded plane must  **be seen**.

The camera will be placed in the folded plane, at the indicated **distance** of the process whose [identifying code](_identifying_codes_of_processesdot.md) has been set in **camera**, orientated at its angle itself (the one indicated by its [angle](local_angle.md) local variable). The height at which the camera is located with respect to the bottom will be that indicated in the **height** field.

See the help about the [m7 structure](global_struct_m7.md) for further information about these issues, or about how to access them.

---------------------------------------


### Example program
```
PROGRAM example_start_mode7;

PRIVATE
    file1;

BEGIN
    file1=load_fpg("help/help.fpg");

    start_mode7(0, file1, 4, 0, 0, 64);

    m7.height = 64;
    m7.distance = 32;
    m7.color = 162;
    m7.camera = id;

    write(0, 160, 0, 1, "Use the cursors to move");
    LOOP
        IF (key(_right)) angle-=8000; END
        IF (key(_left)) angle+=8000; END
        IF (key(_up)) advance(6); END
        FRAME;
    END
END
```


In the example, the graphics file is loaded and then, a three-dimensional mode 7 is created with the **start_mode7()** function. This function is passed the following parameters:

**0** - Number of mode 7 window (the first one, as just one window of this kind will be created).

**file1** - Code of the file from which the graphics must be taken. This is the code of the **help.fpg** file, that was loaded with the [load_fpg()](load_fpg().md) function.

**4** - Code of the main graphic to fold inside the mode 7. To see this graphic, the file must be loaded with the **Files menu**. Thus, it is possible to observe which one is the graphic with **code 4**
**0** - Code of the secondary graphic. A 0 indicates that no secondary (external) graphic will appear in the mode 7, so the external graphic will be displayed in the colour indicated by the **m7[0].colour** variable. In order to observe the effect of putting an **external graphic**, this parameter can be replaced, for instance, by  **100** (that is the code of a 32 by 32 pixel brown ball stored in the **help.fpg** file).

**0** - Region number of the screen on which the mode 7 must be **placed**.
A 0 indicates that it must be placed on the entire screen.

**64** - Height of the horizon. This last parameter indicates that the horizon line will be placed at 64 pixels from the upper part of the window.

After having called the **start_mode7()** function, the program defines the following values of the [global structure m7](global_struct_m7.md):

**m7.height=64;** - To show that the camera must be placed at 64 pixels from the bottom.

**m7.distance=32;** - To show that the camera must be placed at 32 pixels behind the camera process.

**m7.colour=162;** - To indicate that the external part must be displayed in colour number 162 of the palette.

**m7.camera=**[id](id.md)**;** - To indicate that the current process will be the camera process.

The camera will be placed 32 pixels behind the main process, at 64 pixels height, orientated at the angle indicated by its [angle](local_angle.md) variable.

After these initialisations, the sample program will remain in a loop that simply controls the [angle](local_angle.md) of the main process with the cursors. This angle will be that of the camera and, when the **up cursor** key is pressed, the [advance()](advance().md) function will be called for the main process (and, consequently, the mode 7 camera) to advance 6 pixels.

---------------------------------------
**How to visualise processes graphics in mode 7.**---------------------------------------


To create a process whose graphic is displayed in the mode 7, its [ctype](local_ctype.md) local variable must be defined as [c_m7](c_m7.md) (**type of coordinate**
as **mode 7 coordinate**), which will be done with the following statement:

  **ctype=c_m7;**

After this, the process will be displayed in the mode 7 with its graphic ([graph](local_graph.md)) scaled depending on the distance at which it is. The process must only modify its [x](local_x.md) and [y](local_y.md) variables to move through the folded plane.

---------------------------------------


**When a process belongs to the mode-7 (the value c_m7 has been assigned to its local variable** [ctype](local_ctype.md)**):** 

  - Its [x](local_x.md) and [y](local_y.md) variables will  be referred to the folded main graphic's point above which the process graphic will be placed.

  - Its [z](local_z.md) variable will lose its effect, as the graphics will appear in strict order of depth. This variable will only be useful to indicate display priorities in graphics exactly placed in the same depth plane.

  - The process will automatically be deleted when the mode 7 window, to which the process belongs, is deleted with the [stop_mode7()](stop_mode7().md) function,
or when the videomode is changed with the [set_mode()](set_mode().md) function as, by doing so, the mode 7 windows will also be deleted.

---------------------------------------


If there were several **mode 7** windows, the process would be displayed in all of them by default. If the process had to be displayed just in one of them, its [cnumber](local_cnumber.md) local variable should be then defined. For instance, if there were 6 mode 7 windows (from number 0 to number 5) and the aim was to display a process only in windows 0 and 2, the following statement should be included in it:

  **cnumber=c_0+c_2;**

---------------------------------------


For a process to have several graphics (several views), depending on the
angle from which it is observed, its graphic must be defined with the [xgraph](local_xgraph.md) local variable (instead of the [graph](local_graph.md) variable).
To define this variable, it is necessary, at first, to create a table (of any name), first indicating the graphic's **number of views** and then the **graphics codes** for these views, starting with **angle 0** and in an anticlockwise direction. For instance:

  **GLOBAL**

    **views_car[]=4, 100, 101, 102, 103;**


The table **views_car** would define 4 views: graphic 100 for angles
near 0 degrees, graphic 101 for angles near 90 degrees,
graphic 102 for angles near 180 degrees, etc.

And then, the [xgraph](local_xgraph.md) variable must be initialised in the process code with the following statement:

  **xgraph=OFFSET views_car;**

To get an example about what we have just seen, examine some of the DIV Games Studio's sample games that use this technique. Thus, read the comments about these programs (for instance, see **Speed for dummies**).

---------------------------------------
See: [stop_mode7()](stop_mode7().md) - [Structure m7](global_struct_m7.md)

