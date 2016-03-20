**set_sector_height(**&lt;number of sector&gt;**,** &lt;height of the ground&gt;**,** &lt;height of the ceiling&gt;**)**

### Description

Modifies the height of the **ground** or **ceiling** of a mode 8 sector. The following
parameters are required:

**&lt;number of sector&gt;** - Number of sector of the map for which the height is wished
to be modified. This number can be obtained from three-dimensional maps editor,
as explained in the user's manual.

**&lt;height of the ground&gt;** - The new sector height of the ground must be indicated
(a value from 0 to 4096), if ** -1** is indicated as the parameter, 
the current sector height of the ground will remain (useful to ascertain the
height of the ground).

**&lt;height of the ceiling&gt;** - The new sector height of the ceiling must be indicated
(a value from 0 to 4096), if ** -1** is indicated as the parameter, the current sector 
height of the ceiling will remain (useful to ascertain the height of the ceiling).

To start a mode 8 region, the function [start_mode8()](start_mode8().md) must be called.

---------------------------------------


### Note If the height of the ceiling is the same as the ground's height this
sector won't be accessible (if this one is inside of another, it will appear as a
column). The height of the ceiling must be smaller than the height of the ground.

---------------------------------------


### Example program
```
PROGRAM example_set_sector_height;

GLOBAL
    sector=255;
    altitude;
    angle1;

BEGIN
    load_fpg("help/WLD_VIEW.FPG");
    load_wld("help/WLD_VIEW.WLD",0);
    start_mode8(id,0,0);
    ctype=c_m8;
    go_to_flag(1);
    FRAME;
    z+=64;
    LOOP
        altitude=1000+get_distx(angle1,64);
        angle1+=5000;

        set_sector_height(sector,altitude,-1);

        FRAME;
    END
END
```


This small example starts a mode 8 region, loading the map
**wld_view.wld**, and places it at the predetermined coordinates with
the function [go_to_flag()](go_to_flag().md).

Then, inside of the program main loop, the height of the ground of the
sector **255** is fixed with the function **set_sector_height()**.

---------------------------------------


The function [get_sector_height()](get_sector_height().md) allows you to find the ground
and ceiling heights in a mode 8 sector.

---------------------------------------
See: [get_sector_height()](get_sector_height().md) - [start_mode8()](start_mode8().md) - [STRUCT m8](global_struct_m8.md)

