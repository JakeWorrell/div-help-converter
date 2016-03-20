The more active people can find out more detail about the progress of the games during runtime
by pressing the key F12 (from the game itself, during its execution), that allows you to access
the program debugger, which permits you to execute  the games step by step.
Here you can observe all processes and modify their data (if you have convenient data,
all dynamic parameters of the game can be changed, the phase number, the lives left, 
ammunition left ...).

In the upper part of this window there appears a list with the processes currently active at 
any moment (such as toys or graphics which are being used by program). They can be selected 
with the mouse and, by pressing the button **see data**, all variables, counters, etc. which the 
process is using will be seen.

In the lower part of the screen appears the lists of the program, which basically
are the order in which the PC must action things whilst the game is running. It is
normally divided into small blocks which begin with the word **PROCESS** (one of the reserved words 
of the programming language). In each one of these blocks the orders for a main element of the
game are specified (for example, for a shot being fired, an enemy or an explosion).

**General functioning of the programs**

In short, the games always consist of a sequence of frames. Each frame is composed of
different elements (or processes)of the game. All these elements must, in each frame,
complete a series of operations or calculations (normally very simple) to determine 
what their appearance  must be in the following frame (which picture or graphics the 
frame must show, in which position, of which size, which orientation etc.)

The PC is realising the orders specified for each process until it
comes to the orders for the **FRAME** (frame or fotogram) itself. This order indicates that a
process is already prepared to be shown in the following frame, which means, all the parameters 
which will define its appearance in the following frame have already been allocated.

### Note The orders specified in a program are denoted as statements. Each one of these
statements indicates an operation or calculations which the PC must realise.

In this way, the PC continues realising all these operations and calculations
which the orders of each process have specified, until all active processes
have reached the order statement **FRAME**. At this moment, the PC stops executing 
orders and will focus instead on composing the following frame which must be displayed 
on screen.

In the games these two tasks are consistently alternating, first the orders are executed,
and then the frames are composed and displayed.

**Basic controls of the debugger**

This can be viewed from the program debugger, with the help of different buttons
which allow the actions of the program or game to be realised step by step, 
visibly on screen. These main buttons are the following:

**1. Step.** Indicates to the PC to execute the following order of the next process. The
next process appears in white in the most prominent list of the debugger, and the following 
order to be realised (by this process) appears in the program list in the same colour.

**2. Exec.process.** This button instructs the PC to execute all
instructions of the following process until it  reaches the order FRAME, this means, it must
realise all necessary operations required before the next process can be
displayed in the next frame.

**3. Foll.Frame.** This button is used to advance the game frame by frame.
Each time it is pressed, all necessary orders of all active processes will be executed, 
the new frame will be composed, and finally the frame will be converted to video 
(the term &quot;convert to video&quot; means that the action of one frame of the
is composed in the video / graphics card, and thus will be displayed on the
monitor of the PC).

When a program is realised, all its aspects can be controlled: the order in which the different processes 
are executed, the order in which the graphics are displayed on screen, the interactions of the processes
on screen (when they &quot;are touching&quot; one another, for instance), when sound effects must be played,
the reactions of each process on the keyboard, mouse, etc ...

---------------------------------------
See: [Introduction to DIV 2](welcome_to_div_2015not.md)

