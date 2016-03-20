**STRUCT dirinfo;**

    **files;**      // Number of files in list

    **name[1024];** // File names

**END**


This global predefined structure is used as the return value of the function
[get_dirinfo()](get_dirinfo().md), to contain the list of files in a directory (or folder).

It consists of one structure register, which groups one variable
**files** and one table of pointers in the **text strings** (**name[]**).

---------------------------------------


**In continuation a detailed description of each field is shown**

**name[]** - The function [get_dirinfo()](get_dirinfo().md) only returns the **total number** of files listed;
the names of these files are saved in the global structure, in the table **name[]**
(the first name of file is saved in **dirinfo.name[0]**, the second in **dirinfo.name[1]**, etc.).

---------------------------------------


**files** - The **total number** of files listed which this function returns are also saved in this field 
(in **dirinfo.files**).

---------------------------------------


The list of file names are always saved in alphabetical order, the function [qsort()](qsort().md) 
can be used to order the structure by other criterion.

---------------------------------------
See: [global data](predefined_global_data.md) - [get_dirinfo()](get_dirinfo().md)

