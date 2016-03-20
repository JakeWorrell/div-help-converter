To initialise [constants](declaration_of_constantsdot.md), variables, tables and structures it is necessary to use numeric values or expressions whose value may be determined when the program is compiled.

An expression starts in the indicated position. The value of this expression has not been resolved in compilation time, probably because it uses global, local or private data, or because a function is called.

In constant expressions, it is only possible to use:

    - [Constants](declaration_of_constantsdot.md) previously defined.

    - **Numeric values**.

    - Arithmetic or logical **operators**.

    - **Literals** (texts in inverted commas).

    - The [sizeof()](sizeof().md) function.


### Example
```
PROGRAM my_game;
GLOBAL
    my_variable=4;
    position=2*my_variable; // Error: A constant expression was waited for.
BEGIN
    //...
END
```


In this example, **position** can not be initialised, as the **x** local variable is being used for that purpose.

---------------------------------------
See: [Syntax](syntax_of_a_programdot.md) - [Definition of constants](definition_of_a_constantdot.md)

