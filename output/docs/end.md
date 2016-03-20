This reserved word marks the end of one of the following statements:

  [BEGIN](begin.md)

  [IF](if_statements.md)

  [WHILE](while_statement.md)

  [SWITCH](switch_statement.md)

  [CASE](case.md)

  [DEFAULT](case.md)

  [FOR](for_statement.md)

  [FROM](from_statement.md)

  [LOOP](loop_statement.md)

  [CLONE](clone_statement.md)


That is to say, the function of the word **END** is **to delimit where a statement finishes**.

Keep in mind that the statements may be nested (they may be included one inside another). Therefore, if a program is not well structured (tabulating the code), it can be difficult to find out to which statement each **END** corresponds.

For instance, in the following code it is possible to see clearly to which statement each **END** belongs.

**BEGIN**

    **IF (x&gt;0)**

        **x=x-1;**

    **END**

**END**


But this same code could have been expressed as follows:

**BEGIN**

    **IF (x&gt;0)**

    **x=x-1;**

**END**

    **END**


being much more complicated the reading of the program, even if for the compiler of the language **both code blocks are exactly the same** (the compiler will continue to interpret that the first **END** is that of the **IF** statement and the second one that of the **BEGIN** statement, even if they are incorrectly tabulated).

---------------------------------------
See: [Syntax](syntax_of_a_programdot.md)

