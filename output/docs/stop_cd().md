**stop_cd()**

### Description

Stops the CD-Audio reproduction, stopping the song which were playing.
The songs are reproduced with the function [play_cd()](play_cd().md).

### Example program
```
PROGRAM example_stop_cd;
BEGIN
    write(0, 160, 0, 1, "Press [ENTER] to turn on the CD.");
    write(0, 160, 10, 1, "Press [SPACE] to stop the CD.");
    LOOP
        IF (scan_code==_space)

            stop_cd(); // Para el CD

        END
        IF (scan_code==_enter)
            play_cd(2, 0);
        END
        FRAME;
    END
END
```


In the example are placed the necessary messages. In each step of the
loop, if the space bar is pressed, the CD will be stopped with the
function **stop_cd()**.

If the ENTER key is pressed, it will be turned on with the function
[play_cd()](play_cd().md).

The volume of reproduction of cd-audio can be controlled with the
[setup](global_struct_setup.md) structure and the function [set_volume()](set_volume().md).

---------------------------------------
See: [play_cd()](play_cd().md) - [is_play_cd()](is_playing_cd().md) - [set_volume()](set_volume().md) - [setup structure](global_struct_setup.md)

