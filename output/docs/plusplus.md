Operator of increment. This operator, derived from the C language, allows us to increment the value 
of a variable (to add 1 to it) without requiring an
[assignment statement](assignment_statementdot.md) for that purpose.

The variable can be a variable, a **position of a table**, or a **field of a structure**.

This operator can be included in an expression with two forms:
**pre-increment** and **post-increment**.

**Operator of pre-increment.**

When the symbol ** ++** is put just before a variable, 1 will be added to it **before the execution of the statement**. As examples, see the following statements:

** ++x;** - statement that will add 1 to the **x** variable.

** z=++x+y;** - statement that will add 1 to the **x** variable and then, it will assign
the addition between **x** (already incremented) and **y** to the **z** variable.

**Operator of post-increment.**

When the symbol** ++** is put just after a variable, 1 will be added to it **after the execution of the statement**. As examples, see the following statements:

** x++;** - statement that will add 1 to the **x** variable.

** z=x+y++;** - statement that will assign the addition between **x** and **y** to the **z** variable, incrementing then the **y** variable.

---------------------------------------


### Summary

Generally, a** ++variable;** or **variable++;** type statement is always equivalent
to the following statement: **variable=variable+1;** (or **variable+=1;**).

The difference between the **pre-increment** and the **post-increment** is that in the first case, the value of the variable already incremented is taken to evaluate the rest of the expression, while in the second case, the expression is evaluated with the value that the variable had before being incremented.

---------------------------------------
See: [Syntax](syntax_of_a_programdot.md) - [Expression](definition_of_an_expression.md) - [Decrement(--)](minusminus.md)

