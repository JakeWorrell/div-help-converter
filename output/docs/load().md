**load(**&lt;name of the file&gt;**,** &lt;OFFSET data&gt;**)**

### Description

Loads the raw data from a file into the computer memory.

To do this, the function requires the **name of the file** and the address
of the data within the program, this can be a variable, array or structure
and can be obtained by using the [OFFSET](offset.md)) operator.

The address of the data must be the same as was used to save the data using the
[save()](save().md) function.

The name of the file can be any legal MS-DOS 8:3 filename (the same limitations as fpg
and PRG filenames).

It is important that the file you wish to read data from exists, as an
error will occur if you try to load a nonexistent file (even if this can be ignored,
continuing the program's execution).

### Example program
```
PROGRAM example_load;

PRIVATE
    table[9];
    counter;

BEGIN
    write (0, 0, 0, 0, "Press [ENTER] to delete the data from memory.");
    write (0, 0, 10, 0, "Press [SPACE] to load the data from disk.");
    write (0, 0, 30, 0, "Current values of the data:");
    FROM counter=0 TO 9;
        table[counter]=rand(0, 100);
        write_int(0, 0, 40+(counter*10), 0, offset table[counter]);
    END
    save("help.dat", offset table, sizeof(table));
    LOOP
        IF (key(_enter))
            FROM counter=0 TO 9;
                table[counter]=0;
            END
        END
        IF (key(_space))

            load("help.dat", offset table); // The disk data are loaded

        END
        FRAME;
    END
END
```



In this example, an array of 10 values are created, and filled with random values.
This array is then saved to disk using the [save()](save().md) function.

When the ENTER key is pressed, the values in the array are reset to 0.

When the SPACE key is pressed, the values are recovered into the array using
the **load()** function.

---------------------------------------
See: [save()](save().md) - [sizeof()](sizeof().md)

