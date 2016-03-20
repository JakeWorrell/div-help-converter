It is accessing a structure indicating less dimensions than required.

It means that a structure of two dimensions is attempting to use one dimension as its
parameters or a structure of three dimensions is attempting to use it as a two
dimensional structure.

### Example
```
PROGRAM my_game;
GLOBAL
    STRUCT structure1[9,9];
      n;
      //...
    END
BEGIN
    //...
    structure1[0].n=0; // Error: A comma was expected.
END
```


Check the previous declaration of the named structure of data in the program.


---------------------------------------
See: [syntax](syntax_of_a_programdot.md)

