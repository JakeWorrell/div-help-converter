[BEGIN](begin.md)

    [&lt;statement&gt;](declaration_of_statementsdot.md) **;**

    ...

[END](end.md)

The main code of a program starts with the reserved word [BEGIN](begin.md). After it, any number of statements may appear. The main code finishes with the reserved word [END](end.md).

This code controls the main process of the program, which initialises the program, controls the loops of the menu and game, and finishes the program.

### Example
```
PROGRAM my_game;

GLOBAL
    option;             // Option chosen in the menu.

BEGIN                   // Beginning of the main code.

    set_mode(m640x480); // Beginning.
    set_fps(24, 4);
    // ...              // Loads files, sounds, etc.

    REPEAT              // Beginning main loop.

        option=0;       // Control loop of the options menu.
        //...           // Begins the options menu.
        REPEAT
            // ...
            IF (key(_enter)) option=1; END  // Playing is chosen.
            IF (key(_esc)) option=2; END    // Finishing is chosen.
            FRAME;
        UNTIL (option>0);

        IF (option==1)  // If the playing option has been chosen.

            // Starts regions, scroll, etc.
            // Creates the game processes.
            // Loop of game's control, expecting for its end.

        END

    UNTIL (option==2);  // End of the main loop.

    let_me_alone();     // Finishes all the processes.

END                     // End of the main code.

// ...                  // Declaration of the program's processes.
```


The end of the main code's execution does not imply the end of the program's execution, as it will continue if there are alive processes. To force the end of the program when the code finishes, it is possible to use, for instance, the [let_me_alone()](let_me_alone().md) function just before the [END](end.md) that marks the main code's end, to eliminate the rest of processes that may remain alive.

The execution of the program can also be finished at any of its points with the [exit()](exit().md) function, which will automatically eliminate all the processes.

---------------------------------------
See: [Syntax](syntax_of_a_programdot.md)

