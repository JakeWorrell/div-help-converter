**STRUCT m8[9];**

    **z;**      // Priority of impression

    **camera;** // Camera identifier

    **height;** // Camera height

    **angle;**  // Vertical angle

**END**


This structure of **10** registers contains certain fields concerning 
the modifiable parameters for **mode 8 windows **. The ten
registers have the same field names, but each one of them
modifies the parameters of a mode 8 window differently
(because up to 10 mode 8 windows can be activated).

A **mode 8 window** can be defined as a region of the screen which shows a three-dimensional
map of sectors.

For a register (from **0** to **9**) of the **structure m8** to have any sense or purpose,
you must first activated its corresponding **mode 8window** (from **0** to **9**) with the
function [start_mode8()](start_mode8().md) (see this function for more information about mode 8
windows}.

The fields of this structure are complementary to the call parameters for this last 
function. To see a practical example of a mode 8 window, you can look up help about 
the function [load_wld()](load_wld().md) or about [start_mode8()](start_mode8().md).

---------------------------------------


### form of use for an m8 structure 

To access these fields the name of the field must be preceded 
by the word **m8**, the register number in brackets and the symbol [. (full stop)](dot__minusgt.md).

For example, if two mode 8 windows are initiated, the number 0 and the number 1, 
you can access to the **camera** variable of both windows with the terminology
**m8[0].camera** and **m8[1].camera**, respectively. When you access mode 8 window number 0 
you can also omit the brackets around the window number, this means, that the variable 
**m8.camera** and the variable **m8[0].camera** are, to all purposes, the same.

---------------------------------------


**In continuation a detailed description of each field is shown**

**z** - priority of impression of the mode 8 window, where the plane of depth (layer)that this window 
must be painted in is indicated, with respect to the rest of the processes. By default, this
variable has the value **256** which means that, as processes by default have their [local z](local_z.md) variable 
set to layer **0**, the mode 8 window will be painted to a plane of further depth, or more to the background, 
with the processes' graphics being displayed in front of the window. To change this situation you can modify the
variable **z** of the window (for example change it to ** -1**) or the variable **z** of
processes (for example place it at **257**), then the process graphics will be hidden behind the window.

---------------------------------------


**camera** - [Identifier code of the process](_identifying_codes_of_processesdot.md) where the camera is situated. To move
the camera which controls the visible region of the mode 8, all you need to do is create a mode 8 process,
 in other words one which has its local variable [ctype](local_ctype.md) **=** [c_m8](c_m8.md), and put its
[identifier code](_identifying_codes_of_processesdot.md) in the **camera** variable of this structure.
Then, in order to move the camera's position you only need to modify the local variables [x](local_x.md), 
[y](local_y.md), [z](local_z.md) and [angle](local_angle.md) of this process and, for instance, use the function 
[advance()](advance().md) to move the camera forward.

---------------------------------------


**height** - camera height with respect to the process, by default this field
is initialised as **32**. The mode 8 process will be positioned on screen in its vertical
coordinate **z**, its local variable **height** determines the height of the main process, 
and the field (**m8.height**) determines the height of the camera (the user's viewpoint of the process 
with respect to its base).

---------------------------------------


**angle** - vertical angle of the camera, the value of this angle is between ** -128** and **128**.
It defines whether the camera is pointing upwards or downwards. When **m8.angle** values **0**,
which is the default value, the camera will be looking horizontally.

The horizontal angle will be the local variable **angle** of the main process
which is used as the window  camera (which identifier is contained in **m8.camera**).

---------------------------------------


See also these other **local variables** with respect to **mode 8**.

  [LOCAL radius](local_radius.md)

  [LOCAL m8_wall](local_m8_wall.md)

  [LOCAL m8_sector](local_m8_sector.md)

  [LOCAL m8_nextsector](local_m8_nextsector.md)

  [LOCAL m8_step](local_m8_step.md)


---------------------------------------
See: [global data](predefined_global_data.md) - [start_mode8()](start_mode8().md)

