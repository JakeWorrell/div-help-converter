In DIV there exists data of the types [INT](data_of_type_int.md)), [STRING](data_of_type_string.md) (text strings), [WORD](data_of_type_word.md) 
(16 bit whole positive values), [BYTE](data_of_type_byte.md) (8 bit whole positive values) and [POINTER](data_of_type_pointer.md) (pointers, of all
these types). Also tables and structures (also of any types) of 2 or 3 dimensions 
(see the [declaration of a table](declaration_of_a_tabledot.md))can be defined. 

[INT](data_of_type_int.md) - whole numerical data between -2147483648 and +2147483647 ([min_int](min_int.md) ... [max_int](max_int.md)).

[WORD](data_of_type_word.md) - whole numerical data between 0 and 65535 (whole of 16 bit without sign).

[BYTE](data_of_type_byte.md) - whole numerical data between 0 and 255 (whole of 8 bit without sign).

[POINTER](data_of_type_pointer.md) - Pointers to data of any type.

[STRING](data_of_type_string.md) - strings of text (tables of 8 bit characters without sign, between 0 and 255)

---------------------------------------


### Note The reserved word **INT** can be omitted, because all data will be of this type by default
(32 bit whole numbers with sign).

---------------------------------------
See: [Declaration of data](declaration_of_a_variabledot.md)

