The new **FUNCTION** blocks behave the same way as the functions of any
other programming languages, they execute sequentially (not in parallel
as the [PROCESS](declaration_of_processesdot.md) blocks do), not returning before they are finished.

**FUNCTION** [&lt;name&gt;](definition_of_a_namedot.md) **(** [&lt;parameters&gt;](parameters_of_a_processdot.md) **)**

[&lt;Declaration of private data&gt;](declaration_of_private_datadot.md)

[BEGIN](begin.md)

    [&lt;statement&gt;](declaration_of_statementsdot.md) **;**

    ...

[END](end.md)

These blocks will continue to function in a similar way as the normal processes,
but with one important difference: they will halt the calling process until the function
has finished, in other words, the process which called these functions will be sleeping, 
until these functions return or their process will be finished.

If the function doesn't use the statements [FRAME](frame_statement.md), it will behave as
a normal process, but if a function executes the statement [FRAME](frame_statement.md), it will not return
to the block from which it was called (as it would do in a normal process).

Therefore, a function can always return a value with [RETURN](return_statement.md)**(**&lt;expression&gt;**)**,
including after executing one or more [FRAME](frame_statement.md) statements.

---------------------------------------


**successive programming.**

It is not recommended to program only with functions in a successive way, but it is useful to 
know how it is possible to simplify the understanding of programming DIV for programmers 
of other languages.

It is possible to make a program in the traditional programming style using
exclusively **FUNCTION** blocks, this way at each moment in the execution there will only 
be one process.

After programming in this way, the statement [FRAME](frame_statement.md) converts in exactly the same order
as it **converts to video**. Logically, if there is only one process executing, when it executes 
this order the system will show the following frame of the program.

But, programming this way, could different graphics be shown on screen?.

The answer is yes, because mini-processes can be created which will function as
an instruction of the type &quot;paint the graphic for the following frame&quot; (different to
functions such as [put()](put().md), which paint a graphic forever).

To show a graphic in the following frame a process must be constructed which receives
the necessary visual parameters and only executes the [FRAME](frame_statement.md) statement, for example:

**PROCESS paint_graphic(x,y,graph)**

**BEGIN**

**    FRAME;**

**END**


After calling this process {a temporal process will be created which will be painted
in the next frame} and then disappear. Other parameters can be sent to this process
(besides [x](local_x.md), [y](local_y.md), such as [file](local_file.md), [size](local_size.md),
[angle](local_angle.md), [z](local_z.md), ... (See the [predefined local data](predefined_local_data.md)).

It is clear that, after programming this way, a table of sprites needs to be created 
(normally in a global [structure](declaration_of_a_structuredot.md)) in such way that the program could manage
all the graphics. This may seem difficult, but is the normal way games are programmed
in any other language other than DIV.

---------------------------------------


**Applications in the main program.**

The statements which appear between the words [BEGIN](begin.md) and [END](end.md) of the main program 
(after the declarations of data), control the [main process of the program](main_codedot.md). 
It initiates the program, draws the images and graphics, controls the menu loops , the game loops 
(creating necessary processes), and closes the program.

From the main program, it can be very useful to call the **FUNCTION** blocks. Because this way
the main program will be temporarily stopped while the program executes the contents of this function.

For example, the presentation sequence can be made in a function, the menu options in other, etc. 
Also, remember that functions can always, after finishing,
return a value with the [RETURN](return_statement.md)**(**&lt;expression&gt;**)**, which can be useful,
for example in the menu to return the option number that was selected.

### Note Reaching the end of execution of the main code doesn't mean the execution of the
program is finished, so it will continue if any other processes are still active; if you want to force the 
program to close after this code has finished, you can use, for example, the
function [let_me_alone()](let_me_alone().md) just before the [END](end.md) of the [main code](main_codedot.md), or also the function
[exit()](exit().md) (in any point of the program).

---------------------------------------
See: [Los blocks PROCESS](declaration_of_processesdot.md) - [syntax](syntax_of_a_programdot.md)

