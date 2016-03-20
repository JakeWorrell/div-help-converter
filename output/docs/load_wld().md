**load_wld(**&lt;Archive number&gt;**,** &lt;file&gt;**)**

### Description

It loads a **mode 8 map** in a program. These maps are saved in the files
with the extension WLD, and are created with the map's 3D menu (in the user's manual
can be found further information on how to construct these maps).

The parameters required are the **&lt;name of file&gt;** which contains the map in
WLD format, and the code of the **&lt;file&gt;** which contains the file's textures.
This file with the textures of the map needs to be previously loaded in 
the program with the function [load_fpg()](load_fpg().md).

Once the map is loaded, a region of mode 8 screen must be initiated with
the function [start_mode8()](start_mode8().md). The functioning is quite similar to the mode 7
which shows a graphic in a folded plane (see [start_mode7()](start_mode7().md)).

### Example program
```
PROGRAM example_load_wld;

GLOBAL
    fpgfile;

BEGIN
  set_mode(m640x480);
  set_fps(70,0);
  fpgfile = load_fpg("help/WLD_VIEW.FPG");

  load_wld("help/WLD_VIEW.WLD",file); // Loads a file WLD

  start_mode8(id,0,0);
  ctype=c_m8;
  height=64;
  radius=64;
  m8.height=32;
  go_to_flag(0);
  LOOP
    IF (key(_right)) angle-=5000; END
    IF (key(_left))  angle+=5000; END
    IF (key(_up))    advance(24); END
    IF (key(_down))  advance(-9); END
    IF (key(_q))     z+=16;       END
    IF (key(_a))     z-=16;       END
    IF (key(_w))     m8.angle+=8; END
    IF (key(_s))     m8.angle-=8; END
    FRAME;
  END
END
```


This program shows an initiation example of a mode 8 region,
loading the map contained in the file **wld_view.prg**, and whose texture is
found in the file **wld_view.fpg**.

---------------------------------------
See: [start_mode8()](start_mode8().md) - [go_to_flag()](go_to_flag().md) - [load_fpg()](load_fpg().md)

