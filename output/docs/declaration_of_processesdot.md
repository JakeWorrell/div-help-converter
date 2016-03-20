Two types of code blocks exist (besides the [ main code](main_codedot.md)):
the **PROCESS** blocks (which will be detailed below), and the [FUNCTION](the_function_blocks_.md) blocks.

**PROCESS** [&lt;name&gt;](definition_of_a_namedot.md) **(** [&lt;parameters&gt;](parameters_of_a_processdot.md) **)**

[&lt;Declaration of private data&gt;](declaration_of_private_datadot.md)

[BEGIN](begin.md)

    [&lt;statement&gt;](declaration_of_statementsdot.md) **;**

    ...

[END](end.md)

A process must start with the reserved word **PROCESS** followed by its name and its call [parameters](parameters_of_a_processdot.md) in brackets. The parameters are a list of data in which the process is going to receive different values. The brackets are obligatory even if the process has no parameters.

After this header, a [PRIVATE](declaration_of_private_datadot.md) section, declaring data to be used by the process exclusively, may be put optionally.

And finally, the process code, that is a sequence of statements between the reserved words [BEGIN](begin.md) and [END](end.md), will be specified.

A process normally corresponds with a kind of object of the
game, such as a spacecraft, an explosion, a shot, etc. Inside the process' code, a loop (in which all the necessary values to display this object, such as graphic, coordinates, etc., will be established) is normally implemented. Then, with the [FRAME](frame_statement.md) statement, the order to display the object with the established attributes is given.

### Example
```
PROGRAM my_game;
PRIVATE
    id2;
BEGIN
    load_fpg("help/help.fpg");
    id2=my_process(160, 100);
    write_int(0,150,10,4,offset id2);
    write(0,100,10,4,"Process ID=");
    // ...
END

PROCESS my_process(x, y)
PRIVATE
    n;
BEGIN
    graph=100;
    FROM n=0 to 99;
        x=x+2;
        y=y+1;
        FRAME;
    END
END
```


As it can be noticed in this example, when a process is called, it returns its [identifying code](_identifying_codes_of_processesdot.md) (that, in the example, is stored in the [PRIVATE](declaration_of_private_datadot.md) variable of the main program **id2**). If the aim is to implement a process in the style of the functions of other languages that returns a numeric result, then it is necessary to use the [RETURN(](return_statement.md)value**)** statement, not using the [FRAME](frame_statement.md) statement inside the process, as this statement returns to the father process (caller), returning the process' [identifying code](_identifying_codes_of_processesdot.md) as return value.

---------------------------------------
See: [Syntax](syntax_of_a_programdot.md)  - [The blocks FUNCTION](the_function_blocks_.md)

