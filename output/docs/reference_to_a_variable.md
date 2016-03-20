A reference to a variable is any expression making reference to a cell or a position of the computer's memory. It is normally understood as one of the following aspects:

- If the variable is a variable, in order to refer to the variable in this way, we must simply specify its name.

Example of a reference to a variable: **x**

- If the variable is a table, reference to it is normally made with its name followed by an expression in square brackets ([[ ]](pointer__[__].md)).That expression will determine the position of the table intended to be accessed.
If the index in square brackets is omitted, the first position of the table (position 0) will be accessed.

Example of a reference to a table: **timer[0]**

- If the variable is a structure, reference to it will be made with its name followed by an expression in square brackets ([[ ]](pointer__[__].md)) that will determine the number of records that will be accessed. After it, the symbol[ . (period)](dot__minusgt.md) will be put, preceding the specific name of the structure's field that is going to be accessed. If the record number in square brackets is omitted, the first record of the structure (number 0) will be accessed. 

Example of a reference to a structure: **scroll[0].z**

These three cases deal with accessing data of the process itself or global data. To access an alien variable (a local variable of another process), it will be preceded by the [identifying code](_identifying_codes_of_processesdot.md) of the alien process and the symbol[ . (period)](dot__minusgt.md), operator of access to local data and structures).

Example of a reference to an alien local variable: **father.x**

---------------------------------------
See: [Syntax](syntax_of_a_programdot.md)

