**restore_type=complete_restore;** // Restoring type---------------------------------------
.

This global variable indicates the restoring type that must be performed after each frame on screen.

The term **background restoring** means to recover the screen zones in which graphics have been painted or texts have been written in the previous frame. 

There are three applicable restoring types which directly correspond to three constants that can be assigned to the **restore_type** variable.

[no_restore](no_restore.md)       - The fastest one, the background is not restored (-1)

[partial_restore](partial_restore.md)  - Average, partial restoring (0)

[complete_restore](complete_restore.md) - The slowest one, complete restoring (1)


By default, the value of **restore_type** equals **complete_restore**. If a different value is not indicated in this variable, a complete screen restoring will take place after each frame of the game.

This restoring mode (complete) is the slowest one out of these three modes. Thus, it will surely be possible to gain speed in the game's execution (for it to be faster in slow computers), if a different value is assigned to this variable.
For instance, the following statement must be used to indicate a partial restoring:

  **restore_type=partial_restore;**

This statements orders the process' manager of DIV Games
Studio to partially restore the screen background (only those screen zones where graphics or texts have been put) after the following frames of the game.

The **no_restore** type (not restoring the screen background) is the fastest mode. However, it is only applicable when the game develops inside a scroll or mode 7 window occupying the entire screen. Otherwise, the graphics will leave signs (of the previous frames) on moving through the screen.

The restoring mode can be changed under a program's execution as often as necessary, according to the requirements of the stages (or sections) under execution at each moment.

---------------------------------------


### Note There is another global variable also related to DIV
Games Studio's management on screen. This is called [dump_type](global_dump_type.md) and it defines the 
type of frames **dump** that must be performed (what information
must be sent to the monitor after every frame of the game).

---------------------------------------
See: [Global data](predefined_global_data.md) - [dump_type](global_dump_type.md)

