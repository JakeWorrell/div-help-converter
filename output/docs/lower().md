**lower(**&lt;string or character&gt;**)**

### Returns

If a character is given to a capital letter (uppercase), it returns the
character changed to a small letter (lowercase).

### Description

Converts a string (or a simple character) into small letters, including the
special characters, like the letter &quot;&plusmn;&quot; or the accented vowels.

This function can work in one of two modes, depending on the parameter given:

- If it receives a text string (or literal between quotation marks), it will change into
small letters every character contained in the string and will not return any
significative value (just the cursor of the string given).

- If it receives just a character (its ordinal value or ASCII), it will return
the character changed into a small letter (its ordinal value), and the
function won't change any data in memory.

### Example program
```
PROGRAM example_lower;

GLOBAL
    STRING mystring="THIS IS AN EXAMPLE STRING";
    STRING   myletter="A";

BEGIN

    lower(mystring); // Changes a string into small letters
    lower(myletter);  // Changes a character into small letters

    write(0,0,0,0,mystring);
    write(0,0,10,0,OFFSET myletter);
    LOOP
        FRAME;
    END
END
```


This example has defined two global data (**mystring** and **myletter**), the 
function **lower()** will be used to convert them into small letters, and
then will be shown on screen.

---------------------------------------


This function won't modify those characters which are not capital letters.

---------------------------------------


The function [upper()](upper().md) is the opposite to **lower()**, because it changes
a string (or a character) into capital letters.

---------------------------------------
See: [strcpy()](strcpy().md) - [strcat()](strcat().md) - [strlen()](strlen().md) - [strcmp()](strcmp().md) - [strchr()](strchr().md)
- [strstr()](strstr().md) - [strset()](strset().md) - [upper()](upper().md) - [strdel()](strdel().md)

