**unload_song(**&lt;identifier of the module&gt;**)**

### Description

Deletes from memory the music module whose identifier is given as the
parameter. This **&lt;identifier of the module&gt;** is the value which the
function returns  [load_song()](load_song().md) when is loaded into memory.

After deleting a module **you must be very cautious**
not to use it again in the program, otherwise the program would crash.

**It is not necessary to delete the modules** before finishing the program
because the system will do it automatically.
So, just delete from memory the modules which are not going to be
used for the time being in order to liberate computer memory to load
other resources (other files of graphics, sounds, fonts, etc).

### Example program
```
PROGRAM example_unload_song;

GLOBAL
    id_song;

BEGIN
    load_song("help/help.xm",1);
    song(id_song);
    write(0,0,0,0,"Press ESC to finish");
    REPEAT
        FRAME;
    UNTIL (key(_ESC));

    unload_song(id_song); // Sets free the filled memory by the module

END
```


This example loads the module contained in the file **help.xm** with the
function [load_song()](load_song().md). The playback of the file is indicated with a
call to the function [song()](song().md).

The program will continue to play this module until the **ESC** key is pressed,
the module is then deleted from memory with the function **unload_song()**,
indicating as the parameter **id_song** which contains the **identifier of the module**
returned when loaded.

---------------------------------------


### Note songs that are CD-Audio tracks, which can be played with
 the function [play_cd()](play_cd().md), don't use up computer memory,
so they cannot be deleted with the function **unload_song()**.

---------------------------------------
See: [load_song()](load_song().md) - [song()](song().md)

