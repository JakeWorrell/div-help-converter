**strlen(**&lt;text string&gt;**)**

### Returns

The length of the string, in characters (with spaces included).

### Description

Counts the number of characters of the text given as a parameter, or contained
currently in the passed string.

The **&lt;text string&gt;** can be a literal (text between quotation marks) or data of
any other type.

### Example program
```
PROGRAM example_strlen;

GLOBAL
    STRING string1="Text example";
    length_string1;

BEGIN
    write(0,0,0,0,"Text contained in <string1>:");
    write(0,0,10,0,string1);
    write(0,0,20,0,"Length of <string1>:");

    length_string1=strlen(string1); // calculates the length

    write_int(0,0,30,0,OFFSET length_string1);
    LOOP
        FRAME;
    END
END
```


---------------------------------------


A character or string can be added to another string with the function [strcat()](strcat().md), or
with a statement of [assignation](assignment_statementdot.md) such as the following:

  **string1+=&quot;a&quot;;**

To remove characters of a string use [strdel()](strdel().md), although it
is possible to eliminate characters at the end of a string with statements
such as the following:

  **string1--;**

  **string1-=1;**

  **string1=string1-1;**


---------------------------------------
See: [strcpy()](strcpy().md) - [strcat()](strcat().md) - [strcmp()](strcmp().md) - [strchr()](strchr().md)
- [strstr()](strstr().md) - [strset()](strset().md) - [upper()](upper().md) - [lower()](lower().md) - [strdel()](strdel().md)

