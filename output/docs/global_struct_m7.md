**STRUCT m7[9];**

    **camera;**   // [Identifying code](_identifying_codes_of_processesdot.md) of the camera

    **height;**   // Height of the camera

    **distance;** // Distance of the camera

    **horizon;**  // Height of the horizon

    **focus;**    // Focus

    **z;**        // Depth plane

    **colour;**    // colour of the exterior

**END**


This **10** record structure contains certain fields dealing with changeable parameters of the **mode 7 window**. The ten records have the same fields names, but each of them modifies the parameters of a different mode 7 window (as up to 10 windows of this type may be activated).

A **mode 7 window** could be defined as a screen region that shows a graphic plane three-dimensionally folded (for instance, like a sheet of paper with a picture horizontally positioned, displayed on screen with a virtual bottom (or top).

For a record (numbered from **0** to **9**) of the **m7 structure** to make sense,
that **mode 7 window** (from **0** to **9**) must first be activated with the [start_mode7()](start_mode7().md) function (see this function for further information about the mode 7 windows}.

It is understood that the fields of this structure are complementary to the call parameters of this function. In order to observe a practical example
of a mode 7, it is possible to access the help about the [start_mode7()](start_mode7().md) function.

---------------------------------------


### How to use the m7 structure

To access these fields, the field name must be preceded by the word **m7**, the number of record in square brackets and the symbol [. (period)](dot__minusgt.md).

For instance, if two mode-7 windows, number 0 and number 1, were initialised the **camera** variable of both windows could be accessed as **m7[0].camera** and **m7[1].camera**, respectively. When the mode-7 window number 0 is accessed, it is also possible to omit the number of windows in square brackets. The **m7.camera** variable and the **m7[0].camera** variable are, to all ends, the same for the language.

---------------------------------------


**A detailed description of each field is now shown.**

**camera** - [Identifying code of the process](_identifying_codes_of_processesdot.md) followed by the camera. To move the camera that controls the mode-7 view, only a mode-7 process must be created, a process having its local variable [ctype](local_ctype.md) **=** [c_m7](c_m7.md), and its [identifying code](_identifying_codes_of_processesdot.md) must be put in the **camera** variable of this structure. After so, only the [x](local_x.md), [y](local_y.md) and [angle](local_angle.md) local variables of this process must be modified  and, for instance, the [advance()](advance().md) function must be used to move forward the camera.

For the mode 7 window to be activated, it is **indispensable** to initialise the **camera** field. Without this field, the window can not determine from where the folded plane must be **seen**.

---------------------------------------


**height** - Height of the camera. This variable of the structure manages the distance to which the camera is placed from the bottom. By default, its value equals **32**. Any positive number will make the camera be placed upper as the number is greater. If a negative number (less than zero) is put in the **height** field of this structure, then the camera will be placed below the folded plane, showing a &quot;**top**&quot; instead of a &quot;**bottom**&quot;.

Two mode-7 must be created within the same region: one as top and the other as bottom (one with positive **height** and the other with negative height). In
this case, it is important to establish the **z** variable of the [m7 structure](global_struct_m7.md) of both, to thus determine the depth plane in which each one must be painted.

---------------------------------------


**distance** - Distance from the camera to the followed process. The perspective of the camera will always be positioned slightly behind the process whose identifier has been put in the **camera** field of the structure. This is done for the graphic of the process used as a camera to be seen, just in case this process has defined it (in its [graph](local_graph.md) or [xgraph](local_xgraph.md) local variable).

By default, the camera will be positioned at **64** points behind the process. &quot;Behind&quot; means a point placed at the indicated distance from the graphic
in the angle opposite to that one to which the process is orientated. For instance, if the process is facing right, 64 points to its left.

---------------------------------------


**horizon** - Horizon's height. This is the same value as that indicated as last parameter of the **start_mode7()** function. Its initial value will equal to the one indicated in the call to this function. The utility of this variable is to make the horizon go up or down in every frame of the game, depending on the needs of the latter.

On changing the **horizon's height**, the &quot;**facing up**&quot; and &quot;**facing down**&quot; effects will be obtained in the **mode 7 window**.

---------------------------------------


**focus** - Focus for the camera. This variable controls the perspective of the camera. By default, its value equals 256, but any value ranging from **0** and **512** may be put, obtaining different distortion effects of the three-dimensional plane.

This field controls the angle got by the camera focus. The greater this value is, the closer all the objects (processes) placed in the folded plane will be seen.

---------------------------------------


**z** - Mode-7 display priority. To indicate the depth plane in which this window must be painted, with respect to the rest of processes. By default, this variable will equal **256**, which means that, as the processes have their [local z](local_z.md) variable at **0** by default, the mode-7 window will be painted in a greater (deeper) depth plane, being the graphics of the processes painted above the window. This situation may change by modifying the **z** variable of the window (for instance, putting it at** -1**) or the **z** variable of the processes (for instance, putting it at **257**).

---------------------------------------


**colour** - colour for the mode-7 exterior. When, in the call to the **start_mode7()**
function, any **external graphic** is not specified (the fourth call parameter is put at **0**), this variable will control the colour in which it is aim to paint the exterior. In other words, the colour that the screen must be painted in beyond the graphic that is being folded (beyond its limits).

By default, this field is initialised at **0**, which is normally the black colour
in the colour palette, Therefore, if this field is not assigned another value (and an external graphic is not defined) the screen will be seen in black beyond the foreground.

---------------------------------------
See: [Global data](predefined_global_data.md) - [start_mode7()](start_mode7().md) - [stop_mode7()](stop_mode7().md)

