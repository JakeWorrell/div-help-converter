In the indicated position of the program there is an expression incorrectly constructed, so the compiler can not interpret it.

- Check the [syntax](syntax_of_a_programdot.md) of the expression.

- If the error is not found, try to express it in a different way.

- Try to divide the expression into several subexpressions, sequentially and separately doing the different calculations done in the original expression. For instance, the expression:

  **x=(x*4+1)/2;**

  can be expressed as the three following expressions:

  **x=x*4;**

  **x=x+1;**

  **x=x/2;**


  Thus, it is possible to locate the exact point in which the operation that can not be done is.

---------------------------------------
See: [Syntax](syntax_of_a_programdot.md) - [Definition of expression](definition_of_an_expression.md)

