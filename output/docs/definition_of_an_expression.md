An expression is basically a mathematical formula involving one or more **operands** (**x**, **2**, **id**, ...) through different **operators** (*****, **AND**, **&gt;&gt;**, ...); some examples of expressions would be:
**2**, **2+3** or **(x*4)/-3**.

Only integers within the range ([min_int](min_int.md) ... [max_int](max_int.md)) can be used as values. The result of the expression will always be truncated within this range.

These expressions will be evaluated when the statement containing them inside the program is executed.

The **operands** that can be used in an expression are the following ones:

    - [Constants](declaration_of_constantsdot.md).

    - **Numeric values**.

    - **Literals** (texts in inverted commas).

    - Variables, tables or structures of any kind.

    - Any kind of function or process.

    - [Identifying code](_identifying_codes_of_processesdot.md) of the process.

    - Type of process ([type &lt;name&gt;](types_of_processesdot.md)).


The **operators** that can be used in an expression are the following ones (the synonymous of the operator, if they exist, are shown in brackets):

    [ +](plus.md)    Addition

    [ -](minus.md)    Subtraction (or sign negation)

    [ *](asterisk.md)    Multiplication

    [ /](forward_slash.md)    Division

    [ MOD](mod__percent.md)  Module ([%](mod__percent.md))

    [ &lt;&lt;](ltlt.md)   Rotation to the right

    [ &gt;&gt;](gtgt.md)   Rotation to the left

    [ NOT](not__not.md)  Binary and logical negation ([!](not__not.md))

    [ AND](and__andand.md)  Binary and logical AND([&amp;](and.md), [&amp;&amp;](and__andand.md))

    [ OR](or__pipepipe__pipe.md)   Binary and logical OR([|](or__pipepipe__pipe.md), [||](or__pipepipe__pipe.md))

    [ XOR](xor__caretcaret.md)  Exclusive OR ([^](caret.md), [^^](xor__caretcaret.md))

    [ ==](equalequal.md)   Comparison

    [ &lt;&gt;](ltgt__notequal.md)   Different ([!=](ltgt__notequal.md))

    [ &gt;](gt.md)    Greater than

    [ &gt;=](gtequal__equalgt.md)   Bigger or equal ([=&gt;](gtequal__equalgt.md))

    [ &lt;](lt.md)    Less

    [ &lt;=](ltequal__equallt.md)   Less or equal ([=&lt;](ltequal__equallt.md))

    [ OFFSET](offset.md) Direction or offset ([&amp;](and.md))

    [ ++](plusplus.md)   Operator of increment

    [ --](minusminus.md)   Operator of decrement

    [ POINTER](pointer__[__].md) Addressing operator ([*](asterisk.md), [^](caret.md), [[ ]](pointer__[__].md))

    [ ( )]((__).md)  Brackets


Click on &quot;[Evaluation of an expression](evaluation_of_an_expression.md)&quot; to see the order in which the calculations are made inside an expression and when the brackets must be used.

Some examples of valid expressions are now shown:

**    -33**

**    44-2*22**

**    id**

**    x+1**

**    (angle*3)/2-pi/2**

**    (x+y)/2**

**    abs(x-y)*3-pow(x, 2)**

    ...

---------------------------------------
See: [Syntax](syntax_of_a_programdot.md) - [Evaluation of an expression](evaluation_of_an_expression.md)

