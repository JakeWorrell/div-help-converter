**go_to_flag(**&lt;number of flags&gt;**)**

### Description

Places a process in a mode 8 region in a position indicated by a flag, the process
 calling  the function is the one placed in that position, 
the only parameter needed is the **&lt;number of flag&gt;**, as a mode 8 region can
have more than one predefined flag position.

After the function has been called, in the next [FRAME](frame_statement.md) the process will be placed
at the flag coordinates. The height of the flag will always be understood
to be the minimum height of the sector where it is going to be found.

The flags are placed in the editor of the three-dimensional maps, control
of which is explained in the user's manual.

### Note This function is equivalent to giving the process the coordinates
a flag (**x**,**y**,**z**). 

### Example program
```
PROGRAM example_go_to_flag;

BEGIN
  load_fpg("help/WLD_VIEW.FPG");
  load_wld("help/WLD_VIEW.WLD",0);
  start_mode8(id,0,0);
  ctype=c_m8;

  go_to_flag(0); // Places the process camera at flag 0

  LOOP
      FRAME;
  END
END
```


This example program initialises a mode 8 region, loading the map contained in the
**wld_view.prg** file using the [load_wld()](load_wld().md) function, and starts a region 
with [start_mode8()](start_mode8().md).

Then, it places the process (which acts as the camera of the window) in the
position indicated by the flag number 0 of the map sector.

---------------------------------------
See: [start_mode8()](start_mode8().md) - [STRUCT m8](global_struct_m8.md) - [load_wld()](load_wld().md)

