**move_text(**&lt;text identifier&gt;**,** &lt;x&gt;**,** &lt;y&gt;**)**

### Description

Moves a text towards other screen coordinates. The ** text identifier** and the (**x**, **y**)
screen coordinates towards which the text must be moved are specified as parameters. The
identifier of the text is a numeric code returned by the [write()](write().md) and [write_int()](write_int().md)
functions when they are required to write a text.

The **centreing code** specified in the [write()](write().md) or [write_int()](write_int().md) functions will
remain when this function is used.

The specified coordinates always dealt with the screen and may be inside it or out from it.
It is necessary to use the [text_z](global_text_z.md) global variable to modify the {z coordinate of the
texts} (the depth plane in which they appear).

### Example program
```
PROGRAM example_move_text;

PRIVATE
    id_text1;
    id_text2;
    coord_x;
    coord_y;
    angle1;

BEGIN
    id_text1=write(0, 160, 100, 4, "MOVING TEXT");
    id_text2=write(0, 160, 100, 4, "MOVE THE MOUSE");
    LOOP
        coord_x=160+get_distx(angle1, 100);
        coord_y=100+get_disty(angle1, 90);

        // We move the texts
        move_text(id_text1, coord_x, coord_y);
        move_text(id_text2, mouse.x, mouse.y);

        angle1+=1000;
        FRAME;
    END
END
```


In the example, two texts are displayed at the centre of the screen with the [write()](write().md)
function. This function returns the identifiers of those texts, that are stored in the **id_text1**
and **id_text2** variables.

In every step of the loop, the first text moves along a circular path obtained by increasing an angle
(**angle1**) and using the [get_distx()](get_distx().md) and [get_disty()](get_disty().md) functions. The second text will be
placed at the coordinates of the mouse pointer.

Both texts move in every frame with the **move_text()** function.

---------------------------------------


To delete a text definitively, the **text identifier** is also required, and the [delete_text()](delete_text().md)
function must be used for that.

---------------------------------------
See: [write()](write().md) - [write_int()](write_int().md) - [delete_text()](delete_text().md)

