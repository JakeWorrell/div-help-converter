A constant is a constant value or numeric expression (see [&lt;definition of constant&gt;](definition_of_a_constantdot.md)).

The lists of constants are basically a series of constants separated by [commas (,)](comma.md) and they are used to initialise the values of tables or structures.

An example of a list of constants is shown below:

1, 2, 3, 4, 5;

But, besides this basic definition, the use of the operator [DUP](dup.md) is allowed to repeat a series of constants a specific number of times. For instance, the following list:

0, 100 DUP (1, 2, 3), 0;

It is a list of 302 constants (0, 1, 2, 3, 1, 2, 3, ..., 1, 2, 3, 0). That is to say, that
the operator [DUP](dup.md) (duplication) allows us to repeat the sequence appearing after it in brackets, the indicated number of times.

It is possible to nest operations [DUP](dup.md). For instance, the following list:

2 **DUP** (88, 3 DUP (0, 1), 99);

would be equivalent to:

88, 0, 1, 0, 1, 0, 1, 99, 88, 0, 1, 0, 1, 0, 1, 99;

Moreover, the omission of the operator [DUP](dup.md), that
**2 DUP (0, 1)** is equivalent to **2(0, 1)**, is allowed.

The operator DUP is specially useful to initialise structures. If, for instance, the aim is to initialise the following 100 record structure:

**STRUCT a[99]**

    **b;**

    **c[9];**

    **d[9];**

**END**

With the fields **b** initialised at **0**, the fields **c[9]** at **1** and the fields
**d[9]** at **2**, the following list of initialisation would be used:

100 [DUP](dup.md) (0, 10 DUP(1), 10 DUP(2));

---------------------------------------
See: [Syntax](syntax_of_a_programdot.md)

