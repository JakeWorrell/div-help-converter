The compiler was expecting for a global, local or private variable of the process in the indicated position of the program.

The syntax of the [FROM](from_statement.md) loop statement is the following one:

**FROM** &lt;variable&gt;**=**[&lt;constant&gt;](definition_of_a_constantdot.md) [TO](to.md) [&lt;constant&gt;](definition_of_a_constantdot.md) [STEP](step.md) [&lt;constant&gt;](definition_of_a_constantdot.md)**;**

    [&lt;statement&gt;](declaration_of_statementsdot.md) **;**

    ...

**END**

Being the **STEP &lt;constant&gt;** declaration optional.

After the reserved word [FROM](from_statement.md), the [name](definition_of_a_namedot.md) of a variable (normally local or private) of the process must appear directly.

If the aim is to use a variable of another process, a table or an element of a structure as a counter, the [FOR](for_statement.md) statement must be used instead of [FROM](from_statement.md), as it allows us to define the conditions of the loop more freely.

---------------------------------------
See: [Syntax](syntax_of_a_programdot.md) - [Statement FROM](from_statement.md)

