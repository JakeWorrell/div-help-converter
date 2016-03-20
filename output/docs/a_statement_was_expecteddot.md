The indicated position of the program is within the context of a block of statements. Thus, a statement was expected to start in the indicated position. These are the possible types of statements:

assignment statements

&lt;expression&gt;[=](definition_of_an_expression.md)&lt;expression&gt;;

control statements

[IF](if_statements.md) and [SWITCH](switch_statement.md).

loop statements

[FROM](from_statement.md), [WHILE](while_statement.md), [REPEAT](repeat_statement.md), [LOOP](loop_statement.md) and [FOR](for_statement.md).

break statements

[BREAK](break_statement.md), [CONTINUE](_continue_statement.md) and [RETURN](return_statement.md).

special statements

[FRAME](frame_statement.md), [CLONE](clone_statement.md) and [DEBUG](debug_statement.md).

Being possible that, in this position, one of the following reserved words that can mark the end of a block of statements appear:

[END](end.md), [ELSE](else.md) and [UNTIL](until.md).

### Example
```
PROGRAM my_game;
BEGIN
    CASE 0: // Error: A statement was expected.
        //...
    END
END
```


This example will provoke error, because the reserved word [CASE](case.md) is not valid to start a statement. It is only valid inside a [SWITCH](switch_statement.md) statement.

---------------------------------------
See: [Syntax](syntax_of_a_programdot.md) - [Declaration of statements](declaration_of_statementsdot.md)


