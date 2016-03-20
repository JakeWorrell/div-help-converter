**m8_wall;** // Wall number of the sector map ---------------------------------------


This predefined variable is [LOCAL](declaration_of_local_datadot.md), that means that each
process will have its own value in its variable **m8_wall**.

This local variable is used exclusively in mode 8 processes 
(which have assigned the value [c_m8](c_m8.md) to [ctype](local_ctype.md)).

the system stores in the variable **m8_wall**, the number of the wall
the process has just collided against.

This information can be useful to detect distinct active zones
inside a map of sectors (such as ports, interrupts, etc.).

---------------------------------------


### Note For more information about mode 8, see the global structure
[m8](global_struct_m8.md) and the function [start_mode8()](start_mode8().md), which is used to
set up regions of this type.

---------------------------------------
See: [local data](predefined_local_data.md) - [start_mode8()](start_mode8().md)

