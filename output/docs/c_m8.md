constant: **c_m8**
---------------------------------------


This constant is used to assign to the predefined local variable [ctype](local_ctype.md) which 
serves to define the type and number of coordinates (dimensions) a process will have. 
Its value is set to **3**.

This value (3) is the value the variable [ctype](local_ctype.md) understands 
as meaning the graphic coordinates are contained in a mode 8 window, a three-dimensional 
sector map which the graphics are shown.

For more information about  **mode 8 windows**, you can access
the function [start_mode8()](start_mode8().md), used to activate them.

Other constants exist which are used for other coordinates systems,
here is the complete list :

    [c_screen](c_screen.md) - coordinates of screen

    [c_scroll](c_scroll.md) - coordinates of scroll

    [c_m7](c_m7.md)     - coordinates of mode 7

    **c_m8**            - coordinates of mode 8


---------------------------------------
See: [constants](constants_predefined.md) - [ctype](local_ctype.md) - [start_mode8()](start_mode8().md)

