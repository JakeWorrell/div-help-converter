**itoa(**&lt;expression&gt;**)**

### Returns

A string of text containing the result.

### Description

This function is used to convert a numeric value or **&lt;expression&gt;** into
a string of text, that allows you to convert a number into text.
The string will have as many types as digits has the result.

The function [calculate()](calculate().md) allows the opposite operation;
to convert a literal or string of text into a numeric value.

### Example program
```
PROGRAM example_itoa;

GLOBAL
    STRING message;

BEGIN
    load_fpg("help/help.fpg");
    mouse.graph=200;
    write(0,0,0,0,message);
    REPEAT

        // It makes a message with text and numbers using itoa()

        message = "Cursor of the mouse in (" + itoa(mouse.x) +
                  "," + itoa(mouse.y) + ").";

        FRAME;
    UNTIL (key(_esc));
END
```


This example program creates a string of text called **message**
(see [STRING](data_of_type_string.md)) letters and numeric values (the coordinates
of the mouse, see [mouse](global_struct_mouse.md)), and it is represented on screen
with the function [write()](write().md).

The program loads the file **help.fpg** with [load_fpg()](load_fpg().md) and assigns
the graphic **200** as the cursor of the mouse. The program will continue until
the **ESC** key is pressed.

---------------------------------------


### Note The name of the function **itoa()**, that comes from the C language, comes
from the expression &quot;integer to ascii&quot;. And the function that does the opposite
operation, &quot;ascii to integer&quot; is called [calculate()](calculate().md).

---------------------------------------
See: [Calculate()](calculate().md) - [Arithmetic expressions](definition_of_an_expression.md) - [Write()](write().md)

