**strstr(**&lt;string of text&gt;**,** &lt;substring&gt;**)**

### Returns

 ** -1** If the substring wasn't found inside of the string.

 ** +n** If it was found in the position **n** of the text string.

### Description

Searches for the sequence of characters contained in the **&lt;substring&gt;** in a
**&lt;text string&gt;**.

This function will determine if a text string contains the substring (as &quot;HOUSE&quot;
contains &quot;USE&quot;) and, if so, will indicate whereabouts the substring appears inside
of the string (from 0, 1 in the previous example).
If the substring on more than one occasion, the function will return
the position where the string first occurred.

### Example program
```
PROGRAM example_strstr;

GLOBAL
    STRING mystring="This is an example string.";
    position;

BEGIN

    position=strstr(mystring,"an");

    write_int(0,0,10,0,OFFSET position);
    LOOP
        FRAME;
    END
END
```


In this example the function **strstr()** is used to determine where 
the substring **&quot;is&quot;** is found inside **mystring**, it will return the position **8**.

---------------------------------------


To change from capital letters to small letters
the functions [upper()](upper().md) and [lower()](lower().md) can be used.

---------------------------------------


To determine if a string contains a character, the function
[strchr()](strchr().md) must be used, which, allows you to search for
 any character inside the specified group simultaneously.

---------------------------------------
See: [strcpy()](strcpy().md) - [strcat()](strcat().md) - [strlen()](strlen().md) - [strcmp()](strcmp().md) - [strchr()](strchr().md)
- [strset()](strset().md) - [upper()](upper().md) - [lower()](lower().md) - [strdel()](strdel().md)

