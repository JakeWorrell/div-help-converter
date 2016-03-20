Constant: **no_restore**
---------------------------------------


This constant is used to be assigned to the predefined [restore_type](global_restore_type.md) global variable used to define the type of restoration that must be applied to the screen background after each game frame.
Its value is** -1**.

The name **background restoration** deals with the operation of restoring the screen areas in which graphics have been painted or texts have been written in the previous frame. That is to say, to delete both the painted graphics and the written texts.

The following statement must be used to establish this value:

  **restore_type=no_restore;**

This statement indicates to the manager of processes of DIV Games
Studio that, after the following game frames {it is not necessary
to restore the screen background}.

If the background is not restored,**speed will be gained** in the execution of the game (that will go faster in slow computers). But this mode of restoration (**no_restore**) can only be applied in games or in their sections in which **there is a scroll or mode 7 window occupying the whole screen**.

The three types of restoration that can be applied correspond with the following three constants:

**no_restore**       - The fastest; it doesn't restore the background

[partial_restore](partial_restore.md)  - Average, partial restorations

[complete_restore](complete_restore.md) - The slowest one, complete restoration


---------------------------------------
See: [Constants](constants_predefined.md) - [restore_type](global_restore_type.md)

