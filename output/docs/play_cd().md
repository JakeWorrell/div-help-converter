**play_cd(**&lt;number of track&gt;**,** &lt;mode&gt;**)**

### Description

Starts playing a cd-audio track. The track number (from 1 to the number of songs contained on the cd)
must be indicated. The way to do it is as follows:

**Mode.**

 **0** - Play the song and then stop.

 **1** - Play this song and then the following ones.


### Example program
```
PROGRAM example_play_cd;
BEGIN
    write(0, 160, 0, 1, "Press [SPACE] to turn the CD on.");
    LOOP
        IF (scan_code==_space)

            play_cd(1, 1); // It plays the 1st. song followed by all remaining tracks.

        END
        FRAME;
    END
END
```


In the previous example (for which it is necessary to have a music **Compact disc** inside
the **CD-ROM** device) an information message is displayed and in every iteration of the loop
it is checked whether the spacebar was pressed to play the first song with the **play_cd()** function.

---------------------------------------


To have a song indefinitely playing, a loop must be implemented, using 
the [is_playing_cd()](is_playing_cd().md) function to determine when the song is over.

The cd-audio reproduction volume can be controlled with the [setup](global_struct_setup.md) structure and the
[set_volume()](set_volume().md) function.

---------------------------------------
See: [is_playing_cd()](is_playing_cd().md) - [stop_cd()](stop_cd().md) - [set_volume()](set_volume().md) - [Setup structure](global_struct_setup.md)

