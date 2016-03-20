**GLOBAL**

    [&lt;declaration of variable&gt;](declaration_of_a_variabledot.md) [;](semicolon.md)

    ...

This section of the programs is optional. Global data, the **data that can be used from any point of the program**, are declared in this section.

A section must obligatory start with the reserved word GLOBAL followed by a series of [declarations of data](declaration_of_a_variabledot.md) finished with a symbol [;](semicolon.md) (semicolon).

In general, all those data that establish general conditions of the game related to several processes are declared as global data. An example could be the score obtained by the player, that could be stored in the **score** global variable. Thus, any process of the game could increment it, if necessary.

A declaration of global data will define a single data that can be used for all the program's processes. But, a declaration of local data will define a variable of this kind and name for each of the program's processes.

### Example
```
PROGRAM my_game;
GLOBAL
    score=0;
BEGIN
    //...
END
```


---------------------------------------
See: [Syntax](syntax_of_a_programdot.md) - [Glossary](glossary_of_terms.md)

