**set_mode(**&lt;new video mode&gt;**)**

### Description

Establishes a new video mode for the game execution. The allowed videomodes that may be specified as a parameter are the following ones:

  **m320x200**  - VGA standard

  **m320x240**  - X Mode

  **m320x400**  - X Mode

  **m360x240**  - X Mode

  **m360x360**  - X Mode

  **m376x282**  - X Mode

  **m640x400**  - SVGA VESA

  **m640x480**  - SVGA VESA

  **m800x600**  - SVGA VESA

  **m1024x768** - SVGA VESA


When a change of the videomode in the program is made, a fading to black (of the program's colours palette) will automatically be performed and in the following displays, the colours palette will gradually be restored. That is to say, **set_mode()** always performs a [fade_off()](fade_off().md) just before changing the videomode and a [fade_on()](fade_on().md) just after having changed it.

By default, all the programs start with the 320 by 200 pixel activated mode (**set_mode(m320x200)**).

### Example program
```
PROGRAM example_set_mode;

PRIVATE
    modes[]=
        m320x240, m640x480, m800x600, m1024x768;
    videomode=0;

BEGIN
    load_fpg("help/help.fpg");
    write (0, 0, 0, 0, "Press [SPACE] to change the videomode");
    LOOP
        IF (scan_code==_space)
            videomode=videomode+1;
            IF (videomode==4) videomode=0; END

            set_mode(modes[videomode]);

        END
        FRAME;
    END
END
```


In the example, a screen background and an explanatory text are displayed.

In the iteration of the main loop, if the space bar is pressed, a new videomode will be activated with the **set_mode()** function.

---------------------------------------


### Important By using the **set_mode()** function, all the scroll and mode 7 windows that were activated in the game, as well as all the processes displayed inside them, will be deleted.

---------------------------------------
See: [set_fps()](set_fps().md) - [max_process_time](global_max_process_time.md) - [m320x200 ... m1024x768](videomodes.md) - [STRUCT video_modes](global_struct_video_modes.md)

