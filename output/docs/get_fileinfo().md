**get_fileinfo(**&lt;name of the file&gt;**)**

### Returns

**0** - Can't obtain any information about the file.

**1** - The information about the file was saved correctly.


### Description

Obtains information about a file or directory on the disk, for which,
the function requires the **&lt;name of the file&gt;** as a parameter (between quotation
marks). You can either just indicate the filename, or include the path to
the file as well.

If the function finds the file in the specified directory (or in
the current one, in the case of no directory being specified), it will return back
the value **1** and will save all information about the file in the global structure
[fileinfo](global_struct_fileinfo.md), which contains the following fields:

** fullpath** - Complete name (including the path).

** drive**    - Disk drive (1-A:, 2-B:, 3-C:, ...).

** dir**      - Directory of the file.

** name**     - Name of the file.

** ext**      - Extension of the file.

** size**     - Size (in simple data, see [drive_size](global_unit_size.md)).

** day**      - Day (data of the last access).

** month**    - Month (data of the last access).

** year**     - Year (data of the last access).

** hour**     - Hour (hour of the last access).

** min**      - Minute (hour of the last access).

** sec**      - Second (hour of the last access).

** attrib**   - Attributes of the file.


The path to the file can be completely specified (from the
main directory of the drive, as &quot;C:\WINDOWS\...&quot;) or relative to the current 
directory (from which the game is executed, like &quot;MAP\MIOS\...&quot;).
Anyhow, the complete path from the main directory will always be stored in 
**fileinfo.fullpath**, including the drive letter of the disk.

---------------------------------------


The function **get_fileinfo()** just obtains information about a file,
to obtain the complete list of files in a directory, the function
[get_dirinfo()](get_dirinfo().md) must be used.

### Example program
```
PROGRAM example_get_fileinfo;
BEGIN
    // ...

    get_fileinfo("help/HELP.FPG");

    // ...
END
```


This small example asks for information about the file **help.fpg**
contained in the directory **help**. It can be extracted and traced (with **F12**)
to see how, after the call to the function, the global structure
predefined as [fileinfo](global_struct_dirinfo.md) has been filled up with information concerning 
the file.

---------------------------------------


To open or create a file the function [fopen()](fopen().md) can be used,
and to delete a file from the drive the function [remove()](remove().md) can be used.

The function [disk_free()](disk_free().md) allows you to ascertain the free disk space
of any drive.

---------------------------------------
See: [get_dirinfo()](get_dirinfo().md) - [fopen()](fopen().md) - [remove()](remove().md) - [disk_free()](disk_free().md)

