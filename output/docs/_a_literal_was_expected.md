Literals are **texts in brackets**. In the indicated position of the
program a literal was expected to be given as the initial value of 
a text string.

The text strings can be initiated as shown in this example.

### Example
```
PROGRAM my_game;
GLOBAL
    STRING string="initial text in the string";
BEGIN
    //...
END
```


It is not obligatory to initiate the text strings of a program.
In the case of initiation, the string could have an empty text (&quot;&quot;) at the beginning of the program,
so, these two declarations would be identical:

  **STRING** string;

  **STRING** string**=**&quot;&quot;**;**

In these cases, their length is not declared, therefore the strings can accumulate
to a maximum of 256 characters (because this is the maximum size allowed for strings of text).

---------------------------------------
See: [syntax](syntax_of_a_programdot.md)

