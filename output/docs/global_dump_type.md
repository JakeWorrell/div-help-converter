**dump_type=complete_dump;** // Type of dump---------------------------------------


This global variable indicates the frame dump on screen types that must be performed in every frame of the game.

The term **dump** means that the game's frames are sent to the monitor (to the video memory of the graphic card).

---------------------------------------


There are two applicable types of dump which directly correspond with two constants that can be assigned to the **dump_type** variable.

[partial_dump](partial_dump.md) - When indicated with the following statement, **partial dumps** will be performed:

  **dump_type=partial_dump;**

Only the graphics that are updated, that have changed with respect to the previous frame, will be dumped on screen in this mode. It is advisable to activate this dump **in order to gain speed** when a game (or one section of it) is programmed without a scroll or mode 7 window occupying the entire screen. 

[complete_dump](complete_dump.md) - When indicated with the following statement, **complete dumps** will be performed:

  **dump_type=complete_dump;**

In this mode, the entire screen will be dumped no matter whether the graphics have changed or not. This mode is slower than the **partial dump**. Nevertheless, it must be used when the game has a scroll or mode 7 window occupying all the screen.

---------------------------------------


By default, the value of **dump_type** is **complete_dump**. If no other value is indicated in this variable, **complete dumps** on the screen will be performed after each game's frame (which is normally **slower** than performing partial dump).

The dump type can be changed during a program's execution as often as necessary, according to the requirements of the stages (or sections) under execution at each moment.

---------------------------------------


### Note There is another global variable also related to DIV
Games Studio's management on screen. This is called [restore_type](global_restore_type.md)  and it defines the type of **restoring** that must be performed on screen after every game's frame (which graphics or texts must be deleted).

---------------------------------------
See: [Global data](predefined_global_data.md) - [restore_type](global_restore_type.md)

