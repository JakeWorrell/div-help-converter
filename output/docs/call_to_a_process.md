&lt;process_name&gt;**(**&lt;list of parameters&gt;**)**

To call a process, put the [name](definition_of_a_namedot.md) of the process, followed by a list including as 
many expressions separated by [commas (,)](comma.md), as [parameters](parameters_of_a_processdot.md) of the process, 
in [brackets (())]((__).md). The brackets are obligatory, even if the process has no call [parameters](parameters_of_a_processdot.md).

A call to a process will always return a value that depends on which one of the following 
actions is performed first by the called process.

- If the [FRAME](frame_statement.md) statement is executed, then the process will return its [identifying code](_identifying_codes_of_processesdot.md).

- If the process executes the [RETURN](return_statement.md)[(]((__).md)&lt;expression&gt;[)]((__).md) statement, 
then the former will return the result of this expression.

- If the process finishes, either because the [END](end.md) of its [BEGIN](begin.md) is reached 
or because a [RETURN](return_statement.md) statement is executed with no expression, the process will 
return the [identifying code](_identifying_codes_of_processesdot.md) of itself, but as the process has now finished (killed), 
it is necessary to take into account that this [identifying code](_identifying_codes_of_processesdot.md) can be assigned by the system 
to any new process created from now on.

The return value can be ignored, assigned to a variable or used inside an expression.

### Example
```
PROGRAM my_game;
PRIVATE
  id2;
BEGIN
    my_process(0, 0);
    id2=my_process(320, 200);
    // ...
END
PROCESS my_process(x, y)
BEGIN
    LOOP
        FRAME;
    END
END
```


In this example, the main process **my_game** makes two calls to the process **my_process**, which receives two parameters in its **x** and **y** local variables.

As the process executes the [FRAME](frame_statement.md) statement, it will return its [identifying code](_identifying_codes_of_processesdot.md).

It can be noticed how the value returned in the first call to the process
is ignored (it is not used at all), and how, in the second call, the [identifying code](_identifying_codes_of_processesdot.md) of **my_process(320, 200)** is assigned to the private variable of the main process **id2**.

When a call to a process is made, the execution of the current process is momentarily stopped, and the code of the called process is executed, until it is returned through one of the three mentioned cases (until it finishes or executes a [FRAME](frame_statement.md) or [RETURN](return_statement.md) statement).

If the process has finished with a [FRAME](frame_statement.md) statement, it will be displayed in the following frame according to the values established in its local variables ([x](repeat_statement.md), [y](loop_statement.md), [graph](break_statement.md), ...) and, in the preparation of the following frame, this process will go on running from the [FRAME](frame_statement.md) statement.

---------------------------------------
See: [Syntax](syntax_of_a_programdot.md) - [Parameters of a process](parameters_of_a_processdot.md)

