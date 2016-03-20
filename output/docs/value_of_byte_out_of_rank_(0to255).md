a variable of type **BYTE** was initiated with a value too big, or negative. This
type of data can only contain values inside the rank **0** ... **255**.

### Example:}
PROGRAM my_game;
GLOBAL
    BYTE mi_value=300; // Error: Value of byte out of rank (0...255).
BEGIN
    //...
END
**-**

If you want to assign this value to the data, you must not declare the data of this type **BYTE**,
 as is shown in this program.

{#9999,Example
```
PROGRAM my_game;
GLOBAL
    my_value=300;
BEGIN
    //...
END
```


As this form creates a variable which can contain a whole number value
inside the rank ([min_int](min_int.md) ... [max_int](max_int.md)).

---------------------------------------
See: [syntax](syntax_of_a_programdot.md)

