It is important to stress that all data in this language will be adjusted to **4 bytes** 
of memory (the size of data of type **INT**. This means that the **OFFSET** of all data will 
always be situated in one area of absolute memory **multiple of picture**.

It has direct implications for data of types **WORD** and **BYTE**. Because
they occupy respectively **2 bytes** and **1 byte**. therefore, if you define a variable of
type **WORD**, so, 2 bytes of memory won't be used, and if you define a variable of type
**BYTE** 3 bytes won't be used (because the following data will also be adjusted to 4 bytes).

Therefore, to use the PC memory better, we recommend you use these two types of data as 
tables (see the [declaration of a table](declaration_of_a_tabledot.md)), because the different elements of a table
always save as the following, and don't adjust in memory.

---------------------------------------


### Examples of occupation of memory

**BYTE b1;** - required memory 1, occupied memory 4.

**WORD w1;** - required memory 2, occupied memory 4.

**INT i1;** - required memory 4, occupied memory 4.

**BYTE b2[7];** - required memory 8, occupied memory 8.

**WORD w2[2];** - required memory 6, occupied memory 8.

**BYTE b3[2];** - required memory 3, occupied memory 4.

**WORD w3[3]** - required memory 8, occupied memory 8.

---------------------------------------


As you can see, the occupied memory (in bytes) by data 
will always be a multiple value of 4.

You must also remember this in the fields of the [structures of data](declaration_of_a_structuredot.md) because
for example; two consecutive variables of type **WORD** will occupy **8 bytes**,
while a **WORD** table with two elements occupies only **4 bytes**.

---------------------------------------
See: [types of data](types_of_data.md) - [Declaration of data](declaration_of_a_variabledot.md)

