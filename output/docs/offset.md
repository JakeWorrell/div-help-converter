The reserved word **OFFSET** allows us to obtain the offset of a
variable inside the computer's memory.

All the data of a program correspond with any specific position of the memory in which its value is stored. The operator **OFFSET** allows us to obtain this position as a numeric value.

This operator is mainly used in the parameters of any of the language's functions. Thus, these functions are able to modify these parameters.

If you have a variable (called, for instance, **my_variable**) with value **321** and this variable is passed, as a parameter, to a parameter function, the number 321 is being passed to the function. Then, the function won't be able to modify the variable, as it knows its value but not **where the variable is** (because many
**321** values may exist in the whole computer's memory, and it won't know which of them is the variable).

If **OFFSET my_variable** is passed to this function as a parameter, it is receiving information about the place in which the variable value is stored. Then, the function will be able to access this value in order to consult it or modified it.

For further information about this operator, it is possible to access the
[operator POINTER](pointer__[__].md) that does the operation opposite to that of the operator **OFFSET** (it obtains the value stored in a specific position of the memory).

---------------------------------------


The [symbol &amp;](and.md) can be used as **synonymous** of the reserved word **OFFSET**.

---------------------------------------
See: [Syntax](syntax_of_a_programdot.md) - [POINTER](pointer__[__].md)

