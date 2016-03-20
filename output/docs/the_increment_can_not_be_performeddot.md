In the indicated expression of the program the operator [ ++](plusplus.md) (or the operator[ --](minusminus.md)) are incorrectly used with the aim of incrementing (or decrementing) an object. That object has no offset, as it is not a variable, table or structure. Thus, the compiler can not perform an increment (or decrement) about it.

The aim has probably been to increment or decrement a constant expression or an expression involving several operands.

Now, a program with several examples of valid and invalid use of the operators[ ++](plusplus.md) and[ --](minusminus.md), is shown.

### Example
```
PROGRAM my_game;
CONST
    my_constant=0;
GLOBAL
    my_variable=0;
    my_table[10];
    STRUCT my_structure[10]
        variable;
    END
BEGIN
    // Valid examples
    my_variable++;
    my_table--;
    ++my_table[my_variable];
    --my_structure[0].variable;
    id.x++;

    // Invalid examples
    (my_variable*2)++;
    my_constant--;
    ++0;
    --(my_variable+1);
END
```


The constants like **my_constant** can not be incremented as they are just synonymous of the numeric value they represent.

The **(my_variable*2)++;** statement is not valid because the
multiplication is first done and then, the value **my_variable*2** becomes a numeric result that has no offset and, therefore, it is not possible to access it in order to increment it.

In this case, the correct statement that should have been used is probably **my_variable=my_variable*2+1;**

---------------------------------------
See: [Syntax](syntax_of_a_programdot.md) - [++](plusplus.md) - [--](minusminus.md)

