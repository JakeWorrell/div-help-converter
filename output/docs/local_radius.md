**radius;** // Radius (width) of the mode 8 processes ---------------------------------------


This predefined variable is [LOCAL](declaration_of_local_datadot.md), that means that each
process will have their own value in its variable **radius**.

This local variable is used exclusively in mode 8  processes (which have assigned 
[c_m8](c_m8.md) to [ctype](local_ctype.md)).

**radius** indicates the radius, or horizontal size, of the process.
The system requires this value to calculate any collisions with the limits outlining 
the borders of the sectors of the three-dimensional map.

The smaller the value of **radius** is for a process, the nearer it can be to its walls 
and, therefore, the bigger the pixels (or texel) of its textures will be.

---------------------------------------


### Note For more information about mode 8 windows, see the global structure
[m8](global_struct_m8.md) and the function [start_mode8()](start_mode8().md), which is used to initiate regions of this type.

---------------------------------------
See: [local data](predefined_local_data.md) - [start_mode8()](start_mode8().md)

