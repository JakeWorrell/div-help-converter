**save(**&lt;name of the file&gt;**,** &lt;OFFSET data&gt;**,** &lt;sizeof(data)&gt;**)**

### Description

Saves a data block from the program memory to a file in the disk, to recover it later, when it is required, with the [load()](load().md) function.

For that, the function requires the **file name**, the offset (inside
the computer memory) of the variable, table or structure stored in
the disk (the variable offset is obtained with [OFFSET](offset.md)  
**&lt;variable name&gt;**) and the number of memory positions that this variable occupies (which may be obtained with [sizeof](sizeof().md)**(&lt;file name&gt;)**).

It is possible to save several data (variables, tables or structures) if they have consecutively been defined inside the same section ([GLOBAL](declaration_of_global_datadot.md), [LOCAL](declaration_of_local_datadot.md) or [PRIVATE](declaration_of_private_datadot.md)). In this case, the [OFFSET](offset.md) of the first variable must be indicated as a **second parameter**, and the addition of the [sizeof()](sizeof().md) of all the data must be indicated as a **third parameter**.

It is not necessary to specify a path together with the file name.

### Example program
```
PROGRAM example_load;

PRIVATE
    table[9];
    counter;

BEGIN
    write (0, 0, 0, 0, "Press [ENTER] to reset the data.");
    write (0, 0, 10, 0, "Press [SPACE] to load the disk data");
    write (0, 0, 30, 0, "Current values of the data:");
    FROM counter=0 TO 9;
        table[counter]=rand(0, 100);
        write_int(0, 0, 40+(counter*10), 0, offset table[counter]);
    END

    save("help/help.dat", offset table, sizeof(table)); // The file is saved.

    LOOP
        IF (key(_enter))
            FROM counter=0 TO 9;
                table[counter]=0;
            END
        END
        IF (key(_space))
            load("help/help.dat", offset table);
        END
        FRAME;
    END
END
```


At the beginning of the example, a table of 10 positions (from 0 to 9) is created with random values. This table is saved in the disk with the **save()** function.

When the ENTER key is pressed, the table values are reset (the 10 positions are put at 0).

When the spacebar is pressed, the table's values stored in the disk are loaded with the [load()](load().md) function.

---------------------------------------


To save the **table[9]** and the **counter** variable in the same file, the **save()** function should have been called in the following way:

  **save(&quot;help/help.dat&quot;, offset table, sizeof(table)+sizeof(counter));**

Do not vary the load statement (**load(&quot;help.dat&quot;, offset table);**), as it does not require the number of data.

The value returned by [sizeof()](sizeof().md) for any variable (like **counter**)
will always be 1. For a table, this function returns the number of positions that it has. Then, considering that 11 data (10 of the table and 1 of the variable) are going to be saved, the statement to save them could be as follows:

{save(&quot;help/help.dat&quot;, offset table, 11);

---------------------------------------
See: [load()](load().md) - [OFFSET](offset.md) - [sizeof()](sizeof().md)

