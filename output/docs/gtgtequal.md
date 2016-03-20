Operative assignment. Binary operation of **rotation to the right**.

The [assignment statements](assignment_statementdot.md) are used to calculate expressions and **assign them** to a variable.

[&lt;Variable reference&gt;](reference_to_a_variable.md) **=** [&lt;expression&gt;](definition_of_an_expression.md) **;**

If the symbol **&gt;&gt;=** is used instead of **=** to perform the assignment,
the result of the following rotation will be assigned to the variable:

  [**previous_value_of_the_variable**] &gt;&gt; [**result_of_the_expression**]

Or, what is the same, (the [POW function](pow().md)**(2, n)** returns **2** raised to **n**):
 
  [**previous_value_of_the_variable**] / POW(2, [**result_of_the_expression**]

That is to say, if the result of the expression is:

  0 -&gt; the variable will maintain its value.

  1 -&gt; the variable will be divided by 2.

  2 -&gt; the variable will be divided by 4.

  3 -&gt; the variable will be divided by 8.

  ...

Example: **x=8; x&gt;&gt;=2;** -&gt; (x=2)

The result of a rotation to the right will always be an integer,
with no decimals or, what is the same, the quotient of the previous whole division.

Example: **x=9; x&gt;&gt;=2;** -&gt; (x=2)

---------------------------------------


### Note This symbol is a simple abbreviation derived from the **C language**. Anyhow, the **n &gt;&gt;= m;** type statement will be equivalent to this other **n = n &gt;&gt; m;** statement.

See the operator [&gt;&gt;](gtgt.md) for further information about the **rotation to the right**.

---------------------------------------
See: [Syntax](syntax_of_a_programdot.md) - [Assignment](assignment_statementdot.md)

