**set_song_pos(**&lt;position of the module&gt;**)**

### Description

Fixes the position of the music module playback (the &quot;pattern&quot; number).

This **&lt;position of the module&gt;** is a number between 0 and the max number of
**pattern** of the module. This value varies for each module, and can be defined in the
programs used to compose them. The modules usually have quite a variable number of 
patterns, though the average is usually situated between 30 and 40.

Inside each pattern, the modules have a determined number of lines
(normally 64), in which appear the musical notes, so each pattern could be
defined as a small section of the music module.

To obtain the current position which is being played back the function
[get_song_pos()](get_song_pos().md) is used.

The position of the module can be changed if the module is playing or has stopped.
This function can be used to advance or to retard the playback of the module,
to implement diverse loops in certain parts of a module, etc.

### Example program
```
PROGRAM example_set_song_pos;

GLOBAL
    id_song;
    position_module;

BEGIN
    load_song("help/help.xm",1);
    song(id_song);
    write(0,0,0,0,"Press SPACE to change the position of the module ...");
    write(0,0,20,0,"position:");
    write_int(0,0,30,0,OFFSET position_module);
    LOOP
        IF (key(_space))
            position_module=rand(0,19);

            set_song_pos(position_module); // Changes the position of the module

        END
        position_module=get_song_pos();
        FRAME;
    END
END
```


This program loads the module contained in the file **help.xm** and then
starts its playback with the function [song()](song().md).

&gt;From this moment the current position of the module will be shown on screen
and it can be changed by pressing the space bar (a random position will be assigned
between 0 and 19, because this module has 20 patterns).

---------------------------------------


### Note The playback line of a module can't be set (inside
each pattern), but the value can be obtained with the function [get_song_line()](get_song_line().md).

---------------------------------------
See: [get_song_pos()](get_song_pos().md) - [song()](song().md) - [load_song()](load_song().md)

