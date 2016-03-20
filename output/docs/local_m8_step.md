**m8_step;** // height to which can lift the process---------------------------------------


This predefined variable is [LOCAL](declaration_of_local_datadot.md), that means that each
process will have its own value in its variable **m8_step**.

This local variable is used exclusively in mode 8 processes 
(which have assigned the value [c_m8](c_m8.md) to [ctype](local_ctype.md)).

In **m8_step** the maximum height which the process can be raised to reach the sectors is given, 
as &quot;the height of step&quot; which this process can rise by.

When a process comes across a more elevated sector, the system
checks with help of this variable to see if the process can reach this elevated sector, 
if the answer is yes the new height of the process will be set automatically and, 
but in the contrary case, the process will stop (it will collide with the boundary that
separates both sectors).

---------------------------------------


### Note For more information about mode 8, see the global structure
[m8](global_struct_m8.md) and the function [start_mode8()](start_mode8().md), which is used to
initiate regions of this type.

---------------------------------------
See: [local data](predefined_local_data.md) - [start_mode8()](start_mode8().md)

