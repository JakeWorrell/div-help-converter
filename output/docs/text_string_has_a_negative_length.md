To define a text string you indicate in brackets its length,
it is necessary for its length to be defined as a positive whole number 
(0, 1, 2, 3, ...), remembering that all strings begin in the position null
and finish in the position which indicates the index.

### Example
```
PROGRAM my_game;
GLOBAL
    STRING string1[9];
    STRING string2[-9]; // Error: Text string has negative length.
BEGIN
    //...
END
```


The compiler detected a text string with a negative string length such as **string2**;
in this example you must define the string as
**string1** which will be the string of 10 characters (from
string1[0] to string1[9]).

---------------------------------------
See: [syntax](syntax_of_a_programdot.md)

