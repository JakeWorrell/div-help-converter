See: [Index](index.md) - [Help about the menus system]()---------------------------------------


The programs debugger is an advanced tool, whose use first requires a correct understanding of all the programming concepts explained from chapter number 5 of the DIV Games Studio's book (User's Handbook).

**+70,0**The debugger is a dialog box that can be activated in programs' run time for one of the following reasons:

* The program was entered with the option **programs \ debug program**.

* The **F12** key was pressed in a program's run time.

* An **error of execution** arose in the program.

* A **debug** statement was found in the executed program.

This tool allows us to execute the program statement by statement, verifying the value taken by the different program's data when necessary. It is useful because, on checking the program's execution step by step, it can find the mistakes eventually made by the programs.

As it is a dialog with a great deal of information, each of its sections are now described separately.**-**

---------------------------------------


**Upper information line**

Two messages are reported in the upper part of the window. To the left, there is one indicating the **number of processes active in the program** out of the **total that can be created**. For instance, if it reports 23/3201, it means that there are 23 processes active in the program and that up to 3201 could be created before
using up the available memory for processes.

The maximum number of processes vary from some programs to others, depending on the number of their local and private variables.

The **identifying code** of the process selected in the list, as well as its current state (normal, killed, asleep or frozen) are indicated to the right.

---------------------------------------


**List of active processes**

This list appears in the upper left part of the debugger with a scrolling bar to its right. All the active processes in the program are shown in it. By active processes we mean the processes that have been created and that still have not been disappear. The following information appears for each process:

* The process name in the program.

* Its identifying code in brackets (occasionally, there is no space to put it entirely).

* A letter indicating its state (**A**-Normal, **K**-killed, **S**-Asleep and
**F**-Frozen).

* The percentage of accomplished execution for the following frame.

The scrolling bar must be used to move through the processes' list.

**Important**: One of the processes appears with a white tip arrow pointing out its name. This is the process that **is being executed** in the program currently. Therefore, the next statement of the program will belong to this process.

One of the processes appears tagged with a black band. This is the process about which information is shown in the right part of the window (close to this list of processes). This process may be selected with the mouse, by clicking on the list.

It is very important to distinguish between the process in execution and the
process about which the information is shown, as they don't have to necessarily be equal. For the information about the process in execution to be shown, it is necessary to select it (that of the white arrow) by clicking on the list with the left mouse button.

---------------------------------------


**Information box about the indicated process**

To the right of the previous list, information about the program tagged with a black band in the list (not the process in execution) is shown. Its identifying code and its state was shown in the uppermost line.

The complete process name is shown in a dark background's box. Below it
there is another box with the graphic of this process (when it is bigger, it will be reduced to fit this box).

The button **See data** appears to the right of the graphic. This button allows us to access another dialog box in which all the data of the process must be consulted and modified. It will be later explained in the section **Inspecting data**.

The (**x**,**y**) coordinates of the process, the system of coordinates used by it (referred to the **screen**, to a **scroll** or to  a **mode 7**) and the mirrors or transparencies applied to the graphic of the process are always shown following this button..

Finally, four buttons allow us to access the **father** process (the
process that called the one is selected), the **son** process (last process called by the selected one), the younger brother (**smallbro**, the last one called by the father before it) and the elder brother (**bigbro**, the following one called by the father after it). If these buttons don't lead to any other process, that is because there is no process with that relationship.

---------------------------------------


**Partial execution controls**

Two buttons called **Exec.Process** and **Next FRAME** below the previous information box allow us to execute the program partially.

**Execution of the process**. This first button allows the program to continue
just to the end of the process currently under execution (the one pointed with the white arrow in the list). All its statements will be executed until it reaches the next **FRAME** (until the process is ready for the next frame of the game).

**Next FRAME**. The second button will execute the program to its next frame, first executing all the pending processes and displaying the next frame of the game (in the debugger's background). The debugger will stop in the first statement of the first process to be executed in the new frame. It is possible to displace the dialog box with the debugger (by dragging its title bar) in order to contemplate the result of the previous frame of the game.

---------------------------------------


**Debugging box of the program's listing**

The code of the program is shown in the lower part of the debugger.
The identifying code of the process under execution (again, the one pointed with the white arrow in the list) appears in the left upper corner.
Below it, there are three buttons and, to its right, the code window.

In the **code window**, another white arrow indicates the line including the next statement to be executed by the process. It can be notice how the statement also appears highlighted in white from the rest of the code.

This window's contents can be displaced with the **cursors** keys. The program's lines can be tagged with a black band. Nevertheless, it is not possible to modify the program from the debugger. Indeed, to modify the program it is necessary to finish its execution (which can be done by pressing **ALT+X**) and return to the editor of the environment.

The first button called **Process** allows us to go in the code window to one of the processes of the program directly. A list containing all the processes found in the program will appear, being necessary to select the desired process with the mouse. However, it won't change the process currently under execution, which will continue to be the same.

The second button allows us to establish a **Breakpoint** in the program. For that, it is first necessary to tag the line of the listing with the black band. On reaching this line (with the cursors), the program must stop. Then, this button must be activated, appearing the line in red.

Breakpoints can not be established in all the lines of the program,
but only in those for which the executable code has been generated
(in which any action is performed).

Many breakpoints can be established in the program. To execute the program until it reaches one of these points, suffice will be to close the debugger or press the **ESC** key.

To **disable** a breakpoint, it is necessary to select the line and click on the same button again.

The last button, **Debug**, is the one that really allows us to debug the program statement by statement. Every time it is clicked on, one of the program's statements will be executed. When a process finishes its execution, or
completes a frame, you will pass to the first statement to be executed of the next process.

---------------------------------------


**Inspecting data**

**+71,0**By clicking on the button **See data** of the programs' debugger it is possible to access this other dialog box, in which the values of the program's data can be consulted (and even modified) in the point in which it has stopped,
normally with the aim of carrying out tests in it.

Most of this box is occupied by the data list. Each of them are shown with their name and numeric value. This list always appears in alphabetical order.

The data set appearing in this list can be selected through a series of switches. The two upper switches define the two following sets.

* **Predefined**. When this switch is activated, all the data predefined in the language will be included in the list. Thus, it will be possible to access the predefined local data (such as x, y, angle, size, ...), the predefined global data and the predefined constants.

* **Defined by the user**. This switch selects all the new data defined in the program. These are the specific constants, variables, tables and structures of every program.

Besides selecting the data depending on whether they are predefined or new, they can be selected according to the sphere in which they have been declared,
with the following switches.

* **CONST**. This switch is used to include the constants in the list, even if the constants are not data, but synonymous of a numeric value. Therefore, they can not be modified.

* **GLOBAL**. On activating this switch, all the global data (accessible
by all the processes) will be included in the list.

* **LOCAL**. When this switch is activated, the local data (the data that all the processes of the program have) will be included in the list.

* **PRIVATE**. This switch selects the specific data of the process tagged in the debugger window to include them in the list. These data exclusively are for the program's internal use.

The list of data can be displaced with the vertical scrolling bar
or with the **cursors** and **Pg.Up / Pg.Dn** keys.

The button **Change** allows us to modify the value of the selected data; only the constants can not be modified. A new dialog will appear with a text box in which the new value of the variable must be input. Any variable of the list can be selected with the **cursors** or clicking on it.

Below this button, there are other two buttons with the symbols** -** and** +**. They are used to **modify the index of tables and structures**, which can also be done with the **right cursor** and **left cursor** keys. The table or structure whose index is intended to change must previously be selected in the list.
This is the way to observe or modify any element of a table or structure

Finally, a series of buttons appears in the lower part of this dialog. These buttons, mentioned below, allow us to display the value of a variable in a  specific way:

* **Angle**. This button allow us to display the variable as an angle. The angles are specified internally (in the programs) in degree thousandths. The
value of the variable will be displayed as an angle in degrees and radians.

* **Process**. If the variable is the **identifying code** of a process, on selecting this display filter, the name of this process will appear in the list as a value of the variable.

* **Text**. When the variable is a text or a pointer oriented to a text (to a literal
of the program), that text will be displayed in the list by clicking on this button.

* **Logical**. If a variable contains a logical value, on applying this filter to it, in the upper list will be shown whether it is **false** or **true**.
In the language, on evaluating them as logical conditions, the odd numbers are considered true, and the even numbers are considered false.

Once the display filter of a variable has been established, it will remain during the rest of the program's execution. The same button must be double-clicked to display again the contents of the variable as a numeric value.**-**

