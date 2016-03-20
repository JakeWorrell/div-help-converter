**is_playing_song(****)**

### Returns

**0** - Any module is playing.

**1** - Is playing a musical module.

### Description

This function determines if a digital musical module of the file MOD,
S3M or XM is being played.

These modules must be loaded with the function [load_song()](load_song().md) and their
playback is initiated with the call to [song()](song().md).

Only one module can be played back at the same time, therefore this function
doesn't require any parameter, only returns **1** if there is one module
reproducing.

### Example program
```
PROGRAM example_is_playing_song;

GLOBAL
    id_song;
    sounding;

BEGIN
    load_song("help/help.xm",1);
    song(id_song);
    write(0,0,0,0,"ENTER initiate the module / SPACE to stop it");
    write_int(0,0,10,0,OFFSET sounding);
    LOOP
        IF (key(_enter)) song(id_song); END
        IF (key(_space)) stop_song(); END

        sounding = is_playing_song(); // Determines if is playing

        FRAME;
    END
END
```


This example loads musical module contained in the file **help.xm** and
permits, inside one loop, initiate it with the key **ENTER** and stop it with
the space bar.

Inside the same loop is used the function **is_playing_song()** to
determine if it is playing each moment.

---------------------------------------


### Note To finish the playback of one musical module must be used the function [stop_song()](stop_song().md).

---------------------------------------
See: [load_song()](load_song().md) - [song()](song().md) - [is_playing_sound()](is_playing_sound().md)

