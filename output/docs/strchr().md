**strchr(**&lt;text string&gt;**,** &lt;characters&gt;**)**

### Returns

 ** -1** If none of the characters were found inside of the string.

 ** +n** If one of the characters was found in the position **n** of the string.

### Description

Searches for one or some **&lt;characters&gt;** in a **&lt;text string&gt;**. It receives the
string as first parameter and, as the second, one or more characters in a 
literal (between quotation marks).

This function will determine if the string contains any of the characters and,
if so, will indicate at which position inside the string (from 0) the character appears. 
In the character appears on more than one occasion, the function
will always return the first position the character occurred.

### Example program
```
PROGRAM example_strchr;

GLOBAL
    STRING mystring="FGHIJK";
    position;

BEGIN
    write(0,0,0,0,"First vowel of <mystring> is in position:");

    position=strchr(mystring,"AEIOU");

    write_int(0,0,10,0,OFFSET position);
    LOOP
        FRAME;
    END
END
```


In this example the function **strchr()** is used to determinate the first vowel
of **mystring** is the position **3** of the string.

---------------------------------------


The characters of a data of [STRING](data_of_type_string.md) can be accessed always as if this would
be a table of characters. For example, to change in the data **mystring** of the
previous example, the character &quot;I&quot; for a character &quot;-&quot; the following statement
could be used:

  **mystring[3]=char(&quot;-&quot;);**

To convert a character, contained in a literal, in its ordinal value (ASCII)
the function [char()](char().md) is used.

---------------------------------------


To determinate if a string is completely contained in another (if appears as
a substring inside of the same), the function [strstr()](strstr().md) must be used.

---------------------------------------
See: [strcpy()](strcpy().md) - [strcat()](strcat().md) - [strlen()](strlen().md) - [strcmp()](strcmp().md)
- [strstr()](strstr().md) - [strset()](strset().md) - [upper()](upper().md) - [lower()](lower().md) - [strdel()](strdel().md)

