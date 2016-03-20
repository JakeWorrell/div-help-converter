**max_process_time=500;** // Maximum execution time---------------------------------------
.

Programs are provided with an **anti-blocking** system that will make the manager of processes of DIV Games Studio interrupts its execution when a process exceeds the **maximum execution time** in a game's frame.

This maximum time is indicated in the **max_process_time** global variable in **hundredths of second**. By default, its value is **500 hundredths** (**5 seconds**).

When a process takes longer than the indicated time in
executing a [FRAME](frame_statement.md) statement (which indicates that the process
is ready for the following frame of the game), an execution error will arise.

### Note The utility of the possibility of changing this variable, assigning a new value to it, is to avoid this error in the programs in which there is a process that must be doing calculations for a long time.

The following statement must be used to order the process' manager, for instance, not to interrupt a process, unless its execution in a frame is longer that 30 seconds:

  **max_process_time=3000;**

As 30 seconds are 3000 hundredths of second.

---------------------------------------


### Important Keep in mind that the time used by every computer to do the program's calculations is different. Therefore, this value must be defined with a certain margin, in order to avoid to exceed  the **maximum execution time**
when the game is executed in slower computers.

---------------------------------------
See: [Global data](predefined_global_data.md) - [FRAME statement](frame_statement.md)

