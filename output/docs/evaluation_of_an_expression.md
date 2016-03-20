It is important to know the way in which the expressions are evaluated in order to know where it is necessary to put brackets indicating the way in which the expression is intended to be evaluated.

In the language, an expression can contain operators of different levels of priority.

In the evaluation of an expression, the operators of **priority 1** (if they exist), will always be processed first, and then, those of **priority 2**, **priority 3** and so on.

Priority 1

    [ ( )]((__).md)  Brackets, beginning and end of a sub expression


Priority 2

    [ .](dot__minusgt.md)    Period, access' operator to local data and structures


Priority 3

    [ NOT](not__not.md)  Binary and logical negation (#1045,**!**)

    [ OFFSET](offset.md) Offset (#1050,**&amp;**)

    [ POINTER](pointer__[__].md) Addressing operator ([*](asterisk.md), [^](caret.md), [[ ]](pointer__[__].md))

    ** -**  Sign negation

    [ ++](plusplus.md)   Operator of increment

    [ --](minusminus.md)   Operator of decrement


Priority 4

    [ *](asterisk.md)    Multiplication

    [ /](forward_slash.md)    Division

    [ MOD](mod__percent.md)  Module ([%](mod__percent.md))


Priority 5

    [ +](plus.md)    Addition

    [ -](minus.md)    Subtraction


Priority 6

    [ &lt;&lt;](ltlt.md)   Rotation to the right

    [ &gt;&gt;](gtgt.md)   Rotation to the left


Priority 7

    [ AND](and__andand.md)  Binary and logical AND ([&amp;](and.md), [&amp;&amp;](and__andand.md))

    [ OR](or__pipepipe__pipe.md)   Binary and logical OR ([|](or__pipepipe__pipe.md), [||](or__pipepipe__pipe.md))

    [ XOR](xor__caretcaret.md)  Exclusive OR ([^](caret.md), [^^](xor__caretcaret.md))


Priority 8

    [ ==](equalequal.md)   Comparison

    [ &lt;&gt;](ltgt__notequal.md)   Different ([!=](ltgt__notequal.md)

    [ &gt;](gt.md)    Greater than

    [ &gt;=](gtequal__equalgt.md)   Bigger or equal ([=&gt;](gtequal__equalgt.md)

    [ &lt;](lt.md)    Less

    [ &lt;=](ltequal__equallt.md)   Less or equal ([=&lt;](ltequal__equallt.md)


Priority 9

    [ =](equal.md)    Assignment

    [ +=](plusequal.md)   Addition-assignment

    [ -=](minusequal.md)   Subtraction-assignment

    [ *=](asteriskequal.md)   Multiplication-assignment

    [ /=](forward_slashequal.md)   Division-assignment

    [ %=](percentequal.md)   Module-assignment

    [ &amp;=](andequal.md)   AND-assignment

    [ |=](pipeequal.md)   OR-assignment

    [ ^=](caretequal.md)   XOR-assignment

    [ &gt;&gt;=](gtgtequal.md)  Rotation to the right-assignment

    [ &lt;&lt;=](ltltequal.md)  Rotation to the left-assignment


The operators of **priority 3** are known as **unary** operators. They do not link two operands (unlike the **binary** operators such as, for instance, a multiplication), but they just affect the value of an operator. Inside the **unary** operators, those closest to the operand will be executed first. For instance, in the expression:

  **NOT -x**

The operand **x** has two **unary** operators, the negation of sign** -** and
the logical and/or binary [NOT](not__not.md). Among them, the negation of sign will be executed first, as it is closer to the operand.

From **priority 4**, all the operators are **binary** and they will be executed according to their level of priority. Therefore, when in an expression there is more than one operator of the same level (for instance, a multiplication and a division, both of priority 4), they will be processed from left to right. That is to say, in the following expression:

  **8/2*2**

The division will be executed first and then, the multiplication (it is the natural way to evaluate the expressions mathematically).

The only exception are the operators of **priority 9** (**assignment** operators),
that will be evaluated from right to left (instead of from left to right). That is to say, in the expression:

  **x=y=0**

**y=0** will be processed first (**y** will be put at **0**) and then, **x=y** (**x** will also be put at **0**, as **y** will now be equal to **0**).

As it can be noticed, the assignments work like an operator
After the assignment, they return the value they have assigned as a result of the operation.

---------------------------------------
See: [Syntax](syntax_of_a_programdot.md) - [Definition of an expression](definition_of_an_expression.md)

