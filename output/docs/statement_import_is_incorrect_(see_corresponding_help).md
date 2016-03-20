The declaration of external libraries must be done {below the headline
of the program}, in other words, after the declaration **PROGRAM name_of_program;**.
Different declarations of [IMPORT](declaration_of_librariesdot.md) can be used to declare
the use of more than one library, as in this example.

### Example
```
// Headline of the program

PROGRAM my_game;

// Declaration of libraries

IMPORT "lib1.dll";
IMPORT "lib2.dll";
//...

// And in continuation (optional) the rest of the sections that make up the program.

CONST
   //...
GLOBAL
   //...
LOCAL
   //...
PRIVATE
   //...

BEGIN
    //...
END
```


This program declares the use of the denoted libraries **lib1.dll** and
**lib2.dll** (supposed names of hypothetical libraries with external functions).

---------------------------------------


### Note 1 In the original version of DIV, this declaration had to be done 
between sections **LOCAL** and **PRIVATE** of the program.

### Note 2 The libraries prepared in the original (DIV1 or DIV2) versions of the language 
**will not function correctly** in DIV3, it is necessary first to re-compile
these libraries with new files of declarations for modern systems. It means,
that the font code of the libraries will be valid, but beforehand they must be 
re-compiled with new headline files (because they contain
declarations for the new data and structures which exist in the DIV3 language).

---------------------------------------
See: [syntax](syntax_of_a_programdot.md) - [Declaration of libraries](declaration_of_librariesdot.md)

