The number of values indicated in the initiation does not coincide with the previous declaration of the structure.

### Example
```
PROGRAM my_game;
GLOBAL
    STRUCT my_structure[9];
        STRING name;
        x,y;
    END = 10 dup ("AAA",0); // Error: Incorrect initiation.
BEGIN
    //...
END
```


In the last example the program declares a structure of three fields, and then 
initiates it as if it had only two fields.

You must check the original declaration, always remembering that a
structure as **my_structure[9]** has **10** registers (from **0** to **9**). For example,
the valid initiation for the structure would be:

  10 **dup (**&quot;AAA&quot;**,** 0**,** 0**);**


---------------------------------------
See: [syntax](syntax_of_a_programdot.md)

