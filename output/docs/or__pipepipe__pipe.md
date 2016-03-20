Binary operator of **logical addition** used in expressions and conditions.

The reserved word **OR** and the symbols** ||** and** |**are synonymous.

### OR logical The conditions to the right and left of the operator are first evaluated and if, at least, one of them is **true**, this operator will return **true**. Otherwise, the operator will always return **false** (when both conditions are **false**).

 FALSE  OR FALSE  = FALSE

 FALSE OR TRUE = TRUE

 TRUE OR FALSE  = TRUE

 TRUE OR TRUE = TRUE


It is used to verify that one of the specified conditions is complied; for instance:

  **(x&gt;0 OR y&gt;0)**

To verify that, at least, one of both variables is bigger than 0. That is to say, it is verified that the first **OR** the second conditions are complied.

### OR binary Evaluates the bits of the results of the expressions appearing before and after the operator, giving as a result a value that will have at 1 the bits that any of the expressions would have at 1.

  0 OR 0 = 0

  0 OR 1 = 1

  1 OR 0 = 1

  1 OR 1 = 1


This rule will be applied to all the bits of the operands (in the language, they are 32 bit integers).

---------------------------------------


### Note This operator indistinctly works as logical and binary as, in the language, the **true** logical expressions are interpreted as those that have their last bit at 1 (bit 0, weight 1) or, in other words, the odd numbers (1, -1, 3, -3, ...). And the **false** logical expressions are interpreted as those having their last bit at 0 (the even numbers: 0, 2, -2, 4, -4, ...).

The operator **OR** will leave the last bit at 1 (it will return **true**
as a result) when one of any of the operands have this bit at 1 (when, at least, one of the two expressions is **true**).

---------------------------------------
See: [Syntax](syntax_of_a_programdot.md) - [Expression](definition_of_an_expression.md) - [Condition](definition_of_a_condition.md) - [XOR](xor__caretcaret.md)

