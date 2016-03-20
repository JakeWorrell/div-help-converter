**set_env_color(**&lt;% red&gt;**,** &lt;% green&gt;**,** &lt;% blue&gt;**)**

### Description

Modifies the colour of the ambience or fog of a mode 8 sector, to do this 
the components **&lt;red&gt;** (red), **&lt;green&gt;** (green) and **&lt;blue&gt;** (blue) of the 
sector are required.

The three components must be specified as percentage, from **0** to **100**.

By default, the fog is set as a black colour (0,0,0), but this colour can
be modified to create a different ambience.

### Example program
```
PROGRAM example_set_env_colour;

GLOBAL
    light;
    angle1;

BEGIN
  load_fpg("help/WLD_VIEW.FPG");
  load_wld("help/WLD_VIEW.WLD",0);
  start_mode8(id,0,0);
  ctype=c_m8;
  go_to_flag(0);
  FRAME;
  set_fog(30,90);
  z+=128;
  LOOP
      light=50+get_distx(angle1,50);
      angle1+=5000;

      set_env_color(light,light,light); // establishes the ambience colour

      FRAME;
  END
END
```


This small example shows how the function **set_env_color()** must be called 
to modify the fog colour of a mode 8 region.

The variable **light** varies from **0** to **100** (using the function [get_distx()](get_distx().md)), 
this percentage is the same for the three components of the colour, so this will
gradually change from **black** to **white**, going through all the grey scale in between.

---------------------------------------


### Note The function [set_fog()](set_fog().md) allows you to fix the density of the fog or ambience
of a mode 8 region.

---------------------------------------
See: [set_fog()](set_fog().md) - [start_mode8()](start_mode8().md) - [STRUCT m8](global_struct_m8.md)

