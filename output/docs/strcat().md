**strcat(**&lt;string destination&gt;**,** &lt;string origin&gt;**)**

### Returns

Joins two strings together and returns the address of the string destination.

### Description

Joins two text strings, copying the **&lt;string origin&gt;** and adding on the end of 
the text contained in the **&lt;string destination&gt;**.

The **&lt;string destination&gt;** must be of data type [STRING](data_of_type_string.md), of a length
long enough to contain both strings.

### Example program
```
PROGRAM example_strcat;

GLOBAL
    STRING string1="Beginning ";

BEGIN
    write(0,0,0,0,"Text contained in <string1>:");
    write(0,0,10,0,string1);
    write(0,0,192,0,"Press [SPACE] to add a text to <string1>");
    LOOP
        IF (key(_space))

            strcat(string1,"Final"); // Adds a text to string1

        END
        FRAME;
   END
END
```


---------------------------------------


When the length of the resultant string is smaller than 1024 characters, this same
operation can be achieved with the following statement :
(continuing with the previous example):

  **string1 = string1 + &quot;Final&quot;;**

  (or)

  **string1 += &quot;Final&quot;;**

Or with a generic statement of [assignation](assignment_statementdot.md) (or with the symbol
[+=](plusequal.md), of operative assignation) such as the following:

  **&lt;string destination&gt; = &lt;string destination&gt; + &lt;string origin&gt; ;**

  (or)

  **&lt;string destination&gt; += &lt;string origin&gt; ;**

Being always **&lt;string destination&gt;** of data type [STRING](data_of_type_string.md).

---------------------------------------


To copy text strings, the function [strcpy()](strcpy().md) must be used.

To separate (or substrate) text strings, the function [strdel()](strdel().md)
must be used.

---------------------------------------
See: [strcpy()](strcpy().md) - [strlen()](strlen().md) - [strcmp()](strcmp().md) - [strchr()](strchr().md)
- [strstr()](strstr().md) - [strset()](strset().md) - [upper()](upper().md) - [lower()](lower().md) - [strdel()](strdel().md)

