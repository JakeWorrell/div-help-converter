**song(**&lt;identifier of the module&gt;**)**

### Description

Starts playback of a music module loaded with the function
[load_song()](load_song().md). The function will receive as its only parameter the {&lt;identifier
of the module&gt;} to play back.

Just one module can be played at the same time, if another starts, the previous module
will stop. But a music module, a CD-Audio track (see [play_cd()](play_cd().md)) and multiple 
sound effects (see [sound()](sound().md)) can be played at the same time .

The playback will always begin from the start of the module (the beginning
of the song). To play a specific part of the module then use the function
[set_song_pos()](set_song_pos().md), which sets the position from where playback of the module
will start.

### Example program
```
PROGRAM example_song;

GLOBAL
    id_song;

BEGIN
    load_song("help/help.xm",1);

    song(id_song); // Starts the reproduction of the music module

    write(0,0,0,0,"Press ESC to finish");
    REPEAT
        FRAME;
    UNTIL (key(_ESC));
    unload_song(id_song);
END
```


This example loads the module contained in the file **help.xm** with the
function [load_song()](load_song().md), indicating that this must be played
indefinitely (this must be indicated in the file's load).

Then the playback of the file begins with the function **song()**.

The program will then enter a loop in which this module will still be playing, 
until the **ESC** key is pressed and the program finishes.

The sound volume of playback can be controlled with the function
[set_volume()](set_volume().md) and the contained data in the [setup structure](global_struct_setup.md).

---------------------------------------


### Note To finish the playback of a music module the function
[stop_song()](stop_song().md) must be used.

---------------------------------------


### Note The function [is_playing_song()](is_playing_song().md) can find if the module is being currently
played.


---------------------------------------
See: [load_song()](load_song().md) - [stop_song()](stop_song().md) - [play_cd()](play_cd().md) - [sound()](sound().md)

