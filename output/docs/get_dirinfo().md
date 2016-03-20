**get_dirinfo(**&lt;mask of directory&gt;**,** &lt;types of file&gt;**)**

### Returns

Number of files of the directory which coincides with the mask and the
type selected.

### Description

This function allows you to obtain a list of the files in a directory (folder).

The **&lt;mask of directory&gt;** is required to select the type of files
which must be listed. This **&lt;mask&gt;** is just a name of a partial file
using jokers; for example, the mask **&quot;*.*&quot;** (must be indicated as a text
between quotation marks) will select every file in the directory.

You can also include in the mask, the **path** of the directory (if no path is defined
the files of the current directory will be listed). 
For example, the mask **&quot;C:\WINDOWS\SYS*.??E&quot;** will select every file of the
directory **&quot;C:\WINDOWS&quot;** whose name starts with **&quot;SYS&quot;** and whose extension finishes
with **&quot;E&quot;**.

As a second parameter the **&lt;types of files&gt;** must be indicated which are to
be included in the list, this will be one of the following:

** _normal** - To list just the normal files.

** _hidden** - To include also all hidden files.

** _system** - To include also the system files.

** _subdir** - To include also the subdirectories.

** _volid**  - To list just the label of the volume.


The most common choice is to indicate **_normal** as the **&lt;type of files&gt;**, this type
covers most files, including read-only files, file files and read/write files 
(only some special files are excluded, which typically are internal system files).

If **_hidden**, **_system** or **_subdir** is indicated in this parameter, these types of files
will be included as well as the normal files (it's not necessary to specify **_normal**).
Also, you can select more than one of these types; for example, indicating **_hidden+_system**
will list every normal file, as well as every hidden and system file.

When {_volid) is indicated, just the name of the volume label of the disk
will be listed, no file or subdirectory will be listed (you can't add other types to this).

---------------------------------------


The function **get_dirinfo()** simply returns the **total number** of listed files;
the names of these files are saved in the global structure
[dirinfo](global_struct_dirinfo.md) (the first name of the file is saved in **dirinfo.name[0]**, the
second in **dirinfo.name[1]**, etc.).

The **total number** of listed files which this function returns is saved
in **dirinfo.files**.

The list of file names is always saved in alphabetic order, but the function
[qsort()](qsort().md) can be used to order the global structure [dirinfo](global_struct_dirinfo.md) 
with any other criteria.

---------------------------------------


This function just allows you to obtain the **names** of the files, to
obtain further information about them (the attributes, the size, the data,
etc.) the function [get_fileinfo()](get_fileinfo().md) must be used.

### Example program
```
PROGRAM example_get_dirinfo;

GLOBAL
    counter;

BEGIN
    write(0,0,0,0,"List of files - Press ESC to finish");

    get_dirinfo("C:\WINDOWS\*.EXE",_normal); // Obtains the list of files

    FOR (counter=0;counter<dirinfo.files;counter++)
       x=(counter%4)*80;
       y=16+(counter/4)*8;
       write(0,x,y,0,dirinfo.name[counter]);
    END

    REPEAT
        FRAME;
    UNTIL (key(_esc));
END
```


This example program lists every normal **EXE** file of the directory
C:\WINDOWS, and then shows them on screen.

The loop [FOR](for_statement.md) is the one that shows on screen the list of the
files of the structure [dirinfo](global_struct_dirinfo.md) in four columns, as otherwise the function
**get_dirinfo()** doesn't show any information on screen, it just fills up the
structure [dirinfo](global_struct_dirinfo.md) with the names of the files found in the directory.

---------------------------------------


To open or create a file the function [fopen()](fopen().md) can be used.

To change the directory, you must use the function [chdir()](chdir().md), and
[mkdir()](mkdir().md) to create a new directory.

The function [disk_free()](disk_free().md) allows you to find out the free disk space on a drive.

---------------------------------------
See: [get_fileinfo()](get_fileinfo().md) - [fopen()](fopen().md) - [chdir()](chdir().md) - [mkdir()](mkdir().md) - [disk_free()](disk_free().md)

