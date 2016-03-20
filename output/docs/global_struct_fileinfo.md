**STRUCT fileinfo;**

    **string fullpath[254];** // Full name

    **drive;**                // Drive letter

    **string dir[254];**      // Directory

    **string name[7];**       // Name

    **string ext[3];**        // Extension

    **size;**                 // Size (in bytes)

    **day;**                  // Day

    **month;**                // Month

    **year;**                 // Year

    **hour;**                 // Hour

    **min;**                  // Minute

    **sec;**                  // Second

    **attrib;**               // Attributes

**END**


This global predefined structure is used as the return value of the function
[get_fileinfo()](get_fileinfo().md), to contain the attributes of a file (or subdirectory).

It is a one register structure, which groups different strings of text (data of 
type [STRING](data_of_type_string.md)) and numeric variables (data of type [INT](data_of_type_int.md)).

---------------------------------------


**Below is a detailed description of each field is shown**

**fullpath** - Full name (including the path). The file path can be specified completely (beginning with
the root directory of the drive, such as &quot;C:\WINDOWS\...&quot;) or relative to the current directory
(starting from where the game executes, such as &quot;MAP\MIOS\...&quot;).
In all cases, **fileinfo.fullpath** always returns the full path
from the root directory, including the drive letter.

---------------------------------------


**drive** - Drive disk where the file is situated.
The drive disk is returned not as its corresponding letter, but as a number, 
establishing the following correspondence: **1** for ### A, **2** for **B**:, **3** for ### C, etc.

---------------------------------------


**dir** - The directory where the file is situated. This string not only returns 
the name of the folder or directory where the file is, but also the full path,
beginning with the current directory and listing all the directories in the path (for example &quot;\DIV\MAP\&quot;)
relative to the directory of the program executable. 
The return value always has an inverted bar (\) at the beginning and at the end.

---------------------------------------


**name** - the filename, this field (**fileinfo.name**), returns the
name of the file, without its suffix/extension, up to a maximum of **8 characters**.

---------------------------------------


**ext** - Extension of the file. The extension of the file is returned in this field, 
in a string which includes the point which separates the filename from its extension.

---------------------------------------


**size** - file size, this value will be **0** if the information refers to a directory. 
The size returns as a number of simple data, this means, as a multiple of data like 
[INT](data_of_type_int.md) (number of bytes in multiples of four (4,8,12,16 etc...)). It is possible to 
change this relationship by modifying the global variable [unit_size](global_unit_size.md)).

---------------------------------------


**day** - Day of the month of the last actualisation of the file.

**month** - Month of the last actualisation of the file.

**year** - Year of the last actualisation of the file.

**hour** - Hour of the last actualisation (from **0** to **23**).

**min** - Minute of the hour.

**sec** - Second of the minute.

---------------------------------------


**attrib** - Attributes of the file, they indicate the characteristics of the
file, if it is a system file, a read-only file, an archive file ,etc. 
This value is the sum of the following constants:

  **0** - Normal file.

  **1** - Read-only file.

  **2** - file archive.

  **4** - System file.

  **8** - Volume Label.

 **16** - Subdirectory.

 **32** - file speed.


For example, for a system and archive file, the value of **fileinfo.attrib**
would be **6** (2 archive + 4 system).

---------------------------------------
See: [global data](predefined_global_data.md) - [get_fileinfo()](get_fileinfo().md)

