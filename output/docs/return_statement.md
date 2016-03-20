The **RETURN** statement immediately finishes the current process, as if the [END](end.md) of its [BEGIN](begin.md) was reached.

When this statement is included in the main code, it will finish the current process. But if there are alive processes, they will go on running. For instance, the [exit()](exit().md) function can be used to finish a program and all its processes.

A **RETURN** inside a process will finish it, killing this process.

### Example:}
PROGRAM my_game;
BEGIN
    LOOP
        IF (key(_esc))
            RETURN;
        END
        FRAME;
    END
END
**-**

In this example, the **RETURN** statement will be executed by pressing the escape key (**ESC**), finishing the program.

**Use of RETURN to return a value**---------------------------------------


It is possible to design processes with a performance similar to the functions
of other programming languages, that {receive a series of parameters and
return a value}. For instance, a process receiving two numeric values and returning the biggest one.

For that, this statement must be used with the following syntax:

**RETURN(**[&lt;expression&gt;](definition_of_an_expression.md)**)**

It is also important not to use the [FRAME](frame_statement.md) statement inside the process,
as this statement will immediately return to the calling process. When the compiler finds the [FRAME](frame_statement.md) statement inside a [PROCESS](declaration_of_processesdot.md), it directly classes it as a process, ruling out its hypothetical use as a function.

### Important To return a value with the **RETURN** statement after execution of one or more
[FRAME](frame_statement.md) statements , you must make a block of this type, ie. a [FUNCTION](the_function_blocks_.md).

---------------------------------------



The example proposed before is shown now: an implementation of the
mathematical function **max** that returns the greater of its two parameters.

{#9999,Example
```
PROGRAM my_game;
BEGIN
    x=max(2, 3)+max(5, 4);
END
PROCESS max(a, b)
BEGIN
    IF (a>b)
        RETURN(a);
    ELSE
        RETURN(b);
    END
END
```


After the execution of this program, the **x** variable of the main process will be equal to **8** (3+5).

**Important**---------------------------------------


By default, if the **RETURN** statement is used without the expression
in brackets or the [FRAME](frame_statement.md) statement is used in a process, its return value will be its 
[identifying code](_identifying_codes_of_processesdot.md) of the process}.

---------------------------------------
See: [Syntax](syntax_of_a_programdot.md)

