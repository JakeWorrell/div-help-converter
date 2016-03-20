**delete_text(**&lt;text identifier&gt;**)**

### Description

Delete text on the screen that is specified with the **text identifier** parameter,
which is a numeric code returned by the functions [write()](write().md) and [write_int()](write_int().md).

If [all_text](all_text.md) is specified as the **text identifier** parameter, then all text
on screen will be deleted.

### Example program
```
PROGRAM example_delete_text;

PRIVATE
    text_id;

BEGIN
    write(0, 160, 10, 1, "Press [ENTER] to make the above text reappear.");
    LOOP
        text_id=write(0, 160, 0, 1, "Press [SPACE] to delete this text.");
        WHILE (NOT key(_space))
            FRAME;
        END

        delete_text(text_id); // Delete the text

        WHILE (NOT key(_enter))
            FRAME;
        END
    END
END
```


In this example, two texts appear on screen. When you press
the space bar, one of these texts will be deleted using the **delete_text()** function,
and when you press the Enter key, the text appears again using the [write()](write().md) function - 
which returns the new text identifier **text_id**.

---------------------------------------
See: [write()](write().md) - [write_int()](write_int().md) - [move_text()](move_text().md)

