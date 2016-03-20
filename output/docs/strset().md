**strset(**&lt;text string&gt;**,** &lt;character&gt;**)**

### Description

Assigns to every position of the **&lt;string&gt;** the **&lt;character&gt;** indicated as
the second parameter.

The function can receive the **&lt;character&gt;** in two ways; as a literal (the
character between quotation marks), or as its ordinal (its ASCII value) which must be
a value between **0** and **255**.

The complete string will be replaced with this character. The length of the string
depends on the indicated value between &quot;[]&quot; in its initiation, if the function doesn't
know the length of the data of type [STRING](data_of_type_string.md), a string of
**256** characters will be created (from the position 0 to 255).

### Example program
```
PROGRAM example_strset;

GLOBAL
    STRING mystring="This is an example string.";

BEGIN
    write(0,0,0,0,"content of <mystring> (press space to change it):");
    write(0,0,10,0,mystring);
    LOOP
        IF (key(_space))

            strset(mystring,"*"); // Fills up the string with "*"

        END
        FRAME;
    END
END
```


---------------------------------------


To calculate the current length of a string, the function [strlen()](strlen().md) will be used.

To delete characters from a string (from the beginning and from the end) the function
[strdel()](strdel().md) must be used.

---------------------------------------
See: [strcpy()](strcpy().md) - [strcat()](strcat().md) - [strlen()](strlen().md) - [strcmp()](strcmp().md) - [strchr()](strchr().md)
- [strstr()](strstr().md) - [upper()](upper().md) - [lower()](lower().md) - [strdel()](strdel().md)

