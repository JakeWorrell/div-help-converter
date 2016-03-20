The symbol **;** (semicolon) is used in many points of a program to indicate always that a statement or any kind of declaration finishes. This is called **finishing** symbol, whose only purpose is to indicate the end of something.

In the language, the following points of the program must be indicated with semicolon:

- The end of the [PROGRAM declaration](programapostrophes_headdot.md).

- The end of a [declaration of a variable](declaration_of_a_variabledot.md).

- The end of an [IMPORT declaration](declaration_of_librariesdot.md).

- The end of the following statements:

    [Assignments or increments of data](assignment_statementdot.md).

    [Calls to processes](call_to_a_process.md).

    [Calls to functions](list_of_functions_of_the_languagedot.md).

    [FRAME](frame_statement.md), [RETURN](return_statement.md), [DEBUG](debug_statement.md), [BREAK](break_statement.md) and [CONTINUE](_continue_statement.md).

- The end of the beginning of a loop [FROM](from_statement.md).

- And separating the different parts of a [FOR](for_statement.md) statement.

The compiler will indicate the lacking of the symbol **;** in any of these points.

It is also possible to put this symbol in other specific points of the programs, such as after any other kind of statement, even if it will be optional in this case and, therefore, the compiler won't report its lacking.

---------------------------------------


Actually, the symbols **;** (semicolon) and **:** (colon) are synonymous
in this language. That is to say, they can be used indistinctly.

However, similarly to what happens in other programming languages,
the symbol **semicolon** is normally used to finish statements and the symbol **colon** 
is normally used inside the syntax of the [SWITCH statement](switch_statement.md).

---------------------------------------
See: [Syntax](syntax_of_a_programdot.md)

