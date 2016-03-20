**start_mode8(**&lt;camera identifier&gt;**,** &lt;number of m8&gt;**,** &lt;number of region&gt;**)**

### Description

This is an advanced function that requires the user to have a certain
amount of experience to use it.

It creates a window with a mode 8, which generates a three-dimensional map.
**First the map must be loaded with the [load_wld()](load_wld().md) function** and then,
the following parameters of this function need defining.

**&lt;camera identifier&gt;** - [Identifier code](_identifying_codes_of_processesdot.md) of the process
in which the mode 8 camera will be placed, the camera will be placed
at the coordinates **(x,y)**, at height **(z)** and looking in the indicated
direction  defined by **(angle)** (these are [local data predefined](predefined_local_data.md) for the
process).

**&lt;number of m8&gt;** - Up to 10 mode 8 windows can be created on screen, 
numbered from **0** to **9**; if just one is created, then define this as 
number **0**. This number will be needed to modify
the parameters of the window, because the system needs to know which one
of the **10** possible mode 8 windows you wish to modify.

**&lt;number of region&gt;** - Here will be indicated the rectangular region of the screen
where the mode 8 is going to be shown. If the number of the region indicated is **0** , 
it will be shown full screen. Other regions must be defined
previously with the function [define_region()](define_region().md) (a **region** is just a
rectangular zone of the screen).

### Note The functioning is very similar to the mode 7 which shows a folded plane 
(see [start_mode7()](start_mode7().md)).

---------------------------------------


**Apart from the call to the function, some values of the** [global m8 structure](global_struct_m8.md) 
must be initiated **for the window to function correctly**.
This is a structure of 10 registers (one for each possible mode 8 window)
and each register has the following fields:

  **camera**   - [Identifier code](_identifying_codes_of_processesdot.md) of the camera

  **height**   - Height of the camera in relation to the process

  **angle**    - Vertical angle of the camera (-128,128)

  **z**        - Plane of depth (priority of impression of the region)


The field **camera** is **essential**,as that is asked as one of the calling parameters
of the function **start_mode8()** because, without this field, the window can't determine 
the viewpoint from which the map will be initially viewed.

---------------------------------------


### Example program
```
PROGRAM example_start_mode8;

GLOBAL
    fpgfile;

BEGIN
  set_mode(m640x480);
  set_fps(70,0);
  fpgfile = load_fpg("help/WLD_VIEW.FPG");
  load_wld("help/WLD_VIEW.WLD",file);

  start_mode8(id,0,0); // Starts a mode 8 region

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


This program shows an initiation example of a mode 8 region, loading
the file **wld_view.prg**, and whose textures are found in the
file **wld_view.fpg**.

---------------------------------------


To create a process where a graphic is displayed in the mode 8 region, 
its local variable [ctype](local_ctype.md) must be defined as well as [c_m8](c_m8.md)
(**type of coordinate** as the **coordinate of mode 8**).

When a process is in a mode 8 region its variables [x](local_x.md) and [y](local_y.md)
will be related to the point inside of the map sector (WLD), and the variable
[z](local_z.md) will indicate the height.

If there are several **mode 8** windows, the process will by default be seen 
in all of them, if the process is wanted to be seen in just some of them, the local
variable [cnumber](local_cnumber.md) must be defined.

For a process to have many graphics (many views), depending on the
angle from which it is going to be viewed, you must define 
the local variable of the graphic [xgraph](local_xgraph.md) (instead of the variable [graph](local_graph.md)).

---------------------------------------


### Note To eliminate a mode 8 region you must be use the function
[stop_mode8()](stop_mode8().md), indicating the **number of m8**.

---------------------------------------
See: [STRUCT m8](global_struct_m8.md) - [load_wld()](load_wld().md) - [go_to_flag()](go_to_flag().md) - [stop_mode8()](stop_mode8().md)

