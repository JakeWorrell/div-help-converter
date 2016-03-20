**system(**&lt;&quot;external command&quot;&gt;**)**

### Description

Executes the operative system's command passed as a parameter.

### Example program
```
PROGRAM example_system;
BEGIN
    write(0, 160, 0, 1, "Press [SPACE] to execute a DIR.");
    LOOP
        IF (scan_code==_space)

            system("dir"); // A command of MS-DOS is executed.

        END
        FRAME;
    END
END
```


In the example, after the display of a text, you enter inside the main loop in which the **DIR** command of the MS-DOS operative system will be executed every time the spacebar is pressed.

---------------------------------------


One of the utilities of this command is, for instance, to delete a temporary file that has been created in the program, calling the command of the
system **DEL &lt;**file name**&gt;**.

---------------------------------------


### Note The system can be blocked depending of the executed commands. In these cases you must reset the computer. There is no guarantee dealing with this function running, due to the multiple incompatibilities that can appear between the external commands and the manager of internal processes of DIV Games Studio.

---------------------------------------


**system(&quot;COMMAND.COM&quot;)**

### Description

Executes a session of the MS-DOS operative system from the program itself.
On typing EXIT from it, you will return to the program at the point in which this statement was executed.

---------------------------------------
See: [exit()](exit().md)

