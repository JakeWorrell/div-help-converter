**stop_mode8(**&lt;number of m8&gt;**)**

### Description

Eliminates the mode 8 window which number (from 0 to 9) is given as the parameter.
This &lt;number of m8&gt; is the one indicated as the first parameter in the function
[start_mode8()](start_mode8().md), it is necessary to define the mode 8 window number as there 
can be up to 10 different mode 8 windows, and the system needs to know which of them 
is being terminated.

---------------------------------------


### Note To create a mode 8 window is an advanced procedure and requires
some parameters to be set, as in this case the camera, some of them required
by the function [start_mode8()](start_mode8().md) and others are contained in the
[global m8 structure](global_struct_m8.md) (such as the variable **m8.camera**).

---------------------------------------


### Example program
```
PROGRAM example_stop_mode8;

BEGIN
  load_fpg("help/WLD_VIEW.FPG");
  load_wld("help/WLD_VIEW.WLD",0);
  start_mode8(id,0,0);
  ctype=c_m8;
  go_to_flag(0);
  write(0,0,0,0,"Press ESC to finish ...");
  REPEAT
      FRAME;
  UNTIL (key(_esc));

  stop_mode8(0); // Eliminates the region number 0 of mode 8

END
```


This program shows an initiation example of a mode 8 region,
loading the map contained in the file **wld_view.prg**, and starting a
region (the number **0**) with [start_mode8()](start_mode8().md) function.

This program waits in a loop until it detects the **ESC** key has been pressed,
at which point it leaves the loop and then eliminates this region with the **stop_mode8(0)** function.

---------------------------------------
See: [start_mode8()](start_mode8().md) - **1411,STRUCT m8** - [load_wld()](load_wld().md)

