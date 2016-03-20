**set_fog(**&lt;Initial position&gt;**,** &lt;Final position&gt;**)**

### Description

Modifies the fog of a mode 8 region initiated with the function [start_mode8()](start_mode8().md),
to do this, the following parameters are required:

**&lt;Initial position&gt;** - Percentage or initial distance of the fog (from 0 to 100),
in this way, the point from which the effect is applied is determined.

**&lt;Final position&gt;** - Percentage or final distance of the fog (from 0 to 100),
in this way, the point from which the fog is solid/completely opaque is determined.

Normally the position or final percentage is established as the double
of the initial, the further apart the values are, the more slowly the fog
will appear.

### Example program
```
PROGRAM example_set_fog;

GLOBAL
    fogpos;
    angle1;

BEGIN
  load_fpg("help/WLD_VIEW.FPG");
  load_wld("help/WLD_VIEW.WLD",0);
  start_mode8(id,0,0);
  ctype=c_m8;
  go_to_flag(0);
  FRAME;
  z+=128;
  LOOP
      fogpos=25+get_distx(angle1,20);
       angle1+=5000;

      set_fog(fogpos,fogpos*2); // Establishes the fog level of the mode 8

      FRAME;
  END
END
```


This small example shows how the function **set_fog()** must be called 
to modify the fog of a mode 8 region.

The variable **position** varies from **5** to **45** (using the function
[get_distx()](get_distx().md)), this will be the initial position, the final one
will be fixed as double the initial one.

---------------------------------------


### Note The function [set_env_color()](set_env_color().md) allows you to fix the ambience colour
or the fog colour of a mode 8 region.

---------------------------------------
See: [set_env_color()](set_env_color().md) - [start_mode8()](start_mode8().md) - [STRUCT m8](global_struct_m8.md)

