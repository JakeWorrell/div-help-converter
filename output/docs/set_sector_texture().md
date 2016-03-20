**set_sector_texture(**&lt;number of sector&gt;**,** &lt;ground texture&gt;**,** &lt;ceiling texture&gt;**,** &lt;luminosity&gt;**)**

### Description

Modifies the **textures of ground and ceiling** of a mode 8 sector. The following
parameters are required:

**&lt;number of sector&gt;** - Number of the map sector for which textures are to be
modified. This number can be obtained from the three-dimensional maps editor,
as is explained in the user's manual of the program.

**&lt;ground texture&gt;** - The code of the new texture graphic to be used as the 
**ground texture** of the sector (ie: the number of the graphic
inside of the FPG which contains every texture of the mode 8 region). If a ** -1** is
indicated as parameter the current texture will remain (to modify just
the ceiling texture).

**&lt;ceiling texture&gt;** - The code of the new texture graphic to be used as the 
**ceiling texture** of the sector (ie: the number of the graphic
inside of the FPG which contains every texture of the mode 8). If a ** -1** is
indicated as parameter the current texture will remain (to modify just
the ground texture).

**&lt;luminosity&gt;** - Luminosity of the texture, from **0** (ambience colour, which
is normally black) up to **15** (texture with the original colours).
If a ** -1** is indicated, the current level of luminosity in the sector will remain
unchanged.

---------------------------------------


### Note every texture must be contained in the same file FPG,
this is the file which is loaded with [load_fpg()](load_fpg().md) function and which number is
given as the parameter of the function [load_wld()](load_wld().md).

---------------------------------------


### Example program
```
PROGRAM example_set_sector_texture;

GLOBAL
    texture=94;

BEGIN
    load_fpg("help/WLD_VIEW.FPG");
    load_wld("help/WLD_VIEW.WLD",0);
    start_mode8(id,0,0);
    ctype=c_m8;
    go_to_flag(1);
    FRAME;
    z+=128;
    m8.angle=-64;
    LOOP
        IF (texture++==103) texture=94; END

        set_sector_texture(255,texture,-1,15);

        FRAME;
    END
END
```


This small example starts a mode 8 region, loading the map
**wld_view.wld**, which is placed at the predetermined coordinates with
the function [go_to_flag()](go_to_flag().md).

Then, inside of the program main loop, the ground texture of the sector
**255** is set with the function **set_sector_texture()**.

---------------------------------------


The function [get_sector_texture()](get_sector_texture().md) allows one to find the textures
(and luminosity) that are assigned to a mode 8 sector.

The function [set_wall_texture()](set_wall_texture().md) allows you to establish the texture of a wall.

---------------------------------------
See: [get_sector_texture()](get_sector_texture().md) - [set_wall_texture()](set_wall_texture().md) - [set_sector_height()](set_sector_height().md)

