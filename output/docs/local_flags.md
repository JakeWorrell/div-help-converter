**flags=0;** // Indicator of mirrors and transparency---------------------------------------
.

This is a predefined [LOCAL](declaration_of_local_datadot.md) variable, which means that every process will have its own value in its **flags** variable.

The **flags** local variable indicates the mirrors and transparencies of the displayed graphic in the processes. The possible values are the following ones:

 **0**-Normal graphic.

 **1**-Horizontal mirror.

 **2**-Vertical mirror.

 **3**-Horizontal and vertical mirror (180&deg;).

 **4**-Transparent graphic.

 **5**-Transparent and horizontal mirror.

 **6**-Transparent and vertical mirror.

 **7**-Transparent, horizontal and vertical mirror.


By default, the value of the **flags** variable is **0**. If it is not modified, the graphic will be displayed opaque (not transparent or mirror).

The terms **mirror** and **transparency** are now defined:

- **Horizontal mirror**, the graphic will be horizontally flipped. If it was facing left, it will face now right and vice versa.

- **Vertical mirror**, the graphic will be vertically flipped. If it was facing up, it will face now down and vice versa.

- **Transparency** (or **ghost-layering**), the graphic will be displayed semi-transparent. It will be possible to see what is placed behind the graphic, as if it was a coloured window, unlike the opaque graphics normally displayed.

For instance, the following statement must be used to display a transparent graphic of a process:

  **flags=4;**

---------------------------------------


### Note The graphic of a process must be indicated assigning a **graphic code** to the [graph](local_graph.md) local variable.

---------------------------------------
See: [Local data](predefined_local_data.md)

