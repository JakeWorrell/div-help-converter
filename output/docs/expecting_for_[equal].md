To define a constant, a symbol [=](equal.md) must be put after the name of the constant.

The compiler has understood that the last defined word was the name of a new [constant](declaration_of_constantsdot.md) and, in the indicated position, it was expected for the symbol of assignment ([=](equal.md)) to be shown.

### Example
```
PROGRAM my_game;
CONST
    a=0;
    b=1;
    c,d; // Error: expecting for [=].
BEGIN
    //...
END
```


---------------------------------------
See: [Syntax](syntax_of_a_programdot.md) - [Declaration of data](declaration_of_a_variabledot.md)

