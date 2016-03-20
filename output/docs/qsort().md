**qsort(**&lt;structure name&gt;**,** &lt;field name&gt;**,** &lt;mode&gt;**)**

### Description

Orders or shuffles one of the fields of a program structure .

It is a simple but useful function which allows the quick
ordering and shuffling of data structures.

Its use is very simple, all is required is the **&lt;name of the structure&gt;**,
the one of the **&lt;field which is going to be used as index&gt;**, and the **&lt;ordination mode&gt;**;
one of the indicated now:

**0** - Ascendent ordination (from min to max).

**1** - Descendent ordination (from max to min).

**2** - Random ordering (shuffling)

Any of the data contained in the structure can be used as the index field, without
depending on if it is numeric data or a string of text (in which case it will be
ordered alphabetically)

### Example program
```
PROGRAM example_qsort;

GLOBAL

  STRUCT mystructure[9];
    STRING name[32];
    points;
    x,y;
  END

BEGIN

  //...

  // Orders the registers of mystructure, the one with the biggest
  // score being placed at the beginning

  qsort(mystructure,points, 1);

  //...

END
```


This example shows the easy use of the function **qsort()** to order
a structure, that can represent any type of object inside of a
program.

It is not necessary that the field used as index (**points** in this case)
is the first field of the structure.

---------------------------------------


### Note The shuffling of a structure requires a field which makes 
differences between the different registers of the same. This operation can be
useful to give &quot;randomness&quot; to a program (for example, to &quot;mix&quot; or &quot;shuffle&quot;
a deck of cards).

