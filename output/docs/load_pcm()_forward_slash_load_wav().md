**load_pcm(**&lt;name of the file&gt;**,** &lt;loop&gt;**)**

**load_wav(**&lt;name of the file&gt;**,** &lt;loop&gt;**)**

### Returns

The **sound code** loaded.

### Description

Loads a PCM or WAV sound effect from disk. The filename must be specified as the first
parameter, and the second parameter **&lt;loop&gt;** replaced by either a **1** if the sound must
indefinitely be repeated (looped), or **0** if it should played only once (this 
refers to the sound when played using the [sound()](sound().md) function).

The function returns the **sound code** that is required by the [sound()](sound().md) function to
play the sound through a channel.

The path can be specified with the sound file. However, it is not necessary to do so if the
file resides in the same directory as the executable or the default sounds directory (**\PCM** or **\WAV**).

### Example program
```
PROGRAM example_load_pcm;

PRIVATE
    id_sound;

BEGIN

    id_sound = load_pcm("help/help.pcm", 0); // Loads a sound of the hard disk

    write(0, 160, 0, 1, "Press [SPACE] to play the sound.");
    LOOP
        IF (scan_code==_space)
            sound(id_sound, 100, 256);
        END
        FRAME;
    END
END
```


In this example, a sound is loaded with the **load_pcm()** function. Then,
every time the spacebar is pressed, that sound is played using the [sound()](sound().md)
function.

---------------------------------------


The [unload_pcm()](unload_pcm()_forward_slash_unload_wav().md) and [unload_wav()](unload_pcm()_forward_slash_unload_wav().md) functions allow us to free up the computer's
memory occupied by the sound when it is not going to be used any longer. For that, you require
the **sound code** in order to know which sound we want to unload from the memory.

**It is not necessary to unload the sound from memory** before finishing the program,
since the system will do it automatically.

---------------------------------------
See: [unload_pcm/wav()](unload_pcm()_forward_slash_unload_wav().md) - [sound()](sound().md) - [change_sound()](change_sound().md) - [Setup structure](global_struct_setup.md)

