The assignment statements are used to calculate expressions and
**to assign them** to a variable.

[&lt;Reference to a variable&gt;](reference_to_a_variable.md) [=](equal.md) [&lt;expression&gt;](definition_of_an_expression.md) [;](semicolon.md)

The data in which the result of the expression is going to be stored must be indicated, followed by the symbol [=](equal.md) (symbol of the **assignment**), as well as the numeric or logical expression to evaluate when the statement is executed. After this statement, the symbol[ ;(semicolon)](semicolon.md) must always be put.

In an assignment statement it is only allowed to assign values to objects
such as any kind of variables, to a [position of a table](declaration_of_a_tabledot.md),
or to an [element of a structure](declaration_of_a_structuredot.md).

It is not possible to assign a value to a [constant](declaration_of_constantsdot.md), to a function
or to a process or, in general, to any [numeric or logical expression](definition_of_an_expression.md).

Now, a program with several assignments is shown.

### Example
```
PROGRAM my_game;
BEGIN
    x=x+1;
    angle=(angle*3)/2-pi/2;
    size=(x+y)/2;
    z=abs(x-y)*3-pow(x, 2);
    // ...
END
```


This is the basic form of the assignments, even if there are other symbols of assignment that, instead of assigning a new value to the referred variable, modify its value. These are the symbols of **operative assignments**:

[ +=](plusequal.md) Adds to the variable the result of the expression

        **x=2; x+=2;** -&gt; (x==4)

[ -=](minusequal.md) Subtracts from the variable the result of the expression

        **x=4; x-=2;** -&gt; (x==2)

[ *=](asteriskequal.md) Multiplies the variable by the result of the expression

        **x=2; x*=3;** -&gt; (x==6)

[ /=](forward_slashequal.md) Divides the variable by the result of the expression

        **x=8; x/=2;** -&gt; (x==4)

[ %=](percentequal.md) Puts in the variable the remainder of dividing it by the result of the
expression

        **x=3; x%=2;** -&gt; (x==1)

[ &amp;=](andequal.md) Performs an AND (binary and/or logical) between the variable and the result of the expression, assigning it as a new variable's value

        **x=5; x&amp;=6;** -&gt; (x==4)

[ |=](pipeequal.md) Performs an OR (binary and/or logical) between the variable and the result of the expression, assigning it as a new variable's value

        **x=5; x|=6;** -&gt; (x==7)

[ ^=](caretequal.md) Performs an exclusive OR (XOR binary and/or logical) between the data and the result of the expression, assigning it as a new variable's value

        **x=5; x^=3;** -&gt; (x==3)

[ &gt;&gt;=](gtgtequal.md) Rotates the variable to the right as many times as indicated by the result of the expression (each rotation to the right is equivalent to dividing the variable by 2)

        **x=8; x&gt;&gt;=2;** -&gt; (x==2)

[ &lt;&lt;=](ltltequal.md) Rotates the variable to the left as many times as indicated by the result of the expression (each rotation to the left is equivalent to multiplying the variable by 2)

        **x=2; x&lt;&lt;=2;** -&gt; (x==8)

Within the category of assignment statements, the **increments** and **decrements** of a variable are also allowed. For instance, if we wanted to add 1
to the local variable **x** we could do it either with the **x=x+1;** or
**x+=1;** statements, or with the operator of increment: **x++;** o** ++x;**.

That is to say, [increments ( ++ )](plusplus.md) or [decrements ( -- )](minusminus.md) of a variable are accepted as assignment statements.

---------------------------------------
See: [Syntax](syntax_of_a_programdot.md)

