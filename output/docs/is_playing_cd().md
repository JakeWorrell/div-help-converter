**is_playing_cd()**

### Returns

**True** (1) if the CD is playing, or **false** (0) if it isn't.

### Description

This function is used to determine if the CD is playing a track.
                
Returns **True** (an odd number) if the CD is playing, or **False** (an even number) if
no track is playing.

Normally this is used to play a song in a continuous loop as shown in this example.

### Example program
```
PROGRAM example_is_playing_cd;
BEGIN
    play_cd(1, 0);
    LOOP

        IF (NOT is_playing_cd()) // Checks if the song has finished

            play_cd(1, 0);
        END
        FRAME;
    END
END
```


In this example (which you need to have an audio **Compact disk** inserted in your **CD-ROM** drive),
The [play_cd()](play_cd().md) function is used to play the first song of the CD.

In a loop, a check is made to see if the song has finished so it can
restart it.

---------------------------------------


The volume of the cd-audio can be controlled with the
[setup](global_struct_setup.md) structure and the [set_volume()](set_volume().md) function.
                                            
---------------------------------------
See: [play_cd()](play_cd().md) - [stop_cd()](stop_cd().md) - [set_volume()](set_volume().md) - [Setup structure](global_struct_setup.md)

