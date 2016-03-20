**load_map(**&lt;name of file&gt;**)**

**load_pcx(**&lt;name of file&gt;**)**

### Returns

The loaded **graphic code**.

### Description

Loads a **MAP or PCX file** with a graphic in the computer's memory . The function requires the file name as a parameter, in inverted commas.

The **graphic code** is returned as return value, which is a numeric value that must be specified to use the graphic, in the [graph](local_graph.md) variable or, in general, in all the functions requiring a **graphic code** among their parameters.

It is possible to load as many graphics as necessary. Every time one is loaded, the function will return the corresponding code (the first graphic loaded will have the code **1000**, the following one the code **1001**, etc.)

It is possible to specify the path to the file with the graphics' file. Nevertheless, if the file is in the directory by default (\MAP or \PCX), it won't be necessary.

---------------------------------------


### Important

When the **file code** to which that graphic belongs is required inside a function, the code **0** (which is the code of the first **file FPG** that is loaded in the program) must be indicated.

---------------------------------------


When different graphics have been loaded, keep in mind that if they have different palettes, every one of them must previously be activated with the [load_pal()](load_pal().md) function, indicating the name of the file (MAP / PCX) as a parameter, before using the graphic.

Graphics created with different palettes can not simultaneously be used.

### Example program
```
PROGRAM example_load_map;

PRIVATE
    map1;

BEGIN

    map1 = load_map("help/help.map"); // A graphic map's file is loaded.

    put_screen(0, map1);
    LOOP
        FRAME;
    END
END
```


In the example, a graphic map is loaded with the **load_map()** function, storing the **graphic code** that returns in the **map1** private variable.

This code is later used as a parameter of the [put_screen()](put_screen().md) function
to put the graphic on the background screen.

---------------------------------------


The [unload_map()](unload_map()_forward_slash_unload_pcx().md) and [unload_pcx()](unload_map()_forward_slash_unload_pcx().md) functions allows us to free up the computer's memory used by the graphic when it is not going to be used for a specific time. For that purpose, it also requires the **graphic code** to know which is the graphic to be unloaded from the memory.

**It is not necessary to unload the graphic from the memory** before finishing the 
program, as the system will do it automatically.

---------------------------------------


To load several graphics all at once in a program, they must be included inside a graphics file (FPG) and loaded with the [load_fpg()](load_fpg().md) function.

---------------------------------------


The function [new_map()](new_map().md) allows you to create a new graphic map of
any size and colour, without loading it from an file.

---------------------------------------
See: [new_map()](new_map().md) - [unload_map/pcx()](unload_map()_forward_slash_unload_pcx().md) - [load_fpg()](load_fpg().md) - [load_pal()](load_pal().md) - [graph](local_graph.md)

