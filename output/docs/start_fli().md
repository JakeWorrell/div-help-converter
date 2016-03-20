**start_fli(**&lt;name of the file&gt;**,** &lt;x&gt;**,** &lt;y&gt;**)**

### Returns

The animation's number of frames.

### Description

Starts a **FLI/FLC** animation contained in the specified **file**, in the
coordinates (**x**, **y**) (the upper left coordinate of the display window
must be specified).

The path can be specified in the &lt;file name&gt;. The path is not necessary if the file is in the DIV Games Studio directory or in a subdirectory whose name coincides with file extension (for instance, &quot;fli\anima.fli&quot;).

The screen must hold the whole animation. That is to say, if the animation
occupies the whole screen, the videomode must be fixed at first with the
[set_mode()](set_mode().md) function, starting then the animation at the (0, 0) coordinate with the **start_fli()** function.

For your information, the function returns the number of frames that the whole animation comprises.

The system will automatically activate the colour palettes that the **FLI/FLC** animation could have. This can cause problems dealing with the representation
of other graphics or fonts of the program, if they had been drawn with a different palette.

If the aim is to combine other graphics with animation on-screen, the latter must have just one colour palette (which is normally called &quot;**palette low FLI/FLC**&quot;)
and the graphics must have been drawn with that same palette.

Once the animation has started, its frames will gradually be shown with respective calls to [frame_fli()](frame_fli().md).

**It is possible to have but one active animation at every time**. Therefore, after having started an animation with **start_fli()** and having been displayed with [frame_fli()](frame_fli().md), this animation must finish with the [end_fli()](end_fli().md) function before starting another different animation.

### Example program:}
PROGRAM example_start_fli;
BEGIN

    start_fli(&quot;help/help.fli&quot;, 0, 0); // An animation begins.

    LOOP
        frame_fli();
        FRAME;
    END
END
**-**

In the example an animation which is inside of the file **help/help.fli** begins with
the function **start_fli()** in the coordinates (0, 0) and the animation
is played indefinitely.

---------------------------------------


The [frame_fli()](frame_fli().md) function, used to show every frame, will return 0 when the animation is over. Therefore, to show the animation just one time you should have done as follows:

{#9999,Example program
```
PROGRAM example_start_fli;

PRIVATE
    fli_frames;

BEGIN
    start_fli("help/help.fli", 0, 0);
    REPEAT
        fli_frames=frame_fli();
        FRAME;
    UNTIL (fli_frames==0);
    end_fli();
END
```


The [reset_fli()](reset_fli().md) function allows us **to rewind** the animation, so that the [frame_fli()](frame_fli().md) function continues to execute it from the beginning.

---------------------------------------
See: [end_fli()](end_fli().md) - [reset_fli()](reset_fli().md) - [frame_fli()](frame_fli().md)

