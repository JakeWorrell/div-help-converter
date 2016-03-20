**IMPORT** **&lt;name of file&gt;**

The creation of libraries of functions for the language is a **very advanced** issue,
only for programmers with broad experience in the **C** language and/or **Assembler**.

The libraries must be distributed with two files: the first one, with extension **DLL**, 
containing the own library and, the second one, with the same name but with extension **TXT**, 
that must be a text file ascii (MS-DOS), explaining the purpose and working of the library. 
All the provided functions, the installation process and the use of the library must be 
explained in the second file.

The libraries must be imported from the language, by inputting the reserved word **IMPORT** 
(after the declaration of local and global data) followed by the path of the file **DLL**. 
If the file with extension **DLL** has been copied in the directory of **DIV Games Studio**, 
then it is not necessary to specify the library's path.

### Example
```
PROGRAM my_game;
IMPORT "hboy.dll";
BEGIN
    //...
END
```


From the moment when the libraries of functions can freely be developed, 
{the correct working of DIV Games Studio is not guaranteed if external libraries 
DLL are used}. The incorrect working of the **programs' debugger** can be usual when 
a DLL which modifies vital parts of the library of functions or of the processes' 
manager of DIV Games Studio is stored in a game.

---------------------------------------


### Note 1 In the first version of the DIV programming language, this
declaration had to be done between the **LOCAL** and **PRIVATE** sections of the program.

### Note 2 The libraries prepared for the first version of the language {will not
function correctly} in later versions, you must first re-compile
these libraries with the new declarations. In other words,
the font code of the libraries will still be valid, but they 
must be re-compiled with new the headline files (because they
contain the declarations for the new data and structures which exist in the language).

### Note 3 If you are a programming expert in C and Assembler, you can get more
information about the creation of new libraries in the file DLL\SOURCE\Readme.TXT on the 
DIV CD.


---------------------------------------
See: [Syntax](syntax_of_a_programdot.md)

