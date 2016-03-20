Pointers to data of any type ([INT](data_of_type_int.md)), [WORD](data_of_type_word.md),
[BYTE](data_of_type_byte.md) and [STRING](data_of_type_string.md)).

The pointers in the DIV language are different to
other programming languages, for one thing they are more simple to use.

These pointers are used as if they were mobile tables, that is, tables which can be defined
where they are situated, assigning them an [OFFSET](offset.md) (to the data). 
So you can access the data situated in this position from
**pointer[index]**, for reading and writing of the values.

---------------------------------------


### different data of type pointer

**INT POINTER** - Pointer to whole number data. The word INT can be omitted, declaring
a pointer to data of type **INT** as **POINTER name;**.

**WORD POINTER** - Pointer to a list or table of data of type **WORD**.

**BYTE POINTER** - Pointer to a list or table of data of type **BYTE**.

**STRING POINTER** - Pointer to a string of text contained in a **STRING**.

**STRUCT POINTER** - Pointer to a structure, which must be declared as {STRUCT
POINTER name_structure &lt;name&gt;;}. Where **&lt;name&gt;** will be the pointer to the structure.

---------------------------------------


For example, if in a program there exist different tables of type **WORD** (declared as
**WORD t1[9], t2[9], t3[9];**), then a denominated pointer **ptr**can be defined 
which permits you to access to any of the tables (as **WORD POINTER ptr**;). In addition
you must assign the direction or location of the specific table to the pointer
(such as **ptr = OFFSET t1;**) to access it. From then on you can access the
values of the table with the pointer (you can access **t1[n]** using the term **ptr[n]**).

The functioning of the pointers [INT](data_of_type_int.md)), [WORD](data_of_type_word.md) and [BYTE](data_of_type_byte.md) are practically identical
(they allow you to access a list of consecutive data).

The pointers [STRING](data_of_type_string.md) permit you to access only one string of text (all
characters contained in that string).

In the declaration of the pointers of type [STRUCT](declaration_of_a_structuredot.md), the name of the structure
to which the pointers refer must be declared. The pointers can give access to only one structure
but, after assigning the [OFFSET](offset.md) of the structure (or of any register)
you than have access to all fields and successive registers, as if the pointer were
a conventional structure.

### Note To declare a pointer to a structure it is necessary to have previously defined the structure.
It's enough to define the different fields, but it is not
necessary to define the number of registers of the structure.

---------------------------------------


**Limitation in the access of the pointers.**

You can't access the written data before the **OFFSET of the pointer**is established. 
This **OFFSET** can't be assigned in the declaration of the pointer,
it must be done in a statement of the program, until this statement is reached the pointer
will value 0 (**pointer zero**). The access to data with the pointer zero will provoke an
execution error.

It is possible **to limit the range of access of a pointer**, indicating in its declaration the
max value from the index permitted for it. For it must be only
indicated in brackets, after the name of the pointer. For example, the following
declaration:

**STRING POINTER s[32];**

Defines the pointer to one string of text, but it will stop to access
directly to its 33 (from 0 to 32) firsts characters. If it is intended
to access out of these limits, the program will advert it indicating an access
out of the rank.

---------------------------------------
See: [types de data](types_of_data.md) - [Declaration of a data](declaration_of_a_variabledot.md) - [OFFSET](offset.md)

