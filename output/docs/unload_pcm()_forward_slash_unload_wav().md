**unload_pcm(**&lt;sound code&gt;**)**

**unload_wav(**&lt;code of the sound&gt;**)**

### Description

Unloads the sound whose code is passed as a parameter from the memory.
This &lt;sound code&gt; is the value returned by the [load_pcm()](load_fpg().md) or [load_wav()](load_fpg().md) function when a new sound effect is loaded in the memory.

After having unloaded a sound effect, **much care must be taken** not to go on using in the program this effect (its code) for the [sound()](sound().md) or **unload_pcm()** functions. Otherwise, the program could become blocked.

**It is not necessary to unload the sound from the memory** before finishing the program, as the system will do it automatically.

Therefore, a sound must be unloaded from the memory only when it is not going to be used for a while and when the aim is to free up space occupied in the computer's memory to load other resources (other graphics files, sounds, fonts, etc.), which will be logical just with sound effects of a certain length, in other words big enough so as to be worth freeing up the space they occupy.

### Example program
```
PROGRAM example_unload_pcm;

PRIVATE
    sound1;

BEGIN
    sound1=load_pcm("help/help.pcm",0);
    write(0, 160, 0, 1, "Press [ENTER] to unload the sound and finish");
    REPEAT
        FRAME;
    UNTIL (key(_enter));

    unload_pcm(sound1); // The sound is unloaded.

END
```


The example loads the sound effect stored in the **help.pcm** file
with the [load_pcm()](load_pcm()_forward_slash_load_wav().md) function, storing the **sound code** in the
**sound1** private variable.

The program will remain in a loop until the ENTER key is pressed. At that moment, the file will be unloaded from the memory with **unload_pcm()** and the program will finish.

---------------------------------------


The [stop_sound()](stop_sound().md) function must be used to stop a sound effect, but keeping it in the memory in order to be played again when desired.

---------------------------------------
See: [load_pcm/wav()](load_pcm()_forward_slash_load_wav().md) - [sound()](sound().md) - [change_sound()](change_sound().md) - [stop_sound()](stop_sound().md)

