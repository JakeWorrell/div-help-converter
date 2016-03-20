**calculate(**&lt;text with a numeric expression&gt;**)**

### Returns

The result of the numeric expression.

### Description

Allows you to convert a literal (or text between quotation marks), which contains a
number or numeric expression, to a constant value which can be assigned to any
data.

Allows you to convert some text into a number; for example, the
statement **x=calculate(&quot;234&quot;);** will assign the value **234** to the variable
**x** (exactly the same as with the statement **x=234;**). The function [itoa()](itoa().md)
allows the opposite operation, to convert a number into text.

But also, the function **calculate()** can evaluate an expression, contained
in the text with some operators, that can be the following (all the symbols
accepted by each operator are indicated):

** + -**      Addition and substraction.

** * /**      Multiplication and division.

** % MOD**    Modulus, or rest of an entire division.

** &lt; &lt;&lt;**     Binary rotation to the left.

** &gt; &gt;&gt;**     Rotation to the right.

** ^ ^^ XOR** OR binary exclusive.

** | || OR**  OR binary.

** &amp; &amp;&amp; AND** AND binary.

** ! NOT**    Binary negation.

** SQRT**     Square root.


Parentheses **( )** can also be used the to indicate priorities
inside of the calculation of the expression. For example, **calculate(**&quot;(2+3)*4&quot;**)**
would return the value **20** as a result.

---------------------------------------


### Note The operation of this function is very similar to the window
of the [calculator](help_about_the_calculator.md) (**System\Calculator**) of the windows environment.

---------------------------------------


### Example program
```
PROGRAM example_calculate;

GLOBAL
    STRING calculation;
    result;

BEGIN
    write(0,0,0,0,"Introduce an expression:");
    write(0,0,10,0,calculation);
    write(0,0,30,0,"Result:");
    write_int(0,0,40,0,OFFSET result);
    LOOP
        SWITCH(ascii)
            CASE 8:
                calculation--;
            END
            CASE 27:
                calculation="";
            END
            CASE 0..31:
            END
            DEFAULT:
                calculation+=ascii;
            END
        END

        result = calculate(calculation); // Evaluates the calculation

        IF (timer MOD 100>50)
            calculation+="_";
        ELSE
            calculation+=" ";
        END
        FRAME;
        calculation--;
    END
END
```


This example program allows you to introduce an expression to a string of text
(See [STRING](data_of_type_string.md)) and then evaluates it with the function
**calculate()** to show the result of the same string.

---------------------------------------


### Note if an error is produced in the evaluation of the expression (for example,
if there exists any parenthesis which are not closed again), the function will return **0** as
its result.

---------------------------------------
See: [itoa()](itoa().md) - [write()](write().md) - [STRING](data_of_type_string.md)

