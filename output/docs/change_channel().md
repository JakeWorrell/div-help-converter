**change_channel(**&lt;channel&gt;**,** &lt;volume&gt;**,** &lt;balance&gt;**)**

### Description

This is a complementary function to [change_sound()](change_sound().md), which modifies
the properties of one of the sound channels which plays back the digital sound effects 
(See [sound()](sound().md)) or music modules (See [song()](song().md)).

The **&lt;channel&gt;** number which is wanted to be adjusted must be indicated, (normally
the channel number returned by the function [sound()](sound().md)), and the two following
values:

**&lt;volume&gt;** - Is given as the volume of the channel, between **0** and **512**,
independent of the volume of the sound and the general volume level.

When the volumes of the different channels are too loud the sound will be distorted,
so it is recommended to  modify the volume of the sound effects
through the function [change_sound()](change_sound().md) which, also allows you to adjust the
frequency of the sound.

**&lt;balance&gt;** - Is the &quot;panning&quot; or difference of volume between the left speaker
and the right one, it must be a value between **0** and **255**.

---------------------------------------


### Note The general levels of volume can be adjusted with the
global structure [setup](global_struct_setup.md) (digital sound, cd-audio and general volume).

---------------------------------------


### Example program
```
PROGRAM example_change_channel;

PRIVATE
    balance=128;     // volume level (0..256)

    id_sound;
    channel_id;

BEGIN
    load_fpg("help/help.fpg");
    put_screen(0, 1);

    id_sound = load_pcm("help/help.pcm", 1);
    channel_id = sound(id_sound, 256, 256);

    write(0, 160, 0, 1, "Press right or left to change the balance.");
    write_int(0, 160, 10, 1, offset balance);
    LOOP

        // Changes the balance of the channel

        change_channel(channel_id, 50, balance);

        IF (key(_right) AND balance<255) balance++; END
        IF (key(_left) AND balance>0) balance--; END
        FRAME;
    END

END
```


In the example a sound (contained in the file **help.pcm**)is loaded and played.
Inside of the program's main loop the channel balance through which the sound 
with the function **change_channel()**is being played , can be changed using
the cursor keys.

---------------------------------------


### Note See also the global predefined table in the predefined global table 
[channel](global_channel[].md), that indicates which of the sound channels are being used.

---------------------------------------
See: [change_sound()](change_sound().md) - [sound()](sound().md) - [song()](song().md) [STRUCT setup](global_struct_setup.md)

