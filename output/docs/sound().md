**sound(**&lt;code of the sound&gt;**,** &lt;volume&gt;**,** &lt;frequency&gt;**)**

### Returns

The **channel number** through which the sound is played.

### Description

Plays the effect whose **sound code** is specified as first parameter.
At first, the sound must have been loaded from a PCM file with the
[load_pcm()](load_pcm()_forward_slash_load_wav().md) or [load_wav()](load_pcm()_forward_slash_load_wav().md) functions. This function returns the **sound code** corresponding to this effect.


As a second parameter, it is necessary to specify the **volume** at which the sound is intended to be reproduced, taking into account that **0** is the minimum volume, and **256** the maximum volume.

As third parameter, you must specify the **frequency** (speed) at which the sound is intended to be reproduced, being **256** the standard frequency that will reproduce the original sound. With lesser values, the sound will be reproduced with more accentuated bass. On the contrary, with higher frequency values, it will be reproduced with more accentuated treble.

The function returns the **channel number** that can be used by the
[stop_sound()](stop_sound().md) function to stop the sound and by the [change_sound()](change_sound().md) function to modify its volume or frequency.

There are 16 sound channels. Thus, up to 16 sounds may simultaneously be played.

### Example program
```
PROGRAM example_sound;

PRIVATE
    volume=128;        // Average value (0..256)
    frequency=256;     // Average value (0..512)
    id_sound, channels;

BEGIN
    load_fpg("help/help.fpg");
    put_screen(0, 1);
    write(0, 0, 0, 0, "Volume: Up(+) / Down(-)");
    write_int(0, 0, 10, 0, offset volume);
    write(0, 0, 20, 0, "Frequency: Right(+) / Left(-)");
    write_int(0, 0, 30, 0, offset frequency);
    write(0, 160, 180, 1, "Press [SPACE] to play the sound.");
    write(0, 160, 190, 1, "Use the cursors to change the values.");

    id_sound = load_pcm("help/help.pcm", 0);

    LOOP
        IF (scan_code==_space)

            // Plays it
            channels = sound(id_sound, volume, frequency);

        END
        IF (key(_up) AND volume<256) volume++; END
        IF (key(_down) AND volume>0) volume--; END
        IF (key(_right) AND frequency<512) frequency++; END
        IF (key(_left) AND frequency>0) frequency--; END
        FRAME;
    END
END
```


In the example, a background screen and an explanatory text are displayed,
and a sound is loaded with the [load_pcm()](load_pcm()_forward_slash_load_wav().md) function. This function returns the **identifier of the sound**, that is stored in the **id_sound** variable.

In the main loop, at every keystroke of the spacebar, the sound is played with the **sound()** function with the parameters defined in the **volume** and **frequency** variables.

These values can be manipulated with the cursors keys, in order to understand better how it works.

The **channel number** returned by **sound()**, that is stored in the **channel** variable, could have been used to modify the sound with [change_sound()](change_sound().md)
or to stop it with [stop_sound()](stop_sound().md).

---------------------------------------
See: [load_pcm/wav()](load_pcm()_forward_slash_load_wav().md) - [change_sound()](change_sound().md) - [stop_sound()](stop_sound().md)

