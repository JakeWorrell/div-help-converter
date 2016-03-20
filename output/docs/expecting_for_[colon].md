The indicated position in the program is inside a [SWITCH](switch_statement.md) statement,
after the beginning of a section with &quot;[CASE](case.md) value&quot;. For that reason, the compiler was expecting for the symbol[ :](colon.md) to appear in this position preceding the statements of that section.

The syntax of the [SWITCH](switch_statement.md) statement is, broadly speaking, as follows:

    [SWITCH](switch_statement.md) [( ]((__).md)expression[ )](or__pipepipe__pipe.md)

        [CASE](case.md) value[ :](colon.md)

            statements[;](semicolon.md)

        [END](end.md)

        [CASE](case.md) value**#, .. **value[ :](colon.md)

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

For a more detailed description of the [SWITCH](switch_statement.md) statement,
consult the syntax of the language.

---------------------------------------
See: [Syntax](syntax_of_a_programdot.md) - [Statement SWITCH](switch_statement.md)

