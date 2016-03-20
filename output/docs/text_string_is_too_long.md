To define a string of text indicating in brackets its length,
one must use a whole number **less than 1048576**, remembering
that all strings start from the position zero and finish in the position which indicates the index.

### Example
```
PROGRAM my_game;
GLOBAL
    STRING string1[29999999]; // Error: text string is too long.
BEGIN
    //...
END
```


The compiler detected a text string that was too long, such as **string1**; the maximum that can be declared 
is a string of text of 1 Megabyte, with such declaration:  **STRING** string1**[**1048575**];**

**string1** can contain up to **1024*1024** characters, from string1[0] to string1[1048575].

---------------------------------------
See: [syntax](syntax_of_a_programdot.md)

