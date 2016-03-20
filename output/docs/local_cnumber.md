**cnumber=0;** // Number of scroll or mode 7 windows---------------------------------------
.

This is a predefined [LOCAL](declaration_of_local_datadot.md) variable, which means that each process will have its own value in its **cnumber** variable.

The local **cnumber** variable is **exclusively** used when, in a game, several **scroll windows** or several **mode 7 windows** simultaneously appear on screen.

- For further information about the **scroll windows**, see the help about the [start_scroll()](start_scroll().md) function, which is used to activate them in the program.

- For further information about the **mode 7 windows**, see the help about the [start_mode7()](start_mode7().md) function, which is used to activate them in the program.

---------------------------------------


The **cnumber** utility lies on indicating **in which of these windows the graphic of the process must be seen**. Obviously, this variable must be defined only in processes visible inside the **scroll windows** or the **mode 7 windows**. This variable is useless for the rest of the processes (screen processes or processes with no graphics).

**If the process must be seen in all the windows**, then it won't be necessary to modify this variable, as the value of **cnumber** (**0**) by default precisely indicates so.

Up to **10** windows of both types may be activated, numbered from **0** to **9**. There are ten predefined constants used to define the value of **cnumber**. These are [c_0, c_1, c_2, ..., c_9](numbers_of_window.md) and directly correspond with the **10** possible windows of these types.

**cnumber** must be assigned **the addition of the constants** corresponding with the **windows in which the process must be visible**.

For instance, if there are **4 scroll windows** numbered **0**, **1**, **2** and **3** in a program, and the aim is to define that a specific process must be only visible in windows **0** and **2**, the following statement must be used:

  **cnumber=c_0+c_2;**

The value of **cnumber** can be changed during the process execution if necessary.

---------------------------------------


### Note Keep in mind that for the graphic of the process to be seen in all the windows, it is not necessary to do anything, as it is the option by default.

---------------------------------------
See: [Local data](predefined_local_data.md) - [c_0...c_9](numbers_of_window.md)

