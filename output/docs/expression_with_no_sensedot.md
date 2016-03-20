In the indicated position of the program, the compiler has supposed that a statement of the following types started:

    Assignments, e.g.:

    &lt;data&gt;** = **&lt;expression&gt;** ; **

    Increments or decrements, e.g.:

    &lt;data&gt;** ++ ;**

    Call to a process or function, e.g.:

    &lt;name_process&gt;** ( **...** ) ;**

Nevertheless, it has found an expression that apparently makes no sense, as once its operations have been done, its result is not used for any purpose.

It is probably an isolated operator that has been left out of a statement, for instance, because an operator has been lost.

### Example
```
PROGRAM my_game;
BEGIN
    x+1; // Error: Expression with no sense.
    //...
END
```


This error is reported in this example, as the **x+1;** statement is not useful; it adds the **x** variable and the constant **1** but then, this result is not used for any purpose. If the aim is to add **1** to the **x** variable, then the following statement must be used:

    **x=x+1;**

Here, the **x** variable and the constant **1** are added and then this result is assigned to the **x** variable. It could have also been done with the **x++;** statement (incrementing x).

---------------------------------------
See: [Syntax](syntax_of_a_programdot.md) - [Statement of assignment](assignment_statementdot.md)

