Logical and binary operator of **exclusive OR** used in expressions and conditions.

The reserved word **XOR** and the symbol** ^^** are synonymous.

### XOR logical The conditions on the right and left of the operator are first evaluated and, if (only one) is **true**, this operator will return **true**. Otherwise, the operator will always return **false**.

 FALSE  XOR FALSE  = FALSE

 FALSE XOR TRUE = TRUE

 TRUE XOR FALSE  = TRUE

 TRUE XOR TRUE = FALSE


It is used to verify that one (and only one) of the two specified conditions is complied; for instance:

  **(y&gt;0 XOR x&gt;0)**

To verify either that the first variable is bigger than 0, or (exclusive&quot;or&quot;) that the second variable (but not the first one) is bigger than 0.

### XOR binary Evaluates the bits of the results of the expressions appearing before and after the operator, giving as a result a value of 1
only for those bits that had at 1 one (and only one) of the expressions.

  0 XOR 0 = 0

  0 XOR 1 = 1

  1 XOR 0 = 1

  1 XOR 1 = 0


This rule will be applied to all the bits of the operands (in the language, they are integers of 32 bits).

---------------------------------------


### Note This operator indistinctly works as logical and binary as, in the language, the **true** logical expressions are interpreted as those that have their last bit at 1 (bit 0, weight 1) or, in other words, the odd numbers (1, -1, 3, -3, ...). And the **false** logical expressions are interpreted as those having their last bit at 0 (the even numbers: 0, 2, -2, 4, -4, ...).

The operator **XOR** will only leave the last bit at 1 (it will only return **true**
as a result} when one (and only one) of both operands have this bit at 1 (when only one of the two expressions is **true**).

---------------------------------------


### Note The symbol** ^** can also be used as another synonymous of **XOR **  and** ^^**.

---------------------------------------
See: [Syntax](syntax_of_a_programdot.md) - [Expression](definition_of_an_expression.md) - [Condition](definition_of_a_condition.md) - [OR](or__pipepipe__pipe.md)

