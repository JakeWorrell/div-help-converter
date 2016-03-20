**unload_fpg(**&lt;file code&gt;**)**

### Description

Unloads the graphics file whose code is passed as parameter from the memory. This &lt;file code&gt; is the value returned by the [load_fpg()](load_fpg().md) function when a new graphics file is loaded in the memory.

After having unloaded a graphics' file, **much care must be taken** not to go on using in the program any graphic that was in that file. Otherwise, the program could become blocked.

**It is not necessary to unload the file from the memory** before finishing the program, as the system will do it automatically.

Therefore, a file must be unloaded from the memory only when it is not going to be used for a while and when the aim is to free up space occupied in the computer's memory in order to load other resources (other graphics files, sounds, fonts, etc.).

### Example program
```
PROGRAM example_unload_fpg;

PRIVATE
    file1;

BEGIN
    file1=load_fpg("help/help.fpg");
    put_screen(file1, 1);
    write(0, 160, 0, 1, "Press [ENTER] to unload the file and finish");
    REPEAT
        FRAME;
    UNTIL (key(_enter));

    unload_fpg(file1); // The file is loaded.

END
```


The example loads the graphics file contained in the **help.fpg** file
with the [load_fpg()](load_fpg().md) function, storing the **file code** in the
**file1** private variable.

The program will remain in a loop until the ENTER key is pressed. At that moment, the file will be unloaded from the memory with **unload_fpg()**
and the program will finish.

---------------------------------------


The graphics individually loaded with the [load_map()](load_map()_forward_slash_load_pcx().md) or [load_pcx()](load_map()_forward_slash_load_pcx().md) (or created with [new_map()](new_map().md)) functions will not be unloaded when file number 0 (with code 0) is loaded , even if they were used as if they belonged to it. These graphics will have to be unloaded by using the [unload_map()](unload_map()_forward_slash_unload_pcx().md) or [unload_pcx()](unload_map()_forward_slash_unload_pcx().md) functions.

---------------------------------------
See: [load_fpg()](load_fpg().md) - [load_map/pcx()](load_map()_forward_slash_load_pcx().md) - [unload_map/pcx ()](unload_map()_forward_slash_unload_pcx().md)

