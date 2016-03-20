**get_song_pos(****)**

### Returns

The current position of the musical module which is being played.

### Description

Returns the current position of playback of the musical module, this
position can be set with the function [set_song_pos()](set_song_pos().md).

This **&lt;position of the module&gt;** is a number between 0 and the max number of
**pattern** of the module. This value is different for each module, and is defined
in the programs used to compose them. The modules can have any variable number of
patterns, although the average is between 30 and 40.

Inside each pattern the modules have a determined number of lines
(normally 64), in which appear the musical notes, therefore
each pattern can be defined as a small section of the musical module.

### Example program
```
PROGRAM example_get_song_pos;

GLOBAL
    id_song;
    position_module;

BEGIN
    load_song("help/help.xm",1);
    song(id_song);
    write(0,0,0,0,"Position of the module:");
    write_int(0,0,10,0,OFFSET position_module);
    LOOP

        position_module=get_song_pos(); // Obtain the position

        FRAME;
    END
END
```


This program loads the module contained in the file **help.xm** and then
initiates its playback with the function [song()](song().md).

&gt;From this moment the current position of the module on screen will be shown,
obtained with the function **get_song_pos()**.

---------------------------------------


### Note the line number which is played back Can be obtained, inside the pattern,
with the function [get_song_line()](get_song_line().md).

---------------------------------------
See: [get_song_line()](get_song_line().md) - [set_song_pos()](set_song_pos().md) - [song()](song().md)

