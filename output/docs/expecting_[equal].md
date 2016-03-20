To set a maximum number of processes you must use the statement
[compiler_options](compilation_options.md) as it is shown in this program:

### Example
```
COMPILER_OPTIONS _max_process = 100;

PROGRAM my_game;
BEGIN
    //...
END
```


In this case it was established that during the execution of the program 
** a maximum of 100 processes** can execute simultaneously.

---------------------------------------
See: [syntax](syntax_of_a_programdot.md)

