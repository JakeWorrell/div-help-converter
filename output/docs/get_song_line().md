**get_song_line(****)**

### Returns

The line number of the musical module.

### Description

The line number of a musical module playing can be obtained With this function.

This current position, or pattern, can be obtained with the function
[get_song_pos()](get_song_pos().md).

Inside each pattern the modules have a determined number of lines
(normally 64), in which appear musical notes. The modules
often have a different number of patterns, although the average is between 30 and 40.

### Example program
```
PROGRAM example_get_song_line;

GLOBAL
    id_song;
    line_module;

BEGIN
    load_song("help/help.xm",1);
    song(id_song);
    write(0,0,0,0,"Line of module:");
    write_int(0,0,10,0,OFFSET line_module);
    LOOP

        line_module=get_song_line(); // Obtain the number of line

        FRAME;
    END
END
```


This program loads the module contained in the file **help.xm** and then
initiates its playback with the function [song()](song().md).

From this moment the current line of the module is shown on screen,
obtained with the function **get_song_line()**.

---------------------------------------


### Note The line of a musical module Cannot be set, although it is possible to fix
the position where playback begins with the function [set_song_pos()](set_song_pos().md)
(always will begin from the line 0 of the pattern).

---------------------------------------
See: #219,get_song_pos()} - [set_song_pos()](set_song_pos().md) - [song()](song().md)

