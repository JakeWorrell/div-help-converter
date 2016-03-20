Binary operator of **rotation to the left**. This operator is used in the [arithmetic expressions](definition_of_an_expression.md), 
between two operands, to obtain the result of rotating the first operand to the left as 
many times as indicated by the second. For instance, the following rotation:

  **n** &lt;&lt; **m**

Will return **n** rotated to the left **m** times. Every rotation to the left is equivalent to multiplying the number by 2. That is to say, rotating to the left once, is equivalent to multiplying by 2; rotating to the left twice is equivalent to multiplying by 4; 3 times is equivalent to multiplying by 8, and so on.

Or, what is the same, (the [POW function](pow().md)**(2, m)** returns **2** raised to **m**):

  **n** * POW(2, **m**)

For instance, **2&lt;&lt;3** will return 16, **4&lt;&lt;1** will return 8, **100&lt;&lt;0** will return 100, etc.

All the variables are 32 bit **integers** with sign in the language.
Therefore, only integers within the range ([min_int](min_int.md) ... [max_int](max_int.md))} can be used. 
Then, when the result of the **rotation** must exceed that range, **incorrect results will be shown**. 
In this case, the system won't report any error. Hence, much care must be taken.

---------------------------------------


The operator of rotation to the right (the contrary operation) is the
[symbol &gt;&gt;](gtgt.md).

---------------------------------------
See: [Syntax](syntax_of_a_programdot.md) - [Expression](definition_of_an_expression.md)

