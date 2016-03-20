**text_z=-256;** // Texts' depth planes---------------------------------------
.

The depth plane in which the texts must appear on screen is indicated in this global variable. It indicates what must appear above and below the text.

The depth planes can be any integer within the range ([min_int](min_int.md) ... [max_int](max_int.md)) and, the greater the number is, the deeper the text or graphic will be placed.

By default, the processes' graphics have their [local z](local_z.md) variable at **0** , the texts **text_z** at** -256** and the mouse pointer has [mouse.z](global_struct_mouse.md) at** -512** by default.

That means that, by default, if these values are not modified,
the texts will appear above the processes' graphics and the mouse pointer above the texts.

If, for instance, the aim was that the texts appeared above the mouse pointer (opposite to which has been established by default), two things could have been done:

**a)** To place the pointer's plane lower than the texts' plane (a
greater number), such as, for instance: **mouse.z=-200;** (as** -200** is a number
bigger than** -256**).

**b)** To place the texts' plane upper that the pointer's plane such as,
for instance, **text_z=-600;** as** -600** is a number lesser than** -512** and,
thus, a less depth plane (less deep).

---------------------------------------


### Note 1 The **text_z** variable is [GLOBAL](declaration_of_global_datadot.md) for all the texts. It is not possible to define texts in different depth planes.

### Note 2 The texts can only be displayed with the [write()](write().md)
(alphanumeric texts) function or with the [write_int()](write_int().md) (variables' numeric values) function.

---------------------------------------
See: [Global data](predefined_global_data.md) - [write()](write().md) - [write_int()](write_int().md)

