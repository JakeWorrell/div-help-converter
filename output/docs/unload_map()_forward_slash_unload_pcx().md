**unload_map(**&lt;code of the graphic&gt;**)**

**unload_pcx(**&lt;code of the graphic&gt;**)**

### Description

Unloads the graphic whose code is passed as a parameter from the memory.
This &lt;graphic code&gt; is the value returned by the [load_map()](load_map()_forward_slash_load_pcx().md) [load_pcx()](load_map()_forward_slash_load_pcx().md)
or [new_map()](new_map().md) function by loading a new graphic stored in an **file MAP or PCX** in 
the computer's memory.

After having unloaded a graphic, **much care must be taken** not to go on using this graphic in the program. Otherwise, the program would risk to become blocked.

**It is not necessary to unload the graphic** before finishing the 
program, as the system will do it automatically.

Then, a graphic must be unloaded from the memory only when it is not going to be used for a specific time and when the aim is to free up the occupied space in the computer's memory to load other resources (other graphics files, sounds, fonts, etc.), which will make sense only with graphics of a certain size, big enough so as to be worth freeing up the space they occupy.

### Example program
```
PROGRAM example_unload_map;

PRIVATE
    map1;

BEGIN
    map1=load_map("help/help.map");
    put_screen(0, map1);
    write(0, 160, 0, 1, "Press [ENTER] to unload the graphic and finish");
    REPEAT
        FRAME;
    UNTIL (key(_enter));

    unload_map(map1); // The graphic is unloaded.

END
```


In the example, a graphic map is loaded with the [load_map()](load_map()_forward_slash_load_pcx().md) function, storing the **graphic code** returned by it in the **map1** private variable.

This code is later used as a parameter of the [put_screen()](put_screen().md) function
to put the graphic on the background screen.

Then, the program will display a message and wait in a loop for the ENTER key to be pressed. At that moment, the graphic will be unloaded by using the **unload_map()** function.

---------------------------------------


The graphics individually loaded with the [load_map()](load_map()_forward_slash_load_pcx().md) or [load_pcx()](load_map()_forward_slash_load_pcx().md)(or created with the
[new_map()](new_map().md)) functions will not be unloaded when file number 0 (with code 0) is unloaded
with the [unload_fpg()](unload_fpg().md) function, even if these graphics are used as if they belonged to it.

---------------------------------------
See: [load_map/pcx()](load_map()_forward_slash_load_pcx().md) - [unload_fpg()](unload_fpg().md)

