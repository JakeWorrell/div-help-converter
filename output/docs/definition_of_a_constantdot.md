A constant is a constant value or a numeric expression.

As values, only integers within the range ([min_int](min_int.md) ... [max_int](max_int.md)) can be used.

The constant numeric expressions are mathematical formulas in which it is possible to use:

    - **Constants** previously defined.

    - **Numeric values**.

    - Arithmetic or logical **operators**.

    - **Literals** (texts in inverted commas).

    - The [sizeof()](sizeof().md) function.


These expressions will be evaluated when the program is compiled and their result will be used in the program's execution.

The **operators** that can be used in a constant expression are the following ones (the synonymous of the operator, if they exist, are shown in brackets).

    [ +](plus.md)    Addition

    [ -](minus.md)    Subtraction (or negative sign)

    [ *](asterisk.md)    Multiplication

    [ /](forward_slash.md)    Division

    [ MOD](mod__percent.md)  Module ([%](mod__percent.md))

    [ &lt;&lt;](ltlt.md)   Rotation to the right

    [ &gt;&gt;](gtgt.md)   Rotation to the left

    [ NOT](not__not.md)  Binary and logical negation (**!**)

    [ AND](and__andand.md)  AND binary and logical (**&amp;**,**&amp;&amp;**)

    [ OR](or__pipepipe__pipe.md)   OR binary and logical (**|**,**||**)

    [ XOR](xor__caretcaret.md)  Exclusive OR (**^**, **^^**)

    [ ==](equalequal.md)   Comparison

    [ &lt;&gt;](ltgt__notequal.md)   Different (**!=**)

    [ &gt;](gt.md)    Greater than

    [ &gt;=](gtequal__equalgt.md)   Bigger or equal (**=&gt;**)

    [ &lt;](lt.md)    Less

    [ &lt;=](ltequal__equallt.md)   Less or equal (**=&lt;**)

    [ OFFSET](offset.md) Direction or offset (**&amp;**)

    [ ( )]((__).md)  Brackets


Now, some examples of valid constants are shown:

** 0**

** -1000**

** 2+2**

** &quot;Hello!&quot;**

** 4*(2+1)**

 ...

---------------------------------------
See: [Syntax](syntax_of_a_programdot.md) - [Glossary](glossary_of_terms.md)

