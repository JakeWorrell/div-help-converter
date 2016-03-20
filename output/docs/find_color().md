**find_color(**&lt;red&gt;**,** &lt;green&gt;**,** &lt;blue&gt;**)**

### Returns

The **colour number** in the palette.

### Description

Finds the colour from the current palette nearest to the indicated colour.

the desired colour must be specified in the palette using the three
component RGB system of colour coding, that is **&lt;red&gt;** (red), **&lt;green&gt;** (green)
and **&lt;blue&gt;** (blue), all of them being expressed as values between 0 and 63.

the **number of colour** of the palette which is the nearest to the indicated 
component colours, will be given as the return value of the function.

For example, if the program calls a function like **find_color(63,63,0)**, it will
return the colour number of the palette which is the nearest to or identical to this
colour, namely **yellow**.

---------------------------------------


### Note the function **find_color()** **doesn't modify the current palette**, it just
searches for the defined colours in the palette, to modify a colour of the
palette the function [set_color()](set_color().md) must be used.

### Example program
```
PROGRAM example_find_colour;

GLOBAL;
    blue;
    green;
    yellow;
    red;

BEGIN

    blue=find_color(0,0,63);      // Search for the colour blue
    green=find_color(0,63,0);     // Search for the colour green
    yellow=find_color(63,63,0);    // Search for the colour yellow
    red=find_color(63,0,0);       // Search for the colour red

    draw(2,blue,15,0,0,0,79,79);
    draw(2,green,15,0,80,0,159,79);
    draw(2,yellow,15,0,160,0,239,79);
    draw(2,red,15,0,240,0,319,79);

    LOOP
        FRAME;
    END
END
```


This example uses the function **find_color()** to define the colours
**blue**, **green**, **yellow** and **red** inside of the palette, and then
using the function [draw()](draw().md), shows four squares of these colours.

The advantage of using this system is that it doesn't matter if the program 
changes the current palette, because the same colours can always be found.

---------------------------------------


To modify the whole palette, the file must be loaded with the
function [load_pal()](load_pal().md).

To create other palette effects, the function [roll_palette()](roll_palette().md) can be used,
which allows you to create cycles of colour, or the function [fade()](fade().md)
which allows you to create multiple fades and saturations of colour at different speeds.

---------------------------------------
See: [set_color()](set_color().md) - [roll_palette()](roll_palette().md) - [load_pal()](load_pal().md)

