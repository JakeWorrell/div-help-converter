**strcpy(**&lt;string destination&gt;**,** &lt;string origin&gt;**)**

### Returns

Copies a string from the origin to the string destination.

### Description

Copies the **&lt;string origin&gt;** to the **&lt;string destination&gt;**, 
(the original content of the string destination will be lost).

The **&lt;string destination&gt;** must be a data type [STRING](data_of_type_string.md), of a length
long enough to contain the text of the **&lt;string origin&gt;**.

### Example program
```
PROGRAM example_strcpy;

GLOBAL
    STRING string1="Initial text";

BEGIN
    write(0,0,0,0,"Text contained in <string1>:");
    write(0,0,10,0,string1);
    write(0,0,192,0,"Press [SPACE] to copy another text in <string1>");
    LOOP
        IF (key(_space))

            strcpy(string1,"Final text"); // Modifies string1

        END
        FRAME;
   END
END
```


---------------------------------------


When the length of the copied string is smaller than 1024 characters, this
same operation can be done with the following statement:
(continuing with the previous example):

  **string1 = &quot;Final text&quot;;**

With a generic statement of [assignation](assignment_statementdot.md) as the following:

  **&lt;string destination&gt; = &lt;string origin&gt; ;**

The **&lt;string destination&gt;**Being always of a data type [STRING](data_of_type_string.md). To join some
text strings together the function [strcat()](strcat().md) must be used.

---------------------------------------
See: [strcat()](strcat().md) - [strlen()](strlen().md) - [strcmp()](strcmp().md) - [strchr()](strchr().md)
- [strstr()](strstr().md) - [strset()](strset().md) - [upper()](upper().md) - [lower()](lower().md) - [strdel()](strdel().md)

