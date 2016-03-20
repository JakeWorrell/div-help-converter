A **WORD** was initiated with a value too big or negative. This
type of data can only contain values inside the rank **0** ... **65535**.

### Example:}
PROGRAM my_game;
GLOBAL
    WORD my_value=70000; // Error: Value of word out of rank (0...65535).
BEGIN
    //...
END
**-**

If you want to assign this value to the data, you must not declare the data as type **BYTE**,
as is shown in this program.

{#9999,Example
```
PROGRAM my_game;
GLOBAL
    my_value=70000;
BEGIN
    //...
END
```


As this form creates a data which can contain a whole number value
inside the rank ([min_int](min_int.md) ... [max_int](max_int.md)).


---------------------------------------
See: [syntax](syntax_of_a_programdot.md)

