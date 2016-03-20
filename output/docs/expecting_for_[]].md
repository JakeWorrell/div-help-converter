The compiler was expecting for a square bracket previously opened, with the symbol []](pointer__[__].md) to be closed in the indicated position.

This error normally appears for one of the following reasons:

- The opening of a square bracket (**[**) has been indicated in a table or structure and, after having indicated its length or index, it has not been closed. In this case, the symbol **]** must be added in the indicated position.

- On indicating the index of a table or structure, any operator has been omitted, then appearing, two operands in a row, for instance **table[2*3 4]**. It is necessary now to indicate the lacking operator.

---------------------------------------
See: [Syntax](syntax_of_a_programdot.md)

