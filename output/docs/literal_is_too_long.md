A text string was initiated with a literal with a bigger number of characters than the string
can contain.

### Example:}
PROGRAM my_game;
GLOBAL
    STRING string1[3]=&quot;ABCDE&quot;; // Error: Literal is too long
BEGIN
    //...
END
**-**

To initiate a text string you must remember that the maximum number of characters it can
contain is the number contained in square brackets, plus one.

[Example:]()
PROGRAM my_game;
GLOBAL
    STRING string1[3]=&quot;ABCD&quot;;
BEGIN
    //...
END
**-**

In this case a text string **string1** can contain four characters
(string1[0]=char(&quot;A&quot;), string1[1]=char(&quot;B&quot;), string1[2]=char(&quot;C&quot;) and
string1[3]=char(&quot;D&quot;)).

The other option is **not to indicate the size of the text string**, establishing in
this case the string size maximum of 256 characters.

{#9999,Example
```
PROGRAM my_game;
GLOBAL
    STRING string1="ABCDEF";
BEGIN
    //...
END
```


In this case, **string1** would contain initially six indicated characters
(&quot;ABCDEF&quot;), but it can reach 256 during the execution of the program.

---------------------------------------
See: [syntax](syntax_of_a_programdot.md)

