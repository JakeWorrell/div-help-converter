The syntax of the [SWITCH](switch_statement.md) statement is, broadly speaking, as follows:

    [SWITCH](switch_statement.md) [( ]((__).md)expression[ )]((__).md)

        [CASE](case.md) value[ :](colon.md)

            statements[;](semicolon.md)

        [END](end.md)

        [CASE](case.md) value[ .. ](dotdot.md)value[ :](colon.md)

            statements[;](semicolon.md)

        [END](end.md)

        [CASE](case.md) value, value, value[ :](colon.md)

            statements[;](semicolon.md)

        [END](end.md)

        //...

        [DEFAULT](default.md) [:](colon.md)

            statements[;](semicolon.md)

        [END](end.md)

    [END](end.md)

The position indicated in the program is inside a [SWITCH](switch_statement.md) statement,
but out of a [CASE](case.md) or [DEFAULT](default.md) section. For that reason, the compiler was expecting for one of the three following statements to appear in that position:

- The reserved word [CASE](case.md) starting a new section to be executed
when the expression would coincide with the indicated value.

- The reserved word [DEFAULT](default.md) starting a section by default to be executed when the expression would not coincide with any of the values
indicated in the different sections [CASE](case.md).

- The reserved word [END](end.md) finishing the [SWITCH](switch_statement.md) statement.

For a more detailed description of the [SWITCH](switch_statement.md) statement,
consult the syntax of the language.

---------------------------------------
See: [Syntax](syntax_of_a_programdot.md) - [Statement SWITCH](switch_statement.md)

