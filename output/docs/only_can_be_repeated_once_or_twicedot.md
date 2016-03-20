The [DUP](dup.md) operator used to initialise tables and
structures allows us to repeat (duplicate) a sequence of
values a specific number of times: from once (in this case, the operator is useless) to an undetermined positive number of times.

### Example
```
PROGRAM my_game;
GLOBAL
    table1[]=10 dup (1, 2, 3);
    table2[]=-10 dup (1, 2, 3); // Error: Only can be repeated once or twice.
BEGIN
    //...
END
```


In this example, table1 would be a table of 30 positions (from table1[0]
to table1[29]) initialised in the following way: 1, 2, 3, 1, 2, 3, ...

It is also possible, moreover, to omit the [DUP](dup.md) operator. In this case, the declaration of table1 would become as follows:

  **table1[]=10(1, 2, 3);**

The effect is exactly the same as in the previous example. That is to say,
when the compiler is in a table's initialisation, the **number (sequence_of_values ... )** sequence interprets that you intend to repeat the **sequence_of_values** the **number** of times indicated.

Therefore, it is not possible to repeat a sequence of values zero times or a negative number of times.

---------------------------------------
See: [Syntax](syntax_of_a_programdot.md) - [DUP](dup.md)

