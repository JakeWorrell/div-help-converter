Addressing operator. This operator requires a slightly advanced level in programming techniques. The use of pointers is a characteristic of other languages that, even if it may be very useful, is not indispensable to make programs, no matter how difficult they are.

The reserved word **POINTER** is used to make reference to a specific position of the computer's memory.

**Practical case.**---------------------------------------


For instance, having a variable named **my_variable** with value **3**, which will be stored in an offset of the memory (all the variables have an offset), the operator [OFFSET](offset.md) is used to obtain this offset.

Supposing that there is another variable named **offset_of_my_variable** used
to store the offset of the previous variable, which would be done with the following statement:

  **offset_of_my_variable = OFFSET my_variable;**

This offset will be an integer, for instance **12345**. In order to obtain or modify the value of the variable (**3**), having only the offset (position) of the variable (and not its name) in the memory, the operator **POINTER** must be used. The statement to obtain the value of the variable from its offset would be as follows:

  **my_variable = POINTER offset_of_my_variable;**

A series of expressions and their numeric equivalents are now shown in order to clarify the concepts of **name of the variable**, **offset of the variable** and **value of the variable**.

  **my_variable** = **3**

  **OFFSET my_variable** = **12345**

  **offset_of_my_variable** = **12345**

  **POINTER offset_of_my_variable** = **3**


The offset of a variable may vary as a program is expanded (by adding new data and statements to it).

In short, {the operator POINTER accesses the value that is in the
position of the computer's memory indicated after it}. That is to say:

  **POINTER 12345** = **3**


It means that value **3** is in the offset **12345** of the computer's memory, as it is in this offset where the value of the **my_variable** variable is **stored**, and it is its value.

---------------------------------------


The [symbol *](asterisk.md) and the [symbol ^](caret.md) may be used as **synonyms** of the reserved word **POINTER** (in the previous example ***12345** = **3** or **^12345** = **3**).

---------------------------------------


The square brackets (symbols **[ ]**) work in a similar way to the operator
**POINTER**, with the proviso that they access the variable whose offset is indicated in them (in the previous example **[12345]** = **3**).

The square brackets are also used to specify the index in the tables and structures.

---------------------------------------
See: [Syntax](syntax_of_a_programdot.md) - [OFFSET](offset.md)

