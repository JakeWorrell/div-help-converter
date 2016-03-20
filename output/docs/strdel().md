**strdel(**&lt;string of text&gt;**,** &lt;initial subtraction&gt;**,** &lt;final subtraction&gt;**)**

### Description

This function deletes characters from a **&lt;string of text&gt;**. Characters Will be eliminated
**&lt;initial subtraction&gt;** from the beginning of the string and characters **&lt;final subtraction&gt;**
from the end of it.

To eliminate just characters from the beginning of the string you must indicate
**0** as the **&lt;final subtraction&gt;**, and to eliminate just from the end, set **0** as {&lt;initial
subtraction&gt;}.

### Example program
```
PROGRAM example_strdel;

GLOBAL
    STRING mystring="This is an example string.";

BEGIN

    strdel(mystring,5,9);

    write(0,0,0,0,mystring);
    LOOP
        FRAME;
    END
END
```


This example uses the function **strdel()** to eliminate the first **5**
characters of **&lt;mystring&gt;** and the last **9**, and then, show the resultant string
on screen (&quot;is an examp&quot;).

---------------------------------------


### Note If the quantity of characters to delete is negative (for the beginning or
for the end), the function will add spaces to the string.

---------------------------------------


It is also possible to eliminate characters from the end of a string with statements
such as the following:

  **string1--;**

  **string1-=1;**

  **string1=string1-1;**


---------------------------------------
See: [strcpy()](strcpy().md) - [strcat()](strcat().md) - [strlen()](strlen().md) - [strcmp()](strcmp().md) - [strchr()](strchr().md)
- [strstr()](strstr().md) - [strset()](strset().md) - [upper()](upper().md) - [lower()](lower().md)

