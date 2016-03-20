**get_sector_height(**&lt;number of sector&gt;**,** &lt;OFFSET ground&gt;**,** &lt;OFFSET ceiling&gt;**)**

### Returns

The **height of the ground and ceiling** of a mode 8 sector (in the variables which
[offset](offset.md) are indicated as the two last parameters).

### Description

This function allows you to determine in a program, the height of the ground
and ceiling of a determined sector, inside of a mode 8 sector.

To do this, the **&lt;number of sector&gt;** is required , and the [OFFSET](offset.md) (address
of memory) of the two variables where the result will be returned.

This information also can be obtained inside of the editor of three-dimensional maps
as explained in the user's manual.

### Example program
```
PROGRAM example_get_sector_height;

GLOBAL
    ceiling_height;
    floor_height;

BEGIN
    load_fpg("help/WLD_VIEW.FPG");
    load_wld("help/WLD_VIEW.WLD",0);
    // ...

    // Obtain the heights of a sector

    get_sector_height(255,OFFSET floor_height,OFFSET ceiling_height);

    // ...
END
```


This small example shows how the function **get_sector_height()** must be called
to obtain the heights of a sector (in this case, in the variables **ceiling_height**
and **floor_height** these values are obtained for the sector number **255**).

---------------------------------------


To establish the height of a sector, the function [set_sector_height()](set_sector_height().md) must
be used.

---------------------------------------
See: [set_sector_height()](set_sector_height().md) - [start_mode8()](start_mode8().md) - [STRUCT m8](global_struct_m8.md)

