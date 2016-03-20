**delete_draw(**&lt;identifier of the graphic primitive&gt;**)**

### Description

Deletes a primitive graphic which has been painted with the function [draw()](draw().md),
for which the **&lt;identifier of the primitive&gt;** is required as a parameter, 
which is the numeric code which was returned when it was painted.

If **all_drawing** is specified as a parameter the function will delete every
primitive graphic represented on screen, the **identifier** is only
necessary in the case of wanting to eliminate a particular primitive graphic.

### Example program
```
PROGRAM example_delete_draw;

PRIVATE
    id_draw;
    types;
    colour;
    opacity;
    x0,y0;
    x1,y1;

BEGIN
    write(0, 160, 8, 1, "[ENTER] To show a primitive / [SPACE] to delete it");
    draw(2,127,15,0,0,0,319,199);
    LOOP
        types=rand(1,5);
        colour=rand(0,255);
        opacity=rand(0,15);
        x0=rand(0,319);
        y0=rand(0,199);
        x1=rand(0,319);
        y1=rand(0,199);

        id_draw=draw(types,colour,opacity,0,x0,y0,x1,y1);

        WHILE (NOT key(_space))
            FRAME;
        END

        delete_draw(id_draw); // We delete the graphic

        WHILE (NOT key(_enter))
            FRAME;
        END
    END
END
```


In the previous example, a primitive is painted on screen, then the program waits
for the **space bar** to be pressed, at which moment the primitive is deleted
and then when the **ENTER** key is pressed the program repeats the loop.

This is the second primitive, which identifier has been saved in the variable **id_draw**
(the first primitive is the rectangle which has the same size as the screen and is
painted with the first call to the function [draw()](draw().md) of the program).

To delete every primitive graphic call the function **delete_draw(all_drawing);**, 
the parameter all_drawing will also eliminate the rectangle.

---------------------------------------


### Note The characteristics of a graphic primitive presented on screen (position,
colour, opacity and size) can be modified with the function [move_draw()](move_draw().md). 

---------------------------------------
See: [draw()](draw().md) - [move_draw()](move_draw().md)

