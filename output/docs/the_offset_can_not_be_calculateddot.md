In the expression indicated in the program, the [offset](offset.md) operator (or the [&amp;](offset.md) synonymous symbol) is used with the aim of obtaining the address (offset) of an object. That object has no address, as it is not a variable, a table or a structure. Therefore, the compiler can not resolve the expression.

Probably you have intended to obtain the address of a constant expression or an expression involving several operands.

Now, a program is shown with several examples of valid and invalid uses of the [offset](offset.md) operator.

### Example
```
PROGRAM my_game;
CONST
    my_constant=0;
GLOBAL
    my_offset=0;
    my_variable=0;
    my_table[10];
    STRUCT my_structure[10]
        variable;
    END
BEGIN
    // Correct examples
    my_offset=offset my_variable;
    my_offset=offset my_table;
    my_offset=offset my_table[my_variable];
    my_offset=offset my_structure[0].variable;
    my_offset=offset id.x;

    // Invalid examples
    my_offset=offset (my_variable*2);
    my_offset=offset my_constant;
    my_offset=offset 0;
    write_int(0, 0, 0, 0, offset (my_variable+1));
END
```


There is no difference between the use of the [offset](offset.md) reserved word
or the symbol **&amp;**.

The [constants](definition_of_a_constantdot.md) such as **my_constant** have no offset as they are just
synonymous of the numeric value they represent.

The statement **my_offset=offset (my_variable*2);** is invalid as the multiplication is made at first and, once it has been done, the **my_variable*2** value is transformed into a numeric result that has no assigned address.

Unlikely, the **offset my_variable*2** expression is valid as, in this case, the address of **my_variable** is obtained at first and then, this address will be multiplied by **2**.

---------------------------------------
See: [Syntax](syntax_of_a_programdot.md) - [offset](offset.md)

