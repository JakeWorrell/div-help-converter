The process or function has a number of parameters different from the one that appears in the indicated position of the program.

If it is a function, access **Glossary** to consult the required parameters
or place the cursor on the name of the function in the program and then press **F1**.

If it is a **process**, then it is possible that in the indicated position, the number of parameters is correct, but a call to this process has previously appeared in the program with a different number of parameters.

### Example
```
PROGRAM my_game;
BEGIN
    my_process();
END
PROCESS my_process(x, y) // Error: Invalid number of parameters.
BEGIN
    //...
END
```


In this example, the error is not in the definition of the process as it is shown,
but in the previous call to that process (**my_process();**). This is like this because when the compiler finds a call to a process that does not know, it records it like a new process and notes down its number of parameters.
If the next time it finds that process the number of parameters does not coincide with those it had recorded, then the error appears.

Therefore, if the call or definition of the process shown in the program is correct, then use the search option (**ALT-F**) to check the number of parameters in the previous calls to that process.

---------------------------------------
See: [Syntax](syntax_of_a_programdot.md) -  [Parameters of a process](parameters_of_a_processdot.md)

