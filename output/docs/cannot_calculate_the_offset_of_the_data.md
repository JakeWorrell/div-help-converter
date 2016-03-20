In the expression indicated in the program the operator [offset](offset.md) is used 
(or synonymous symbol [&amp;](offset.md)) with the goal to obtain the location
(dislocation) of a [character](data_of_type_string.md), [byte](data_of_type_byte.md) or [word](data_of_type_word.md) which belongs
to a table.

It is only possible to obtain the location at the beginning of the
table, but not of its data (except such data as [int](data_of_type_int.md)).

Shown below is a program with two examples of the use of the operator
[offset](offset.md) (or the symbol **&amp;**) for tables of such type [byte](data_of_type_byte.md); one valid, another not.

### Example
```
PROGRAM my_game;
GLOBAL
    BYTE my_table[99];
    offset_data;
BEGIN
    // Correct example
    offset_data=offset my_table;

    // Erroneous example
    offset_data=offset my_table[1];
END
```


---------------------------------------


It is also applicable to **text strings** (data like [string](data_of_type_string.md)),
meaning, it is not possible to obtain the location of a character inside of the string.

In this case, the operator [offset](offset.md) is not necessary to obtain the
dislocation of a string of text (it can be omitted).
It means, that both of these two statements would be valid:

  offset_string**=**offset my_string**;**

  offset_string**=**my_string**;**

### Note To operate with the text strings one has to use the functions
of the language which were written to manipulate text (see for example
[strcpy()](strcpy().md)).

---------------------------------------
See: [syntax](syntax_of_a_programdot.md) - [offset](offset.md)

