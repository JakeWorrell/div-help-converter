**m8_sector;** // Number of sector in where the process is---------------------------------------


This predefined variable is [LOCAL](declaration_of_local_datadot.md), that means that each
process will have its own value in its variable **m8_sector**.

This local variable is used exclusively in mode 8  processes 
(which have assigned the value [c_m8](c_m8.md) to [ctype](local_ctype.md)).

In **m8_sector** the system automatically saves the number of
the sector over which the process is situated, inside the map.

The information about the sector number can be useful to program events
where a process enters the specific sector.

---------------------------------------


### Note For more information about mode 8, see the global structure
[m8](global_struct_m8.md) and the function [start_mode8()](start_mode8().md), which is used to
initiate regions of this type.

---------------------------------------
See: [local data](predefined_local_data.md) - [start_mode8()](start_mode8().md)

