Operative assignment. Binary operation of **rotation to the left**.

The [assignment statements](assignment_statementdot.md) are used to calculate expressions and **assign them** to a variable.

[&lt;reference to a variable&gt;](reference_to_a_variable.md) **=** [&lt;expression&gt;](definition_of_an_expression.md) **;**

If the symbol **&lt;&lt;=** is used instead of **=** to perform the assignment,
the result of the following rotation will be assigned to the variable:

  [**previous_value_of_the_variable**] &lt;&lt; [**result_of_the_expression**]

Or, what is the same, (the [POW function](pow().md)**(2, n)** returns **2** raised to **n**):
 
  [**previous_value_of_the_variable**] * POW(2, [**result_of_the_expression**]

That is to say, if the result of the expression is:

  0 -&gt; the variable will maintain its value.

  1 -&gt; the variable will be multiplied by 2.

  2 -&gt; the variable will be multiplied by 4.

  3 -&gt; the variable will be multiplied by 8.

  ...

Example: **x=2; x&lt;&lt;=2;** -&gt; (x=8)

---------------------------------------


### Note This symbol is a simple abbreviation derived from the **C language**. Anyhow, the **n &lt;&lt;= m;** type statement will be equivalent to this other **n = n &lt;&lt; m;** statement.

See the operator [&lt;&lt;](ltlt.md) for further information about the **rotation to the left**.

---------------------------------------
See: [Syntax](syntax_of_a_programdot.md) - [Assignment](assignment_statementdot.md)

