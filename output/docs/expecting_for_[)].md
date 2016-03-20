The compiler was  expecting for a bracket previously open with the symbol [)]((__).md) to be closed at the indicated position.

This error normally appears for one of the two following reasons:

- In an expression, several brackets have been opened and then some of them have not been closed. In this case, the opened brackets must be closed.

- Inside an expression in brackets, any operator has been omitted, then appearing  two operands in a row, for instance, **(2*3 4)**. In this case, it is necessary to indicate the lacking operator.

---------------------------------------
See: [Syntax](syntax_of_a_programdot.md)

