**unload_fnt(**&lt;font code&gt;**)**

### Description

Unloads from the memory the **font** (the **kind of letter** or the **set of graphic characters**) whose code is passed as a parameter.

This &lt;font code&gt; is the value returned by the [load_fnt()](load_fnt().md) function by 
loading a new letter font stored in a **file FNT** in the computer's memory.

After having unloaded a font, **much care must be taken** not to go on using this font in the program. Otherwise, the program could crash.

**It is not necessary to unload the font** before finishing the 
program, as the system will do it automatically.

Then, a font must be unloaded from the memory only when it is not going to be used for a specific time and when the aim is to free up the occupied space in the computer's memory to load other resources (other graphics files, sounds, fonts, etc.).  

### Example program
```
PROGRAM example_unload_fnt;

PRIVATE
    font1;

BEGIN
    font1=load_fnt("help/help.fnt");
    write(font1, 160, 0, 1, "FONT LOADED FROM DISK");
    write(0, 160, 190, 1, "Press [ENTER] to unload the font and finish");
    REPEAT
        FRAME;
    UNTIL (key(_enter));

    unload_fnt(font1); // The font is unloaded
END
```


In the example, the font stored in the **help.fnt** file is loaded with the [load_fnt()](load_fnt().md) function, storing the **font code** returned by it in the **font1** private variable.

This code is later used as a parameter of the [write()](write().md) function
to put a text on screen with that font.

Then, the program will wait in a loop for the ENTER key to be pressed. At that moment the font will be unloaded by using the **unload_fnt()** function and the program will finish.

---------------------------------------


Font number 0, (the system font having 0 as font code),
**can not be unloaded**.

---------------------------------------
See: [load_fnt()](load_fnt().md) - [write()](write().md) - [write_int()](write_int().md)

