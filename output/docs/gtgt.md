Binary operator of **rotation to the right**. This operator is used in the [arithmetic expressions](definition_of_an_expression.md), between two operands, to obtain the result
of rotating the first operand to the right as many times as indicated by the second one. For instance, the following rotation:

  **n** &gt;&gt; **m**

Will return **n** rotated to the right **m** times. Every rotation to the right is equivalent to dividing the number by 2. That is to say, rotating to the right once, is equivalent to dividing by 2; rotating to the right twice is equivalent to dividing by 4; 3 times is equivalent to dividing by 8, and so on.

Keep in mind that all the numbers used in this language are **integers**  (with no decimals). Therefore, an **integer** will always be returned as a result of the division (for instance, 7 divided by 2 will return 3).

Or, what is the same, (the [POW function](pow().md)**(2, m)** returns **2** raised to **m**):

  **n** / POW(2, **m**)

For instance, **16&gt;&gt;3** will return 2, **2&gt;&gt;1** will return 1, **100&gt;&gt;0** will return 100, etc.

---------------------------------------


The operator of rotation to the left (the contrary operation) is the
[symbol &lt;&lt;](ltlt.md).

---------------------------------------
See: [Syntax](syntax_of_a_programdot.md) - [Expression](definition_of_an_expression.md)

