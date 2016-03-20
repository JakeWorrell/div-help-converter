Unary operator of logical and binary **negation** used in expressions and
conditions.

The reserved word **NOT** and the symbol **!** are synonymous.

### NOT logical If the operand is **true**, on applying this operator to it, a **false** expression will be obtained, and vice versa.

  TRUE  -&gt;  FALSE

  FALSE   -&gt;  TRUE


### NOT binary Changes all the bits of the operand. That is to say, it passes 0 to 1 and 1 to 0.

---------------------------------------


### Note This operator indistinctly works as logical and binary as, in the language, the **true** logical expressions are interpreted as those that have their last bit at 1 (bit 0, weight 1) or, in other words, the odd numbers (1, -1, 3, -3, ...). And the **false** logical expressions are interpreted as those having their last bit at 0 (the even numbers: 0, 2, -2, 4, -4, ...).

On changing the **NOT** operator, all the bits also change the last one, transforming then the even numbers into odd numbers (false expressions into
true ones) and the odd numbers into even numbers (true expressions into false ones).

---------------------------------------
See: [Syntax](syntax_of_a_programdot.md) - [Expression](definition_of_an_expression.md) - [Condition](definition_of_a_condition.md)

