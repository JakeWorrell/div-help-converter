**change_sound(**&lt;channel&gt;**,** &lt;volume&gt;**,** &lt;frequency&gt;**)**

### Description

To use this function it is essential to have a sound card installed which is 100%
compatible with **Sound Blaster** (tm) or **Gravis Ultrasound** (tm)
and have the correct drivers installed.

This function only works if it is used after the [sound()](sound().md) function
is called, which is used to play sounds.

**Change_sound()** modifies one sound that is playing on one of the **channels**,
setting the **volume** and **frequency**.

The **channel** is the **channel code** that is returned by the [sound()](sound().md)
function.  You can play up to 16 channels at the same time, with the same sound
or with different sounds. Each time you play a sound it is quite possible that
it will be played through a different channel.

Each **channel** has its own levels of volume and frequency.

The **volume** is a value between **0** (minimum volume) and **512** (maximum volume)
which determines the noise level that the sound will be heard through this channel.

The **frequency** is a value that affects the speed of the sound through the
channel, it controls how deep or sharp the sound is emitted.
Valid values are between **0** (deep) and **512** (sharp).

### Example program
```
PROGRAM example_change_sound;

PRIVATE
    freq=256;     // Medium Value (0..512)
    vol=256;        // Medium Value (0..512)

    sound_id;
    chan;

BEGIN
    load_fpg("help/help.fpg");
    put_screen(0, 1);

    sound_id = load_pcm("help/help.pcm", 1);
    chan = sound(sound_id, vol, freq);

    write(0, 0, 0, 0, "Press right or left to change the frequency.");
    write_int(0, 0, 10, 0, offset freq);
    write(0, 0, 20, 0, "Press up or down to change the volume.");
    write_int(0, 0, 30, 0, offset vol);
    LOOP

        // Change the sound
        change_sound(chan, vol, freq);

        IF (key(_right)) freq++; END
        IF (key(_left)) freq--; END
        IF (key(_up)) vol++; END
        IF (key(_down)) vol--; END
        FRAME;
    END

END
```


In the example a sound **help.pcm** is loaded and played. Inside the main loop
of the program you can change the frequency and the volume of this sound using the
**change_sound()** function to modify these values using the cursor keys.

---------------------------------------
See: [load_pcm/wav()](load_pcm()_forward_slash_load_wav().md) - [sound()](sound().md) - [unload_pcm/wav()](unload_pcm()_forward_slash_unload_wav().md) - [STRUCT setup](global_struct_setup.md)

