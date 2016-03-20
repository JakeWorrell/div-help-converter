**convert_palette(**&lt;file&gt;**,** &lt;graphic&gt;**,** &lt;OFFSET new_palette&gt;**)**

### Description

Manipulates a **&lt;graphic's&gt;** map of colour to that of the indicated **&lt;file&gt;**.

The **&lt;**[offset](offset.md)** new_palette&gt;** is the path/address inside the memory of the computer
of a 256-colour table where the new order of colours are located.

### Note The table must be (of the [INT](data_of_type_int.md) type, signed 32bit).

If the table is like this:

  new_palette[255]=0, 1, 2, 3, 4, ... , 254, 255;

The graphic will not be changed.

However, if in the 3rd position of the previous table (new_palette[3]) there is a 16 (not a 3),
when the function is called with the [offset](offset.md) of the table, 
the colour 3 will be changed for the colour 16 in the graphic.

The graphics loaded with the functions [load_map()](load_map()_forward_slash_load_pcx().md) or [load_pcx()](load_map()_forward_slash_load_pcx().md)
(or made with [new_map()](new_map().md)) will be used as if they refer to the first file
(the file with the code 0).

If a process wants to change the colours of its graphic, it must build 
a palette with the new order of colours and, after that, call the function with
the parameters:

  **convert_palette(file, graph, **&lt;OFFSET new_palette&gt;**)**

Here is a program that changes the colours of its graphic in this way
using the predefined local variables [file](local_file.md) and [graph](local_graph.md).

### Example program
```
PROGRAM example_convert_palette;

PRIVATE
    new_palette[255];
    counter;

BEGIN
    load_fpg("help/help.fpg");
    put_screen(0, 1);

    FROM counter=1 TO 255;
        new_palette[counter]=(counter+16) MOD 256;
    END

    graph=100;
    x=160;
    y=100;

    write (0, 160, 0, 1, "Press [SPACE] to change the colours of the ball");
    LOOP
        IF (scan_code==_space)

            // We convert the palette of the graphic number 100 (ball)
            convert_palette(file, graph, offset new_palette);

        END
        FRAME;
    END
END
```


First, **a table is created with the new order**
of the palette. The colour number 0 (transparent) never changes
(new_palette[0] will always be 0) and the rest of the colours (from 1 to 255)
will be changed for the colour that is 16 positions further along in the palette
(the 1 for 17, the 2 for 18, etc.). The last 16 colours will be changed
for the first 16 (when the operation **MOD 256** is done the values are truncated, 
256 will be 0, 257 will be 1, etc.).

After that, inside the main loop of the program the function will run 
**convert_palette()** and it will change the colours of the ball each time
that the space bar is pressed.

---------------------------------------
See: [load_pal()](load_pal().md) - [roll_palette()](roll_palette().md)

