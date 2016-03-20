Constant: **complete_restore**
---------------------------------------


This constant is used to be assigned to the predefined [restore_type](global_restore_type.md) global variable used to define the type of restoration that must be applied to the screen background after each game frame.
Its value is** 1**.

The name **background restoration** deals with the operation of restoring the screen areas in which graphics have been painted or texts have been written in the previous frame. That is to say, to delete both the painted graphics and the written texts. 

**This is the value by default of the** [restore_type](global_restore_type.md) **variable** and,
it is the **slowest** mode of the three available restoration modes.
The following statement must be used to establish this value:

  **restore_type=complete_restore;**

This statement indicates to the manager of processes of DIV Games
Studio that, after the following game's frames **the screen background must completely be restored**.

This mode of restoration (**complete_restore**) is the slowest one (and it is the option by default). Therefore, it can be changed by another one in order **to gain speed** in the execution of the game (so it will go faster in slow computers). 

As a matter of fact, this mode of restoration is only interesting for games (or for their sections) that **DON'T have** a scroll or mode 7 window occupying the whole screen, but that have a great number of graphics moving through the screen.

The three types of restoration that can be applied correspond with the following three constants:

[no_restore](no_restore.md)       - The fastest; it doesn't restore the background

[partial_restore](partial_restore.md)  - Average, partial restorations

**complete_restore** - The slowest one, complete restoration


---------------------------------------
See: [Constants](constants_predefined.md) - [restore_type](global_restore_type.md)

