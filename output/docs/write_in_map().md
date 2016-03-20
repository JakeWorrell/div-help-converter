**write_in_map(**&lt;font&gt;**,** &lt;text&gt;**,** &lt;code of centre&gt;**)**

### Returns

The created **code of the graphic** containing the text.

### Description

Creates a new map in memory (without loading it on disk, very similar to the
function [new_map()](new_map().md)), and writes in the map some text which characteristics
are described with the following parameters:

**&lt;font&gt;** - The **code of the font** or **type of letter** which is going to be used.
Here a  0 must be placed when you want to use the system font
(font of white colour, small, of 6 to 8 points), or the **code of font** returned
by the function [load_fnt()](load_fnt().md) when a new font is loaded in the program.

**&lt;text&gt;** -  specify the text to be written as a literal, as text between quotation
  marks (see the [delimitation symbols of literals](double_quote__apostrophe.md)).

**&lt;code of centre&gt;** - This code value determines where the **centre** of the text
will be placed on the [checkpoint](control_pointsdot.md) of the created map. its
possible values are:

  **0**-Up left     **1**-Up     **2**-Up right

  **3**-Left           **4**-centre     **5**-Right

  **6**-Down left      **7**-Down      **8**-Down right


The text will always be fitted in a new map of the same dimensions, but
this [checkpoint](control_pointsdot.md) will specify which point of the map will centred on
the coordinates where it will then be placed.

---------------------------------------


This function works practically the same as [load_map()](load_map()_forward_slash_load_pcx().md), but instead of
reading a file on the disk which contains the graphic it creates a graphic
which contains a written message.

The **code of the graphic** is given as the return value, which is a numeric
value which must be specified in order to use the graphic in the variable
[graph](local_graph.md) or, in any function which requires a **code of graphic**
as its parameters.

When the **code of file** which belongs to the graphic is wanted inside of a function
the code **0** must be indicated (which is the code
of the first **file FPG** which is loaded in the program).

---------------------------------------


### Example program
```
PROGRAM example_write_in_map;

GLOBAL
    mi_font;

BEGIN
    mi_font=load_fnt("help/help.fnt");

    // A new map is created with the text "MOUSE"
    // with the checkpoint in the centre, and is
    // assigned as the graphic of the mouse cursor.

    mouse.graph = write_in_map(mi_font,"MOUSE",4);

    REPEAT
        FRAME;
    UNTIL (key(_esc));
    unload_map(mouse.graph);
END
```


In the example a font is loaded with the function [load_fnt()](load_fnt().md),
and then a map is created with the function **write_in_map()**, saving the
**code of the graphic** which is returned in the variable [mouse.graph](global_struct_mouse.md), so
it will appear as the mouse cursor.

The new map is created with the message **&quot;MOUSE&quot;** written with the font **help.fnt**,
and its main [checkpoint](control_pointsdot.md) is placed in the centre (with the code **4**).

Pressing the **ESC** key will bring you out of the loop and the program will
delete the graphic with the function [unload_map()](unload_map()_forward_slash_unload_pcx().md) (exactly the same
as if it were a file loaded from the drive).

But, **it is not necessary to delete the graphic from memory** before finishing
the program, because the system will do it automatically.

---------------------------------------


The main advantage of the function **write_in_map()** is to be able
to work with texts as if they were graphics, so they can be rotated,
scaled, printed with transparency effects, etc...

### Note **write_in_map()** can show a numeric value if used with the function 
[itoa()](itoa().md), which allows you to convert a numeric value into a string of text.

---------------------------------------
See: [write()](write().md) - [unload_map/pcx()](unload_map()_forward_slash_unload_pcx().md) - [graph](local_graph.md) - [itoa()](itoa().md)

