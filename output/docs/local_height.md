**height=0;** // Graphic's height (in mode 7)---------------------------------------
.

This is a predefined [LOCAL](declaration_of_local_datadot.md) variable, which means that each process will have its own value in its **height** variable.

The local **height** variable is **exclusively** used in the processes that belong to
**mode 7 windows**. That is to say, processes that have their coordinates' system inside a three-dimensional window (its local variable [ctype](local_ctype.md)=[c_m7](c_m7.md)).

It is used to define the height at which the graphics of the processes must be placed above the three-dimensional plane. The [local z](local_z.md) variable is not used for this purpose, as it is used to define the depth plane of the graphics (even if it is now useful only for processes placed at the same coordinates).

The height of the process can be defined as any integer within the ([min_int](min_int.md) ... [max_int](max_int.md)) range, even if positive numbers are normally used, as the **height** of the bottom is **0** and processes are placed above it.

By default, the value of the **height** variable is **0** for all the processes, which means that if another value is not specified, the graphics of the processes will appear just above the bottom of the **mode 7** (above the plane three-dimensionally folded).

The **graphic's base** will first be placed in the indicated **height** of the process, unless [control point](control_pointsdot.md) number **0** is defined. In this case, this point will be placed in that height.

### Note For further information about the **mode 7 windows** and how to place graphics inside these windows, see the help about the [start_mode7()](start_mode7().md) function, which is used to activate them in the program.

---------------------------------------


This variable can be used for any other purpose in the non **mode 7** processes, as the system will completely ignore it.

---------------------------------------
See: [Local data](predefined_local_data.md) - [start_mode7()](start_mode7().md)

