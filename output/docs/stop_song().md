**stop_song(****)**

### Description

Stops the playback of the music module (MOD, S3M or XM) which is being played.
This function doesn't require any parameter, because only one music module can be
played at the same time.

It is not essential to stop the playback of a music module before being
deleted from memory (an operation made with the function [unload_song()](unload_song().md)), 
this is done automatically.

### Example program
```
PROGRAM example_stop_song;

GLOBAL
    id_song;

BEGIN
    load_song("help/help.xm",1);
    song(id_song);
    write(0,0,0,0,"Press SPACE to stop the song ...");
    LOOP
        IF (key(_space))

            stop_song(); // Stops the module

        END
        FRAME;
    END
    unload_song(id_song);
END
```


This example loads the module contained in the file **help.xm** with the
function [load_song()](load_song().md). The playback of the file begins with a
call to the function [song()](song().md).

The program will then enter into a loop in which this module will still be playing,
when the space bar is pressed it makes a call to the function **stop_song()**
and the module finishes.

To delete a song from memory the function [unload_song()](unload_song().md) must be used, 
all the programs created in DIV Games Studio will free any
filled memory automatically at the end.

---------------------------------------


### Note To stop a song of CD-Audio the function [stop_cd()](stop_cd().md) is used, and for
a sound effect, use the function [stop_sound()](stop_sound().md).

---------------------------------------


### Note The function [is_playing_song()](is_playing_song().md) can find out if a module is playing.

---------------------------------------
See: [song()](song().md) - [load_song()](load_song().md) - [play_cd()](play_cd().md) - [sound()](sound().md)

