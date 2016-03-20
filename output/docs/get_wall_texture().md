**get_wall_texture(**&lt;number of wall&gt;**,** &lt;OFFSET texture&gt;**,** &lt;OFFSET luminosity&gt;**)**

### Returns

The **luminosity and the texture** of a mode 8 wall (in the variables
which [offset](offset.md) are indicated in the parameters).

### Description

This function allows you to determine inside of a program, what the texture
and the luminosity is of a determined wall, inside of a mode 8.

To do this, the **&lt;number of wall&gt;** is required, and the [OFFSET](offset.md) (pointer)
of the variables where the result will be stored.

### Example program
```
PROGRAM example_get_wall_texture;

GLOBAL
    texture;
    luminosity;

BEGIN
    load_fpg("help/WLD_VIEW.FPG");
    load_wld("help/WLD_VIEW.WLD",0);
    // ...

    // Obtains the luminosity and texture of a wall

    get_wall_texture(255,OFFSET texture,OFFSET luminosity);

    // ...
END
```


This small example shows how the function **get_wall_texture()** must be called 
to obtain the texture and the luminosity of a wall in a sector (in this case, the variables
**texture** and **luminosity** are assigned to the wall number **255**).

---------------------------------------


The function [set_wall_texture()](set_wall_texture().md) allows you to establish the texture and luminosity
of a mode 8 wall dynamically.

The function [get_sector_texture()](get_sector_texture().md) lets us know which are the floor
and ceiling textures of a mode 8 sector.

---------------------------------------
See: [set_wall_texture()](set_wall_texture().md) - [get_sector_texture()](get_sector_texture().md)

