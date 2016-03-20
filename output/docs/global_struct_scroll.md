**STRUCT scroll[9];**

    **x0, y0;**    // Foreground's coordinates

    **x1, y1;**    // Background's coordinates

    **z;**         // Depth plane

    **camera;**    // [Identifying code](_identifying_codes_of_processesdot.md) of the camera

    **ratio;**     // Relative speed of the background

    **speed;**     // Maximum speed of the foreground

    **region1;**   // First screen region

    **region2;**   // Second screen region

**END**


This **10** record structure contains certain fields related to changeable parameters of the **scroll windows**. These ten records have the same field names, but each of them modifies the parameters of a different scroll window
(as up to 10 windows of this type can be activated).

A **scroll window** could be defined as a screen region that only shows a part of a graphic bigger than that window (this graphic is normally the **decor** or **background** of the game). The **scroll** is the movement of that window through the graphic in any direction, being displayed the entire graphic little by little, section by section.

For a record (from **0** to **9**) of the **scroll structure** to make sense,
that **scroll window** (from **0** to **9**) must first be activated with the
[start_scroll](start_scroll().md) function (for further information about the scroll windows, see this function}.

It is understood that the fields of this structure are complementary to those of the call parameters of this last function.

---------------------------------------


### How to use the scroll structure

To access these fields, the field name must be preceded by the word **scroll**, the record's number in square brackets and the symbol [.](dot__minusgt.md) (period).

For instance, if two scroll windows, number 0 and number 1, are initialised, it could be possible to access the **camera** field of both windows as
**scroll[0].camera** and **scroll[1].camera**, respectively. Moreover, when the scroll window number 0 is accessed, it is possible to omit the window's number in square brackets. That is to say, the **scroll.camera** and the **scroll[0].camera** variables are, to all intents and purposes, the same for the language.

---------------------------------------


**A detailed description of every field is now shown.**

**x0, y0** - Coordinates of the scroll's foreground, when the scroll **ISN'T** automatic (the **camera** field has not been defined), **These are the fields that will have to be modified in order to move the scroll window's foreground**.

These two fields store the horizontal and vertical coordinates of the upper left corner of the scroll window (the point of the foreground's graphic that will be seen in the window's upper left corner).

When the **camera** field of this structure has been defined, the movement of the scroll window will be automatic; thus, they are read-only fields. In order to check where the scroll is at every moment (see the [move_scroll()](move_scroll().md) function).

---------------------------------------


**x1, y1** - Background's coordinates, when a graphic for the background has been defined. When the scroll **ISN'T** automatic (the **camera** field has not been defined), **these are the fields to modify in order to move the background of the scroll window**.

When the **camera** field of this structure has been defined, the movement of the
scroll window will be automatic; thus, they will be read-only fields, and the definition of the background's movement speed will depend on the **ratio** field of the same structure.

---------------------------------------


**z** - Scroll display priority, to indicate the depth plane in which this window must be painted, with respect to the rest of processes. By default, this variable will equal **512**, which implies that, as the processes have their [local z](local_z.md) variable at **0** by default, the scroll window will be painted in a greater (deeper) depth plane, being the graphics of the processes displayed above the window. In order to vary this situation, it is possible to modify either the **z** window's variable (for instance, putting it at** -1**) or the **z** processes' variable (for instance, putting it at **600**).

---------------------------------------


**camera** - It is not necessary to initialise this field, as it will be initialised when the aim is that the scroll is **automatic**, that the system deals with it to always follow a process (a game's graphic). For that, it is necessary to put
the process' [identifying code](_identifying_codes_of_processesdot.md) in this field. Thus, the shift of the scroll window will pass to be controlled automatically by the system, always trying to centre the graphic of this process in the window. This process must have the [ctype](local_ctype.md) local variable with the value [c_scroll](c_scroll.md).

By default, this field will equal **0**, which implies that the scroll won't follow any process, unless the 
[identifying code](_identifying_codes_of_processesdot.md) of a process is assigned to **camera**. When it is done, this process will be known 
as the scroll's **camera process**.

### Note A series of fields are now shown **only for automatic scroll windows**. It means that for those fields to make sense (and, therefore, effect), the **camera** field of this structure has to be defined previously with the [identifying code](_identifying_codes_of_processesdot.md) of the process that is going to be centred in the scroll. These values will affect the way in which the process called **scroll camera** is going to be followed.

---------------------------------------


**ratio** - **Automatic scroll windows**. When two scroll planes have been defined in the call to the [start_scroll()](start_scroll().md) function, in this field it is possible to define the **movement speed of the background** with respect to that of the foreground. By default, this value will equal **200**, which implies that the background will move half the speed of the foreground; if it is defined as **400**, it will move at the fourth part (four times slower), **100** at the same speed, **50** at double speed of the foreground, etc.

---------------------------------------


**speed** - **Automatic scroll windows**. Maximum speed of the scroll foreground, which will equal **0** by default. It means that no speed limit is imposed. If a limit is imposed, specifying the maximum number of points that the foreground can be shifted for every game's frame, the **camera process** will be off centre in the scroll window when it is moved at a higher speed.

---------------------------------------


**region1** - **Automatic scroll windows**. Scroll lock region, whose value by default equals** -1**, which means that there is no lock region.
If this field is defined with a number of region (a rectangular zone of the screen previously defined with the [define_region()](define_region().md) function), then the system won't scroll as long as the **camera process** remained inside it.

---------------------------------------


**region2** - **Automatic scroll windows**. External region of the scroll. By default, its value is equal to** -1**, which means that there is no external region.
If this field is defined with a region's number and a **maximum speed** has been defined in the **speed** field, then the system will ignore that speed limit when the **camera** process is going to exceed from this region (it is done in order to continue to see the process (for its graphic to be visible always within the scroll window).

### Note If the two regions (**region1** and **region2**) are defined, region 1 is normally lesser than region 2 (the first one is contained in the second one). It will imply that:

- The background won't shift (the scroll won't be performed) while the camera process' graphic is inside region 1.

- If a maximum **speed** has been defined, then a scroll will be performed
to try to restore the graphic of the camera process to region 1, but without exceeding the imposed speed limit.

- If the graphic of the camera process tried to exceed from region 2, the imposed speed limit would be ignored in order not to allow it.

---------------------------------------
See: [Global data](predefined_global_data.md) - [start_scroll()](start_scroll().md) - [stop_scroll()](stop_scroll().md)

