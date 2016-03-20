**set_wall_texture(**&lt;number of sector&gt;**,** &lt;texture&gt;**,** &lt;luminosity&gt;**)**

### Description

Modifies the **wall texture** of a mode 8 sector. The following parameters are
required:

**&lt;number of wall&gt;** - Number of the wall texture required. This number can
 be obtained in the three-dimensional maps editor,
as is explained in the user's manual of the program.

**&lt;texture&gt;** - The code of the graphic which is to be assigned as the new wall
texture (the number of the graphic inside of the FPG which contains every mode 8 texture) 
must be indicated. If a ** -1** is indicated as the parameter, the current texture will remain
unchanged.

**&lt;luminosity&gt;** - Luminosity of the texture, from **0** (ambience colour, which is
normally black) up to **15** (texture with the original colours).
If a ** -1** is indicated, the current level of luminosity will remain unchanged.

---------------------------------------


### Note every texture must be contained in the same file FPG,
this is the file which is loaded with [load_fpg()](load_fpg().md) and which number is given
as a parameter to the function [load_wld()](load_wld().md).

---------------------------------------


### Example program
```
PROGRAM example_set_wall_texture;

GLOBAL
    texture=104;

BEGIN
    load_fpg("help/WLD_VIEW.FPG");
    load_wld("help/WLD_VIEW.WLD",0);
    start_mode8(id,0,0);
    ctype=c_m8;
    go_to_flag(1);
    FRAME;
    z+=128;
    LOOP
        IF (texture++==113) texture=104; END

        set_wall_texture(511,texture,15); // Modifies a wall texture

        FRAME;
    END
END
```


This small example starts a mode 8 region, loading the map
**wld_view.wld**, and it is placed in the predetermined coordinates with the
function [go_to_flag()](go_to_flag().md).

Then, inside the program main loop, the texture of the wall number **511** 
is fixed with the function **set_wall_texture()**.

---------------------------------------


The function [get_wall_texture()](get_wall_texture().md) allows you to find the current texture
of a wall.

The function [set_sector_texture()](set_sector_texture().md) allows you to establish the {textures of
ground and ceiling} of a mode 8 sector.

---------------------------------------
See: [get_wall_texture()](get_wall_texture().md) - [set_sector_texture()](set_sector_texture().md) - [set_sector_height()](set_sector_height().md)

