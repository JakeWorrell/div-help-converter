**get_sector_texture(**&lt;number of sector&gt;**,** &lt;OFFSET ground texture&gt;**,** &lt;OFFSET ceiling texture&gt;**,** &lt;OFFSET luminosity&gt;**)**

### Returns

The **luminosity, and the textures of the ground and ceiling** of a mode 8 sector
(stored in the variables which [offset](offset.md) are indicated as the parameters).

### Description

This function allows you to determine which are the textures in a program 
for the ground and the ceiling and/or the luminosity of a determined sector, inside of a
mode 8 region.

To do this, the **&lt;number of sector&gt;** is required , and the [OFFSET](offset.md) (pointer) for the
variables where the results will be stored are also required.

### Example program
```
PROGRAM example_get_sector_texture;

GLOBAL
    ceiling_texture;
    floor_texture;
    luminosity;

BEGIN
    load_fpg("help/WLD_VIEW.FPG");
    load_wld("help/WLD_VIEW.WLD",0);
    // ...

    // Obtains the luminosity and textures of a sector

    get_sector_texture(255,OFFSET ceiling_texture,OFFSET floor_texture,OFFSET luminosity);

    // ...
END
```


This small example shows how the function **get_sector_texture()** must be called 
to obtain the textures and the luminosity of a sector (in this case, in the variables
**floor_texture**, **ceiling_texture** and **luminosity** these values are obtained for the
sector number **255**).

---------------------------------------


The function [set_sector_texture()](set_sector_texture().md) allows you to establish the textures and luminosity
of a mode 8 sector dynamically.

The function [get_wall_texture()](get_wall_texture().md) allows you to find what the assigned texture of a mode 8
wall is .

---------------------------------------
See: [set_sector_texture()](set_sector_texture().md) - [get_wall_texture()](get_wall_texture().md)

