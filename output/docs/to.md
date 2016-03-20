The reserved word **TO** is a part of the [FROM](from_statement.md) statement and it is used to separate the constants that indicate the initial and final values that the variable used as a loop counter must take.

The [FROM](from_statement.md) statement implements a loop, a set of statements that are going to be repeated a specific number of times. For that, it uses a variable as a counter of the number of repetitions.

Both the initial and final values of the variable are defined. The loop will be repeated until the variable reaches the final value, starting from the initial value.

### Example

  **FROM x=1 TO 10**

    // Statements that will be repeated 10 times

  **END**


By default, the variable will take all the whole numeric values ranging between the initial and final values. But it is possible to indicate a [STEP](step.md) declaration to establish a different increment of the variable.

---------------------------------------
See: [Syntax](syntax_of_a_programdot.md) - [FROM statement](from_statement.md) - [STEP](step.md)

