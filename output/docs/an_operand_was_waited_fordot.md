The indicated position in the program is inside the context of an expression and, at this point of the expression, an operand (a value on which it is possible to do some calculations) was waited for. Instead of it, another different element on which it is not possible to do any calculation is given.

There are several causes that can provoke this error, among which the most frequent are the following ones:

- A reserved word of the language has been used as if it was a variable,
for instance **x=global*2;**. In this case, it is possible to check whether it is a reserved word by accessing the glossary.

- An operand has been omitted inside an expression, for instance **x=2+ /y;**.

- A square bracket or a bracket that had not been previously opened has been closed inside an expression, for instance **x=);**.

Anyhow, you must check the [syntax](syntax_of_a_programdot.md) of the indicated expression to correctly construct it.

---------------------------------------
See: [Syntax](syntax_of_a_programdot.md) - [Declaration of data](declaration_of_a_variabledot.md)

