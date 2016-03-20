**STRUCT mouse;**

    **x, y;**                // Coordinates

    **graph;**               // Graphic code

    **file;**                // File code

    **z;**                   // Depth plane

    **angle;**               // angle

    **size;**                // Size (%)

    **flags;**               // Mirrors indicator

    **region;**              // Clipping region

    **left, middle, right;** // State of buttons

    **cursor;**              // Emulation with cursors

    **speed;**               // Speed of mouse


**END**


This global structure is used to control the mouse. It contains a series of fields related to the programming of this driver, such as the screen position, the pointer graphic, the state of the buttons, etc.

In order to access these fields, the name of the field must be preceded by the word **mouse**  and by the symbol [. (period)](dot__minusgt.md). For instance, in order to
access the field **x** (horizontal coordinate of the mouse pointer), it is necessary to use **mouse.x**.

---------------------------------------


**x**, **y** - Horizontal and vertical coordinates of the mouse. It will be necessary to read only these two fields (**mouse.x** and **mouse.y**) to know the position of the mouse cursor on screen.

To **locate the mouse at other coordinates** (to force its position),
suffice will be to assign the new coordinates to these two fields.

---------------------------------------


**graph** - **Graphic code** assigned as a mouse pointer. By default **the mouse won't be visible**. To make it visible, it is necessary to create the graphic that is going to be used as a pointer in the **graphic editor**, to load it in the program (with the [load_fpg()](load_fpg().md) or [load_map()](load_map()_forward_slash_load_pcx().md)  or [load_pcx()](load_map()_forward_slash_load_pcx().md) functions, depending on whether this graphic has been stored in a **file FPG** or in an **file MAP/PCX**) and finally, to assign its **graphic code** to this variable (**mouse.graph**). Then, the mouse pointer will be seen on screen.

The centre of the graphic will appear at the **mouse.x**, **mouse.y** coordinates, unless its [control point](control_pointsdot.md) number **0** has been defined in the **graphic editor**. If this point (usually called **hot spot**) is defined, then it will appear at the coordinates indicated in the fields **mouse.x** and **mouse.y**.

For instance, if an arrow is created to depict the mouse pointer (as it happens dealing with the mouse pointer of DIV Games Studio), the hot spot (control point number **0**) will be defined in the upper left corner of the graphic, as it is the **active point** inside the graphic. Then, when the mouse was located
at the (0, 0) coordinates, for instance, the &quot;**tip of this arrow**&quot; would precisely be located at those coordinates

---------------------------------------


**file** - **File code** containing the graphic. The **file code** containing the graphic of the mouse pointer is defined in this field.
**It is not necessary** to indicate a value here if the graphic was loaded from an
**file MAP or PCX**, or if it is stored in the first **file FPG** loaded in the program. Otherwise, **mouse.file** will have to be assigned the **file code** that returned the [load_fpg()](load_fpg().md) function on loading the file that contains the graphic of the mouse pointer.

---------------------------------------


**z** - Priority of the graphic display. Indicates the depth plane in which the graphic of the mouse pointer must be displayed. **By default** this field will be equal to** -512**, which implies that **the pointer will be seen above the rest of graphics and texts**. The bigger this field is, the deeper the mouse pointer will be located.

If the aim was to make a graphic of a process appear above the mouse pointer,  suffice would be to assign an integer lesser than** -512** 
(for instance,** -600**) to the [local z](local_z.md) variable of that process.

---------------------------------------


**angle** - angle with which the graphic of the mouse pointer will be seen.
The value of **mouse.angle** by default is **0**, which implies that this graphic won't be seen rotated, unless a new angle is assigned to this field.

Keep in mind that the angles must be specified in degree thousandths. For instance, the **mouse.angle=90000;** statement will make the pointer appear rotated **90 degrees** (see the [use of angles in the language](use_of_angles_in_the_languagedot.md)).

---------------------------------------


**size** - Size of the graphic in percentage. By default, this field will be equal to **100** (the graphic will be seen 100%). Then, it is not necessary to indicate another value here, unless the aim is to scale the graphic (to display it expanded or reduced).

If, for instance, the aim was to double the original size of the graphic (being displayed at 200%), the **mouse.size=200;** statement should be used.

---------------------------------------


**flags** - In this field, different values will be indicated when the aim is to
mirror the graphic of the mouse (horizontally or vertically inverted), or to display it as a (semi) transparent graphic. The possible values that can be assigned to the **mouse.flags** are the following ones:

 **0**-Normal graphic (value by default).

 **1**-Horizontal mirror.

 **2**-Vertical mirror.

 **3**-Horizontal and vertical mirror (180&deg;).

 **4**-Transparent graphic.

 **5**-Transparent and horizontal mirror.

 **6**-Transparent and vertical mirror.

 **7**-Transparent, horizontal and vertical mirror.


---------------------------------------


**region** - Graphic's clipping region. A value must be assigned to this field **just when the aim is to make the mouse pointer visible only inside a region** (a rectangular zone of the screen). In order to achieve it, it is necessary first to
define this region with the [define_region()](define_region().md) function and then, to assign the number of the region that has been defined to this field (**mouse.region**).

By default, this value will be equal to **0**, that is a number of region referred to the entire screen. Therefore, the graphic will be seen on the whole screen.

---------------------------------------


**left**, **middle** and **right** - These three fields store logical values (**0** or **1**) depending on whether the mouse buttons are pressed or not (they correspond with the left, central and right mouse buttons). Normally, only two buttons of the mouse (**left** and **right**) are activated, being ignored the state of the central button. This depends on the mouse **driver** installed in the computer.

For instance, to perform an action in a program **when the mouse left button is pressed** (**mouse.left**), it is necessary to include the following statement in the code:

  **IF (mouse.left)**

    // Action to perform (statements)

  **END**


**cursor** - indicates if the mouse emulator is active with the **Cursors** and **Enter** keys, 
you can move the pointer with the mouse or with the cursors. By default,
this emulation will be deactivated (**mouse.cursor=0;**). If the
program doesn't detect a mouse connected to the system, the emulation automatically in this case
will be activated (this means, that if **mouse.cursor** values are **1** at the beginning of the program, 
then there is no mouse connected to the pc).

---------------------------------------


**speed** - it is now possible to regulate the speed at which the mouse pointer functions in the programs. 
This is a value between **0** (maximum speed) and **9** (minimum), by default **mouse.speed** will have the value **2**.


---------------------------------------
See: [Global data](predefined_global_data.md)

