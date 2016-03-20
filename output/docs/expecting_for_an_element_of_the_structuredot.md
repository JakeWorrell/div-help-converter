In the indicated position of the program, the aim is to declare an invalid element (field) of the structure.

A structure can just have the following kind of fields:

- A variable. In this case, the name of the declaration without being initialised must be indicated.

- A table, indicating its name and, subsequently, its length in square brackets (keep in mind that a table declared like **my_table[9];** is a table of **10** positions, from my_table[0] to my_table[10]). They must not be initialised.

- Another structure. It is possible to include as many structures inside other structures as necessary, with no limit of nesting. An example of structures nesting is shown now.

### Example
```
PROGRAM my_game;
GLOBAL
    STRUCT my_structure[9]
        elements;
        STRUCT data[9]
            x, y;
        END
    END
    a, b;
BEGIN
    FROM a=0 TO 9;
        my_structure[a].elements=-1;
        FROM b=0 TO 9;
            my_structure[a].data[b].x=-1;
            my_structure[a].data[b].y=-1;
        END
    END
    //...
END
```


In this example, every record of **my_structure** will have a variable
called **elements** and another structure with 10 elements, each one with two
variables: **x** and **y**.

Next, in the same example, it is possible to see an example of access
to that structure with two nested loops that initialise all the values of the structure at** -1**.

To see how to initialise the values of a structure in the definition itself, go to the topic [syntax](syntax_of_a_programdot.md).

---------------------------------------
See: [Syntax](syntax_of_a_programdot.md) - [Declaration of structure](declaration_of_a_structuredot.md)

