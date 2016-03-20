**unit_size=4;** // Minimum unit of reading/writing---------------------------------------


The global predefined variable **unit_size** indicates the minimum
unit of reading and writing for the functions of files situated in **handles**.

By default it always has the value **4**, because 4 bytes is the unit size 
of the standard data [INT](data_of_type_int.md) (32 bit whole number), and each piece of  data 
has 4 bytes assigned in memory (see the [assignation of data in memory](adjustment_of_data_in_memory.md)).

The functions which count up the number of these **unit_size** blocks a variable contains 
are the following:

  [fread()](fread().md)

  [fwrite()](fwrite().md)

  [fseek()](fseek().md)

  [ftell()](ftell().md)

  [filelength()](filelength().md)


And also the field **size** of the global structure [fileinfo](global_struct_fileinfo.md).

---------------------------------------


The minimum size of 4 implies that it is impossible to write to or to read from any files
whose length is not a multiple of this number.

This size can be changed; for example assigning **1** to **unit_size** (with the
statement **unit_size=1;**). By doing this, all **lengths** of the
previous functions will be indicated in bytes (and not in units of data).

However, after changing the unit size, you must remember the following:

- [SIZEOF()](sizeof().md) will continue to return the data length (in units of 4 bytes).
For example, to save a table on the drive it will be not enough to indicate **sizeof(**&lt;table&gt;**)**
as its length, you will also need to multiply this value by 4 (if its **unit_size** is 
defined  as **1**).

- The functions of files [save()](save().md) and [load()](load().md) (which are not functions
based on the file **handles**) will continue to indicate file length in data.

- The functions of dynamic memory [malloc()](malloc().md) and [free()](free().md) also
will continue to work with the length in data, therefore adjustments must be made 
to cater for working with both groups of functions.

---------------------------------------
See: [global data](predefined_global_data.md) - [Alignment of data in memory](adjustment_of_data_in_memory.md)

