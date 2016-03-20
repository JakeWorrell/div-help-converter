**upper(**&lt;string or character&gt;**)**

### Returns

If a character was a small letter (lowercase), it returns the
same character but as a capital letter (uppercase).

### Description

converts a string (or just a character) to capital letters, including the special
characters, like the letter &quot;&plusmn;&quot; or the accentuated vowels.

This function works in one of two ways, depending on the parameter it receives:

- If it receives a text string (or literal between quotation marks), it will convert to
capital letters every contained character in the string and won't return
any significant value (just the cursor of the receipt string).

- If it receives just one character (its ordinal value or ASCII value), it will return the
character converted into a capital letter (but just its ordinal value), and the function
will not change any data in memory.

### Example program
```
PROGRAM example_upper;

GLOBAL
    STRING mystring="This is an example string.";
    STRING myletter="a";

BEGIN

    upper(mystring); // converts a string to capital letters
    upper(myletter);  // converts a character to capital letters

    write(0,0,0,0,mystring);
    write(0,0,10,0,OFFSET myletter);
    LOOP
        FRAME;
    END
END
```


This example has defined two global data (**mystring** and **myletter**), the
function **upper()** will be used to convert it to capital letters, and then
it will be shown on screen.

---------------------------------------


This function will not modify those characters which are not small (lowercase) letters.

---------------------------------------


The function [lower()](lower().md) is the opposite to **upper()**, because it can converts
a string (or a character) to small (lowercase) letters.

---------------------------------------
See: [strcpy()](strcpy().md) - [strcat()](strcat().md) - [strlen()](strlen().md) - [strcmp()](strcmp().md) - [strchr()](strchr().md)
- [strstr()](strstr().md) - [strset()](strset().md) - [lower()](lower().md) - [strdel()](strdel().md)

