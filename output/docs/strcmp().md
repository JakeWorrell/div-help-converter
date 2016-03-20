**strcmp(**&lt;string1&gt;**,** &lt;string2&gt;**)**

### Returns

** +n** - If the first string is bigger than the second.

**  0** - If the strings are identical.

** -n** - If the first string is smaller than the second.


### Description

Compares two text strings, character per character, giving back **0** when
both strings are identical.

### Example program
```
PROGRAM example_strcmp;

GLOBAL
    STRING mystring;

BEGIN
    // ...

    IF (strcmp(mystring,"abc")==0)

        // The two strings are identical ...

    END

    // ...
END
```


---------------------------------------


if the strings have less than 1024 characters, the comparison of strings can also be
done with the typical operators of comparison.

For example, the comparison of the previous example could be done with the
following statement:

  **IF (mystring==&quot;abc&quot;)**

  **//...**

  **END**


In the same way, the symbol [&lt;&gt;](ltgt__notequal.md) can be used to compare if the two strings
are different, with the symbols [&lt;](lt.md) or [&lt;=](ltequal__equallt.md) if a string is smaller,
or identical to another, etc.

---------------------------------------


To search for a string inside another (to see if it is contained in it), the 
function [strstr()](strstr().md), must be used, and to see if a string contains a specific character
the function [strchr()](strchr().md) must be used.

---------------------------------------
See: [strcpy()](strcpy().md) - [strcat()](strcat().md) - [strlen()](strlen().md) - [strchr()](strchr().md)
- [strstr()](strstr().md) - [strset()](strset().md) - [upper()](upper().md) - [lower()](lower().md) - [strdel()](strdel().md)

