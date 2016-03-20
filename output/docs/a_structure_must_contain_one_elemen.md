In the indicated position of the program, the aim is to close the declaration of a structure without any element (field) defined in it with [END](end.md).

A structure ([STRUCT](declaration_of_a_structuredot.md)) is like a list of index cards
(records) with several pieces of information (fields) in every index card.

**STRUCT name_structure[10]**

    **x, y;**

**END**

In this example, the structure (set of index cards) is called **name_structure**
and it has **10 records** (ten index cards) with **2 fields** each one (with two pieces of information; **x** and **y**).

Therefore, defining a structure without fields makes no sense (since it is the same as defining a set of index cards with no piece of information).

Then, to access the information of the index cards, the structure is used as follows (suppose that in the global variable **n** the aim is to put the value
**y** of the index card number **5**).

**n=name_structure[5].y;**

An invalid program is shown now.

### Example
```
PROGRAM my_game;
GLOBAL
    STRUCT my_structure[10]

    END // Error: A structure must contain one element, at least.
BEGIN
    //...
END
```


---------------------------------------
See: [Syntax](syntax_of_a_programdot.md) - [Declaration of structure](declaration_of_a_structuredot.md)

