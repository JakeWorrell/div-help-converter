The symbol **=** (symbol of **assignment**) is used in the language inside the [data declarations](declaration_of_a_variabledot.md)
to initialise them to their initial value. In the [assignment statements](assignment_statementdot.md), this symbol is used
to separate the reference to the variable from the assigned expression.

Inside an expression, this operator can be used as a conventional binary arithmetic operator, 
which is placed between two operands, returning
the second operand's value as a result (besides assigning this result to the variable defined as first operand).

This operator represents an **imperative order** according to which, on executing the statement that contained it, the first operand (before the symbol) will take the value of the second operand (or expression after the symbol).

On evaluating an expression, the assignment operands are always those of **less priority** (the last ones that are interpreted in the expression),
being possible to use brackets to force a bigger priority. If, in an expression (or statement) several assignment operands have been used,
they will be evaluated (executed) from right to left.

For instance, in the statement:

  **x=y=x+y;**

The addition (**x+y**) will first be done. Then, the result will be assigned as the new value of the **y** variable (**y=x+y**) and, finally, this same value will be assigned to the **x** variable (**x=y**).


---------------------------------------
See: [Syntax](syntax_of_a_programdot.md) - [Data declarations](declaration_of_a_variabledot.md) - [Assignment statements](assignment_statementdot.md)

