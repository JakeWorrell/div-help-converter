**graph=0;** // Code of the process graphic---------------------------------------
.

This is a predefined [LOCAL](declaration_of_local_datadot.md) variable, which means that each process 
will have its own value in its **graph** variable.

Normally, most of the processes correspond with a graphic object
displayed on screen that will be placed at the indicated coordinates
in the [x](local_x.md) and [y](local_x.md) local variables. It is necessary to define which graphic corresponds with this process by assigning a **graphic code** to the **graph** local variable.

By default, this variable will be equal to **0**, which implies that no graphic will be displayed for this process.

The graphics must first be created in the **graphic editor** of DIV
Games Studio (with the option &quot;**New...**&quot; of the maps menu) and then, they can be 
saved in an **file MAP** (containing this graphic),
or in a **file FPG** together with other graphics (it is possible to create a new 
file with the option &quot;**New...**&quot; of the files menu).

The graphics used in a program may come from an **file MAP** (that contain just one graphic) or from a **file FPG**(that may contain many graphics).

### Note The same graphic may be used in a program by many processes at the same time.

**files MAP or PCX**---------------------------------------


In order to use a graphic from an **file MAP** in the program, it must be loaded by calling the [load_map()](load_map()_forward_slash_load_pcx().md)  or [load_pcx()](load_map()_forward_slash_load_pcx().md) function, which will return the **graphic code** that must be assigned to the **graph** variable.

A [GLOBAL](declaration_of_global_datadot.md) variable is normally used to save this **graphic code** and then, it is assigned to the **graph** variable.

### Example program:}
PROGRAM example_graph;

GLOBAL
    graphic1;

BEGIN
    graphic1=load_map(&quot;help/help.map&quot;);

    graph=graphic1; // The graphic of the process is defined.

    LOOP
        x=mouse.x;
        y=mouse.y;
        FRAME;
    END
END
**-**

Even if in the previous example, the **graphic1** global variable could have been omitted, having directly assigned the code returned by the [load_map()](load_map()_forward_slash_load_pcx().md) function to the **graph** variable with the following statement:

  **graph=load_map(&quot;help/help.map&quot;);**

the **graphic code** returned by this function are simply integers from **1000**.

**Files FPG**---------------------------------------


In order to include a graphic that has been done in the **graphic editor**
in a **file FPG**, it is necessary to **drag the graphic window to the file window** (click on the graphic, move to the file and release). Then, the program will ask for the **graphic code**, so an integer ranging from **1** and **999** must be included here.

Thus, to use the graphic in a program, the **file FPG** that contains it must first be loaded with the [load_fpg()](load_fpg().md) function, assigning then the **graphic code** to the **graph** variable.

An example is now shown. Before, it is necessary to know that a **brown ball** graphic was stored in the **file HELP.FPG**
indicating the **graphic 100 code**.

{#9999,Example program
```
PROGRAM example_graph;
BEGIN
    load_fpg("help/help.fpg");

    graph=100; // The graphic of the process is defined.

    LOOP
        x=mouse.x;
        y=mouse.y;
        FRAME;
    END
END
```


**Several files FPG** can be loaded in a program. In this case, it will be necessary to indicate, besides the **graphic code** in the **graph** local variable, the **file code** returned by the [load_fpg()](load_fpg().md) function in the [file](local_file.md) local variable.

It won't be necessary if only one file is loaded, as the [file](local_file.md) variable equals **0** by default in all the processes and **0** will always be the **first file's code** loaded in the program.

---------------------------------------


There are more local variables related to the graphic of a process. The most important ones are mentioned below:

  **graph**  - Graphic code

  [file](local_file.md)   - File code

  [x](local_x.md), [y](local_y.md)   - Graphic coordinates

  [z](local_z.md)      - Depth plane

  [angle](local_angle.md)  - graphic angle

  [size](local_size.md)   - graphic size

  [flags](local_flags.md)  - Mirrors and transparencies

  [region](local_region.md) - Display window


---------------------------------------
See: [Local data](predefined_local_data.md)

