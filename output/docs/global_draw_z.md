**draw_z=-255;** // plane of depth of the primitive graphics ---------------------------------------


The **primitive graphics** are such things as straight lines, rectangles, circles,
etc., which are painted with the function [draw()](draw().md).

In this global variable the plane of depth in which the primitive graphic must appear
on screen is indicated, this means what must appear in front and what must appear behind
on screen.

The plane of depth can be any whole number inside the range ([min_int](min_int.md) ... [max_int](max_int.md)), 
the bigger the number the more to the background the frame will be situated .

The process' graphics have their [local z](local_z.md) variable set to **0** by default, 
the texts [text_z](global_text_z.md) are set to ** -256** and the mouse pointer has its z - value
[mouse.z](global_struct_mouse.md) set to ** -512** by default.

This means, that by default, if these values are not modified,
the primitive graphic will appear in front of the processes, but behind the mouse pointer 
and the texts.

---------------------------------------


### Note 1 The variable **draw_z** is [GLOBAL](declaration_of_global_datadot.md) for all primitive graphics, in other words, 
they cannot be represented in different planes.

---------------------------------------
See: [global data](predefined_global_data.md) - [draw()](draw().md)

