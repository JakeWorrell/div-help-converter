The reserved word **STEP** is a part of the [FROM](from_statement.md) statement and it is used to indicate the increment (step) that has to be made in every loop iteration.

The [FROM](from_statement.md) statement implements a loop, a group of statements that are going to be repeated a specific number of times. For that, it uses a variable as a counter of the number of repetitions.

Both the initial and final values of the variable are defined. The loop will be repeated until the variable reaches the final value, starting from the initial value.

By default, the variable will pass through all the whole numeric values ranging between the initial and final values. But it is possible to indicate a **STEP** declaration to establish a different variable increment.

For instance, if a loop in which the **x** variable is going to have the values ranged from **1** to **10** is defined, this loop will be executed a total of **10** times. But if **STEP** is established as **2**, then the loop will only be executed **5** times, in which the **x** variable will take the **1**, **3**, **5**, **7** and **9** values, as it has been established that the variable must be incremented **2** by **2**. This loop would be implemented in the following way:

**FROM x=1 TO 10 STEP 2**

  // Statements that are going to be repeated five times

**END**


If the **STEP** declaration is omitted from the [FROM](from_statement.md) statement, then the increment will always be 1 by 1, adding 1 to the variable after every loop
iteration (or subtracting 1, in case that the final value is less than the initial value).

### Note Only whole increments can be established.

---------------------------------------
See: [Syntax](syntax_of_a_programdot.md) - [FROM statement](from_statement.md)

