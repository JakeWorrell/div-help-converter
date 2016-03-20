**force_pal(**&lt;name of file&gt;**)**

### Description

Loads a colour palette (a file of type PAL, FPG, MAP, PCX or FNT) and
**establishes it as the obligatory palette** for all the graphics and fonts which are
loaded thereafter.

The functioning is very similar to [load_pal()](load_pal().md) (which simply loads and
activates a palette) but, once the palette has been loaded with **force_pal()**,
**every map, file and font** loaded afterwards {will adapt automatically 
to the current palette}.

The **graphics already loaded** before **force_pal()** was called {won't
be adapted}, and as such, if all the graphics are wanted to be seen with
a unique palette, this function must be called at the beginning of the program.

It is **important** to note that the maps, files &amp; fonts will just adapt in the
computer's memory, the original files remain unaltered, each one with
their own palette.

---------------------------------------


### Note To stop adapting the loaded graphics to the unique palette, the function 
**force_pal(0)** must be called (indicating a **0** as its parameter, instead of the 
name of a file.

---------------------------------------


### Example program
```
PROGRAM example_force_pal;
BEGIN

    force_pal("help/help.pal");

    // Now all the files, maps and fonts can be loaded 
    // which are wanted, irrespective of their own palette, to be adapted
    // automatically to the current palette.

    // ...

END
```


This small example shows how all the graphics can be forced to just one 
palette inside of a program by calling **force_pal()** at the beginning of
program execution.

---------------------------------------


A palette can't be deleted from the computer's memory, because this doesn't
take up any space in memory.

---------------------------------------
See: [load_pal()](load_pal().md)

