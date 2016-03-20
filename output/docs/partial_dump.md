Constant: **partial_dump**
---------------------------------------


This  constant is used to be assigned to the predefined
[dump_type](global_dump_type.md) global variable used to define the type of dump that will be performed on screen. Its value is **0**.

The following statement is used:

  **dump_type=partial_dump;**

This statement indicates to the manager of processes of DIV Games that the following dumps must be **partial**.

**Dump** is the name given to the system of sending the game frames to the monitor (to the video memory of the graphics card).

There are two types of dumps:

**Partial**: Only the graphics that are updated and that have varied with regard to the previous frame will be dumped on screen. It is advisable to activate this dump in order **to gain speed** when programming a game (or a section of it) without a scroll or mode 7 window occupying the whole screen. That is to say, either when the game shows graphics movements against a fixed  background or when the active scroll or mode 7 windows are smaller that the screen.

**Complete**: All the screen will be dumped, irrespective of whether the graphics have changed or not. This is the dump by default and it is **slower that the partial dump**. However, the complete dump must be used when the game has a scroll or mode 7 window occupying the whole screen.

---------------------------------------


The other constant used to designate the type of dump is [complete_dump](complete_dump.md) which, unlike this one, defines a **complete** dump.

---------------------------------------
See: [Constants](constants_predefined.md) - [dump_type](global_dump_type.md) - [complete_dump](complete_dump.md)

