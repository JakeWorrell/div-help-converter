**refresh_scroll(**&lt;number of scroll&gt;**)**

### Description

This function is used when a graphic that is being used as a **background of a scroll region** has been modified with the [map_put()](map_put().md), [map_xput()](map_xput().md), [map_block_copy()](map_block_copy().md) or [map_put_pixel()](map_put_pixel().md) functions, in order to update it.

The parameter required by the function is the &lt;scroll number&gt; that was specified when the scroll started with the [start_scroll()](start_scroll().md) function.

When a graphic that is being used as background of a scroll is modified, it is not automatically updated on the screen. On the contrary, it is necessary to call this function for that purpose.

Once the graphic has been modified, it will remain like this during the rest of the program execution, unless the graphic is unloaded from the memory (with [unload_fpg()](unload_fpg().md), 
[unload_map()](unload_map()_forward_slash_unload_pcx().md) or [unload_pcx()](unload_map()_forward_slash_unload_pcx().md) functions) and loaded again. In this case, the original state of the graphic will be restored.


### Example program
```
PROGRAM example_refresh_scroll;

BEGIN
    load_fpg("help/help.fpg");
    start_scroll(0, 0, 103, 102, 0, 15);
    scroll.camera=id;
    write(0, 160, 192, 7, "Press [ENTER] to put a graphic in the scroll.");
    write(0, 160, 200, 7, "Press [SPACE] to update scroll.");
    LOOP
        IF (scan_code==_enter)
           map_put(0, 103, 100, rand(16, 48), rand(16, 48));
        END
        IF (scan_code==_space)

            refresh_scroll(0); // We refresh the scroll 0.

        END
        x+=2;
        y+=1;
        FRAME;
    END
END
```


In the example, a scroll (number 0) is created as a scroll of two planes:
the foreground with graphic number 103 and the background with graphic number 102.

Inside the main loop, a ball will be displayed over graphic 103 (foreground of the scroll)
when the ENTER key is pressed. But it won't appear on-screen, unless we await until the
scroll gradually appears on-screen (with graphic 103 already modified), or until the spacebar
is pressed. In this case, the call to the **refresh_scroll()** function will update the scroll
window with the graphic already modified.

If, in the previous example, the **refresh_scroll()** function had been called just after
the [map_put()](map_put().md) one, the graphics displayed on the foreground would instantaneously
appear by pressing the spacebar.

In the example, every time that a ball is displayed, many of them appear. The reason for
this is that graphic 103 used as a foreground in the scroll
is a small graphic and it is shown on many occasions tile, to fill all the scroll zone.

---------------------------------------


### Note It can be noticed that, if the displaying graphic is at some coordinates out
of the screen, it won't be necessary to call this function, because the parts of the
scroll that are gradually appearing on-screen are automatically refreshed.

---------------------------------------
See: [start_scroll()](start_scroll().md) - [move_scroll()](move_scroll().md) - [Structure scroll](global_struct_scroll.md)

