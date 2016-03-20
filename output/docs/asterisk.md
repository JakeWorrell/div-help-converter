Arithmetic operator of whole **multiplication**. This operator is used in the [arithmetic expressions](definition_of_an_expression.md) between two operands, to obtain the result of their multiplication.

For instance, **2 * 8** will return **16**, **99 * 0** will return **0**, **2 * -1**
will return** -2**, etc.

All the variables are 32 bit **integers** with sign in the language.
Therefore, only integers within the range ([min_int](min_int.md) ... [max_int](max_int.md))} can be used. Then, when the result of the **multiplication** must exceed that range, **incorrect results will be shown**. In this case, the system won't report any error. Hence, much care must be taken.

---------------------------------------


This symbol is bi functional; it has two different uses depending on whether it is used as an unary or binary operator.

A **UNARY** operator appears inside an expression, simply preceding an operand (as if it was its sign). In this case, the operator ***** will be a synonymous of [POINTER](pointer__[__].md).

**Example: &amp;x** is equivalent to **POINTER x**

A **BINARY** operator appears inside an expression, concatenating
two operands (showing an operation between both). In this case, the
operator ***** will be the arithmetic operator of **multiplication** previously explained.

---------------------------------------
See: [Syntax](syntax_of_a_programdot.md) - [Expression](definition_of_an_expression.md) - [POINTER](pointer__[__].md)

