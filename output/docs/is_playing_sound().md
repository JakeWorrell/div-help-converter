**is_playing_sound(**&lt;number of channel&gt;**)**

### Returns

**0** - If the channel is stopped.

**1** - If is going the sound by the channel.

### Description

This function allows you to know if one of the **sound channels** are playing sound or if it is disposed.

the **&lt;number of channel&gt;** is required as the parameter, this value is obtained as the 
return of the function [sound()](sound().md) after initiating the playback of the sound effect.

### Example program
```
PROGRAM example_is_playing_sound;

GLOBAL
    sound_id;
    channel_id;

BEGIN
    write(0,0,0,0,"Press ESC to finish.");
    sound_id = load_pcm("help/help.pcm",0);
    channel_id  = sound(sound_id, 256, rand(100,400));
    REPEAT

        // If the playback has finished, return the sound

        IF (NOT is_playing_sound(channel_id))

            channel_id = sound(sound_id, 256, rand(100,400));
        END
        FRAME;
    UNTIL (key(_ESC));
END
```


This example uses a function to continually test and restart the sound, 
controlled by the program, instead of automatically (as is often 
indicated in the loading of the sound, in the functions [load_pcm()](load_pcm()_forward_slash_load_wav().md)
or [load_wav()](load_pcm()_forward_slash_load_wav().md)).

The playback again always initiates once the sound channel is free,
it means, each time when playback of the sound has finished.

The program uses this circumstance (manual control of the replay)
to emit the sound with a different frequency in each case, this couldn't be done
with the automatic replay. This frequency is obtained as
a value between 100 and 400 with the function [rand()](rand().md).

---------------------------------------


### Note The same sound can be played back by different channels each time,
therefore it is necessary to save the channel number each time when the playback is initiated.

---------------------------------------
See: [sound()](sound().md) - [change_sound()](change_sound().md) - [is_playing_song()](is_playing_song().md)

