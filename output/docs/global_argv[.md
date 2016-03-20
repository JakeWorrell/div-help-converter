**argv[];** // Arguments of the program

**argc;**   // Number of arguments---------------------------------------


You can access the last parameters of the program (normally after executing it from MS-DOS), 
in a similar way to how it is done in the programming language C, in the global predefined 
data **argc** and **argv[]**.

The variable **argc** will contain, after executing the program, a number of parameters.
the min number of parameters is **1**, because the program always counts as a parameter the name 
of the game executable.

The table **argv[]** is a list of **text strings**, and will contain as many elements
as are indicated in the variable **argc**, but the name of the program will always be 
stored in **argv[0]**.

---------------------------------------


### Note When a program executes from the DIV environment, it will not receive any more 
parameters, just the name of the executable. Therefore these variables will be useful
only for the versions already installed in the programs.

---------------------------------------
See: [global data](predefined_global_data.md)

