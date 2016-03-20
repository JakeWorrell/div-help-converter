The compiler was expecting for the file name to appear in inverted commas after the reserved word [IMPORT](declaration_of_librariesdot.md).

To declare the use of an external library, it is necessary to put a declaration
like that of the following example.

### Example
```
PROGRAM my_game;
IMPORT "library.dll";
BEGIN
    //...
END
```


This program declares the use of the library called **library.dll**
(alleged name of an hypothetical library of external functions).

This declaration must be put just before the [PRIVATE](declaration_of_private_datadot.md) section or the
[BEGIN](begin.md) of the main program. It is possible to make several [IMPORT](declaration_of_librariesdot.md) declarations in a row to declare the use of more than one library

---------------------------------------
See: [Syntax](syntax_of_a_programdot.md) - [Declaration of libraries](declaration_of_librariesdot.md)

