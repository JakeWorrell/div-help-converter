**char(**&lt;literal&gt;**)**

### Returns

The **ASCII** value of the (first) character contained in the literal parameter.

### Description

This function **char()** is used to obtain the ordinal value of a character.

### Example program
```
PROGRAM example_char;
PRIVATE value;
BEGIN
  // ..
  value="A";       // The address of the literal "A" is assigned in memory.
  // ..
  value=char("A"); // The ASCII value of "A" is assigned (65 in decimal).
  // ..
END
```


In a program, the literals (texts between quotation marks) are translated as the
memory address which they have been allocated. To assign to one variable
a character (its ordinal value), instead of the address of the string,
use this function.

See: [strcpy()](strcpy().md) - [strcat()](strcat().md) - [strlen()](strlen().md) - [strcmp()](strcmp().md) - [strchr()](strchr().md)
- [strstr()](strstr().md) - [strset()](strset().md) - [upper()](upper().md) - [lower()](lower().md) - [strdel()](strdel().md)

