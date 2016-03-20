**load_song(**&lt;name of file&gt;**,** &lt;replay&gt;**)**

### Returns

Identifier of the loaded song, or -1 if an error occurs.

### Description

Loads a song from an file MOD, S3M or XM, to its later reproduction.

The function requires the name of the file which contains the music module,
and if this one must be played back just once (indicating **0** in **&lt;replay&gt;**) or
indefinitely (indicating **1**).

These music modules can be composed with multiple shareware programs
or freeware programs. In DIV Games Studio these music modules can be played back, in the created programs,
but you cannot compose new modules.

### Example program
```
PROGRAM example_load_song;

GLOBAL
    id_song;

BEGIN

    load_song("help/help.xm",1); // Loads an XM module, with replay

    song(id_song);
    write(0,0,0,0,"Press ESC to finish");
    REPEAT
        FRAME;
    UNTIL (key(_ESC));
    unload_song(id_song);
END
```


This example loads the module contained in the file **help.xm** with the
function **load_song()**, indicating that this one must be played back indefinitely.
The reproduction of the file is begun with a call to the function [song()](song().md).

To delete a song from memory, the function [unload_song()](unload_song().md) must be used.

The sound volume of the song can be controlled with the function [set_volume()](set_volume().md) 
and the data contained in the [setup structure](global_struct_setup.md).

---------------------------------------


### Note With this version of DIV Games Studio comes included some files of freeware 
music modules in the directory **MOD**.

---------------------------------------


### Note To reproduce songs contained in a CD-Audio track the functions
[play_cd()](play_cd().md) and [stop_cd()](stop_cd().md) must be used.

---------------------------------------
See: [unload_song()](unload_song().md) - [song()](song().md) - [play_cd()](play_cd().md) - [Setup structure](global_struct_setup.md)

