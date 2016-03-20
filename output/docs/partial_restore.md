Constant: **partial_restore**
---------------------------------------


This constant is used to be assigned to the predefined [restore_type](global_restore_type.md) global variable used to define the type of restoration that must be applied to the screen background after each game frame.
Its value is** 0**.

The name **background restoration** deals with the operation of restoring the screen areas in which graphics have been painted or texts have been written in the previous frame. That is to say, to delete both the painted graphics and the written texts. 

The following statement must be used to establish this value:

  **restore_type=partial_restore;**

This statement indicates to the manager of processes of DIV Games
Studio that, after the following game frames **only the screen areas in which graphics have been painted or texts have been written must be restored**.

This mode of restoration (**partial_restore**) is faster than a complete restoration (option by default), but it must only be applied in games, or in their sections, in which **there ISN'T a scroll or mode 7 window occupying the whole screen**.

The three types of restoration that can be applied correspond with the following three constants:

[no_restore](no_restore.md)       - The fastest; it doesn't restore the background

**partial_restore**  - Average, partial restorations

[complete_restore](complete_restore.md) - The slowest one, complete restoration


---------------------------------------
See: [Constants](constants_predefined.md) - [restore_type](global_restore_type.md)

