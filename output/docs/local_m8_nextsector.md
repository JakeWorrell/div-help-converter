**m8_nextsector;** // Sector the process is directed towards---------------------------------------


This predefined variable is [LOCAL](declaration_of_local_datadot.md), that means that each
process has its own value in its **m8_nextsector** variable.

This local variable is used exclusively in mode 8  processes 
(which have assigned the value [c_m8](c_m8.md) to [ctype](local_ctype.md)).

In **m8_nextsector** the system automatically saves the
sector a process is directed towards. This means that, when the
process collides with one of the map walls (borders), the system checks 
to see if any other sectors exist beyond this boundary, and if so, will store 
its number in this variable.

This information can be useful, for example, to obtain the
heights at which this sector is situated (See [get_sector_height()](get_sector_height().md))
and, in this way, can check if the program must adjust its height, and by how much,
to proceed to the named sector.

---------------------------------------



### Note For more information about mode 8, see the global structure
[m8](global_struct_m8.md) and the function [start_mode8()](start_mode8().md), which is used to
initiate regions of this type.

---------------------------------------
See: [local data](predefined_local_data.md) - [start_mode8()](start_mode8().md)

