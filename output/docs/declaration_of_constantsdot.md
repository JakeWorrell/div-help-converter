**CONST**

    [&lt;name&gt;](definition_of_a_namedot.md) **=** [&lt;constant&gt;](definition_of_a_constantdot.md) **;**

    ...

This section of the programs is optional, as its utility deals with setting a series of synonymous for some numeric values.

In a game, for instance, number 3 has been set in one or several points of the program as the maximum lives of the protagonist. If the aim is to modify this number, increasing or decreasing it, it will be necessary to look for this number and to replace it in the program. But there is a risk of replacing other '3' numbers appearing in the program with different aims.

An alternative is to declare a constant called, for instance,
**maximum_lives** as a synonymous of the numeric value 3 and use that constant in the program instead of the number. Now, if the aim is to replace this value by another one, it is done simply in the declaration of the constant **maximum_lives**.

This section then establishes a list of names that are going to represent a series of numeric constants.

This section must obligatory start with the reserved word **CONST** and then, for every declared constant, its name followed by the symbol [= (assignment symbol)](equal.md) and a constant expression (numeric value) must appear. After the declaration of every constant, the symbol [;](semicolon.md) (semicolon) must appear.

### Example
```
PROGRAM my_game;
CONST
    maximum_lives=3;
BEGIN
    //...
END
```


Once a value has been assigned to a constant, it won't later be possible to modify the former in the program.

---------------------------------------
See: [Syntax](syntax_of_a_programdot.md) - [Glossary](glossary_of_terms.md)

