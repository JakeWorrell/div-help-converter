This error appears when an invalid declaration is made inside the [CONST](declaration_of_constantsdot.md), [GLOBAL](declaration_of_global_datadot.md), [LOCAL](declaration_of_local_datadot.md) or
[PRIVATE](declaration_of_private_datadot.md) sections.

After the initial statement [PROGRAM program's_name;](programapostrophes_headdot.md) wait for any of the sections previously mentioned to appear (always in the same order), finally appearing the word [BEGIN](begin.md).

After the beginning of a process ([PROCESS process_name(](declaration_of_processesdot.md)...**)**)
or function ([FUNCTION](the_function_blocks_.md) **name_of_function(**...**)**) wait
for the [PRIVATE](declaration_of_private_datadot.md) section or the [BEGIN](begin.md) word to be shown.

The error can appear under the following circumstances:

- The name of any section has been incorrectly written.

- Several sections have been put in an incorrect order:

### Example:}
PROGRAM my_game;
LOCAL
    a=0;
GLOBAL // Error: expecting for [BEGIN]
    b=0;
BEGIN
    //...
END
**-**

  Keep in mind that the sections must appear in the following order:

    **CONST**

    [GLOBAL](declaration_of_global_datadot.md)

    [LOCAL](declaration_of_local_datadot.md)

    [PRIVATE](declaration_of_private_datadot.md)


- Inside any of the sections previously mentioned, an element that is not a valid declaration inside that section appear. 

[Example:]()
PROGRAM my_game;
GLOBAL
    +variable=0; // Error: expecting for [BEGIN]
BEGIN
    //...
END
**-**

  In this example, on reaching the symbol [+](plus.md) the compiler determines
that the [GLOBAL](declaration_of_global_datadot.md) section has already finished. Therefore, as the following element
is not the beginning of the [LOCAL](declaration_of_local_datadot.md) or [PRIVATE](declaration_of_private_datadot.md) sections, the compiler is 
expecting for the [BEGIN](begin.md) reserved word to appear, indicating the beginning of the program code.

- At the beginning of the program or on defining a process, the word **BEGIN** has been omitted.

{#9999,Example
```
PROGRAM my_game;
BEGIN
    //...
END

PROCESS my_process()
    FRAME; // Error: expecting for [BEGIN]
END
```


---------------------------------------
See: [Syntax](syntax_of_a_programdot.md) - [BEGIN](begin.md)

