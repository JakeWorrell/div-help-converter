In the indicated position of the program, reference is made to a non-existent [PROCESS](declaration_of_processesdot.md) [FUNCTION](the_function_blocks_.md),
that can be one of the following cases:

- The name of a process has been incorrectly keyed. In this case, check the name of the original process, as it is possible that the name does not correctly appear in its definition.

- The aim has been to use a language function and its name has not been correctly written. In this case, it is possible to access the general index to look for the exact name of the function.

- Reference is made to a process whose code has not been defined yet. Therefore, if the aim is to compile the program, it is necessary to define the process, at least, as follows:

### Example
```
PROGRAM my_game;
BEGIN
    my_process();
END

PROCESS my_process()
BEGIN
END
```


  Indicating in the process the parameters that it receives (in the previous example, it does not receive any parameter).

---------------------------------------
See: [Syntax](syntax_of_a_programdot.md) 

