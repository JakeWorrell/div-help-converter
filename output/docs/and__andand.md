Binary operator of the **logical product** used in expressions and conditions.

The reserved word **AND** and the symbol** &amp;&amp;** are synonymous.

### AND logical The conditions to the right and left of the operator are first 
evaluated and, if both are **true**, this operator will return **true**. Otherwise, 
the operator will always return **false**.

  FALSE  AND FALSE  = FALSE

  FALSE AND TRUE = FALSE

  TRUE AND FALSE  = FALSE

  TRUE AND TRUE = TRUE


These are used to verify that more than one condition is satisfied; for instance:

  **(x&gt;0 AND x&lt;100)**

To verify that the variable is bigger than 0 **AND** less than 100.

### AND binary Evaluates the bits of the expressions appearing before 
and after the operator, returning the value of the bits that are common to both expressions as follows:

  0 AND 0 = 0

  0 AND 1 = 0

  1 AND 0 = 0

  1 AND 1 = 1


This rule will be applied to all the bits of the operands (in the language, these are 32 bit integers).

---------------------------------------


### Note This operator indistinctly works as logical and binary as, in the language, the **true** logical expressions are interpreted as those that have their last bit at 1 (bit 0, weight 1) or, in other words, the odd numbers (1, -1, 3, -3, ...). And the **false** logical expressions are interpreted as those having their last bit at 0 (the even numbers: 0, 2, -2, 4, -4, ...).

The operator **AND** will only leave the last bit at 1 (it will only return **true**
as a result} when both operands have this bit at 1 (when both are **true** expressions).

---------------------------------------


### Note The symbol** &amp;** can also be used as another synonymous of **AND** and  ** &amp;&amp;**.

---------------------------------------
See: [Syntax](syntax_of_a_programdot.md) - [Expression](definition_of_an_expression.md) - [Condition](definition_of_a_condition.md)

