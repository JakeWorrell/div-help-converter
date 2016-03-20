**stop_sound(**&lt;channel number&gt;**)**

### Description

Stops the sound that is being played through the channel, passed as a parameter.

The required &lt;channel number&gt; is the value returned by the [sound()](sound().md) function when the reproduction of a sound effect starts.

There are 16 sound channels. Thus, up to 16 sounds may simultaneously be played.

### Example program
```
PROGRAM example_stop_sound;

PRIVATE
    id_sound;
    channels;
    playing=FALSE;

BEGIN
    load_fpg("help/help.fpg");
    put_screen(0, 1);
    write(0, 160, 0, 1, "Press [SPACE] to start the reproduction.");
    write(0, 160, 10, 1, "Press [ENTER] to stop the sound channel.");
    id_sound = load_pcm("help/help.pcm", 1);
    LOOP
        IF (scan_code==_space AND NOT playing)
            channels = sound(id_sound, 128, 256);
            playing=TRUE;
        END
        IF (scan_code==_enter)

            stop_sound(channels); // The sounds stops playing

            playing=FALSE;
        END
        FRAME;
    END
END
```


In the example, a background graphic is put and the necessary messages are displayed. At the same time, the sound effect stored in the **help.pcm** file is loaded with the [load_pcm()](load_pcm()_forward_slash_load_wav().md) function, that returns the sound identifier that is stored in the **id_sound** variable. Notice that, in this example, **1** is passed to this function as a second parameter. That is done to indicate that the loaded sound effect must indefinitely be repeated every time it is initialised (stressing thus the effect of the **stop_sound()** function).

In every step of the loop, it is checked whether the spacebar is pressed. In this case, the reproduction of the sound effect will start with the [sound()](sound().md) function, which will return the channel number that will be stored in the **channel** variable.

If the ENTER key is pressed, the sound will be stopped with the **stop_sound()** function.

---------------------------------------


To gradually stop a sound, turning its volume down little by little, several calls to the [change_sound()](change_sound().md) function must be made to slightly reduce the channel volume until it reaches level 0. Then, the **stop_sound()** can be called to definitively stop the sound.

---------------------------------------
See: [sound()](sound().md) - [change_sound()](change_sound().md) - [load_pcm/wav()](load_pcm()_forward_slash_load_wav().md) - [unload_pcm/wav()](unload_pcm()_forward_slash_unload_wav().md)

