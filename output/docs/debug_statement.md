The **DEBUG** statement will call the interactive debugger when it is executed.

It is normally used to debug programs, to find possible
errors of the programs. On some occasions, it is normally put in the following points.

- Where you want to verify that a part of the program has done what was expected. After the execution of that part, **DEBUG** will call the debugger, from which it is possible to check all the active processes and the value of all their variables.

- When you are not very sure whether something can happen in a program, you can put this statement in that point to report you whether what we are expecting actually happens.

This statement is only used temporarily, until the error that is looked for is found. From that moment, the statement won't be necessary. Thus, it can be removed from the program since it has no additional effect.

### Example
```
PROGRAM my_game;
BEGIN
    // ...
    IF (x<0)
        DEBUG;
    END
    // ...
END
```


In this example, it is verified that, in a specific point of the program, the **x** coordinate of the process is not a negative number (less than zero). If this happens, the debugger will be called to find out why it has happened.

When this statement is executed, a dialog box appears, offering us the following options:

- To disable the **DEBUG** statement, preventing it from being activated in this execution of the program.

- To stop the program and enter the debugger, to be able to examine all the processes and their variables.

- Or to finish the execution of the program immediately, returning to its edition in the windows' graphic environment.

Moreover, if the escape key **ESC** is pressed in that box, the **DEBUG** statement will simply be ignored, and the program will continue to be executed as usual.

---------------------------------------


When a program is executed from the windows' graphic environment, the debugger can be called at any moment by pressing the **F12** key.

On invoking the debugger in this way, the program will always be interrupted just before starting the processing of a new frame. All the processes to be executed will appear before the next display.

---------------------------------------
See: [Syntax](syntax_of_a_programdot.md)

