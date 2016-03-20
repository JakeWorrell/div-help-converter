**ctype=c_screen;** // System of coordinates---------------------------------------
.

This is a predefined [LOCAL](declaration_of_local_datadot.md) variable, which means that each process will have its own value in its  **ctype** variable.

The **system of coordinates** used by the process is indicated in this variable. 

It is possible to use three different systems of coordinates, directly corresponding with three constants that can be assigned to the **ctype** variable.

  [c_screen](c_screen.md) - Screen coordinates

  [c_scroll](c_scroll.md) - Scroll coordinates

  [c_m7](c_m7.md)     - Mode 7 coordinates

  [c_m8](c_m8.md)     - Mode 8 coordinates



**By default, the ctype value is** [c_screen](c_screen.md), used for the process' graphic coordinates to be interpreted as referred to the screen, where the upper left corner is (0, 0).

With the following statement, [c_scroll](c_scroll.md) will be assigned to **ctype**:

 **ctype=c_scroll;**

For the process' graphic coordinates to be interpreted as referred to a scroll window, with coordinates located above the foreground's graphic.

With the following statement, [c_m7](c_m7.md) will be assigned to **ctype**:

 **ctype=c_m7;**

For the process graphic coordinates to be interpreted as referred to a mode 7 window, with coordinates located above the main graphic, three-dimensionally folded in that window.

[c_m8](c_m8.md) will be assigned to **ctype** with the following statement:

 **ctype=c_m8;**

For the coordinates of the process graphic to be interpreted as referred 
a mode 8 window, with coordinates located above the main graphic, three-dimensionally 
folded in that window.

---------------------------------------


### Note There is another local variable that also affects the way in which the process coordinates must be interpreted, This variable is [resolution](local_resolution.md), which establishes the resolution (scale) in which the coordinates are defined.

---------------------------------------
See: [Local data](predefined_local_data.md) - [c_screen](c_screen.md) - [c_scroll](c_scroll.md) - [c_m7](c_m7.md) - [c_m8](c_m8.md)

