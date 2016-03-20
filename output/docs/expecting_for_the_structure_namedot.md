To define a structure of data, its name must be specified after the reserved word [STRUCT](declaration_of_a_structuredot.md).

### Example
```
PROGRAM my_game;
GLOBAL
    STRUCT positions[9]
        x, y;
    END
BEGIN
    //...
END
```


This structure has been defined with the name **positions** and contains **ten records** (from 0 to 9) each one with two values **x** and **y**.

---------------------------------------
See: [Syntax](syntax_of_a_programdot.md) - [Names](definition_of_a_namedot.md) - [Declaration Structures](declaration_of_a_structuredot.md)

