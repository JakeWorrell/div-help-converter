To define a string of text you must specify the its name after the reserved word **STRING**.

### Example
```
PROGRAM my_game;
GLOBAL
    STRING player[32];
    STRING message;
BEGIN
    //...
END
```


In this example two global text strings were defined. The first is defined with the name
**player** which can accumulate up to 32 characters and the second with the name **message**
which with the undeclared length can accumulate up to 256 characters (because this is
the application's maximum size of text strings).

---------------------------------------
See: [syntax](syntax_of_a_programdot.md) - [names](definition_of_a_namedot.md)

