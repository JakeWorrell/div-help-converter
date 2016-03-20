Constants: **c_0** ... **c_9**
---------------------------------------


These constants are used to be assigned to the predefined [cnumber](local_cnumber.md) local variable that is used to define the scroll or mode 7 windows in which the graphic of a process must appear.

**This will only be necessary when several scroll or mode 7 windows have been activated, and it ISN'T aimed to display the graphic of the process in all of them.**

Up to 10 windows of these types may be defined, numbered from **0** to **9**, and that directly correspond with the constants
**c_0**, **c_1**, **c_2** ... **c_9**.

For the graphic of a process to appear in one of these windows only, the corresponding constant must be assigned to its 
[cnumber](local_cnumber.md) local variable. For instance, if the aim was for the graphic of a process to appear only in (scroll or mode 7) window number 3, the following statement would be included in its code:

  **cnumber=c_3;**

If the aim for the graphic of a process is to appear in several of these windows, then the constants must be added.
For instance, for a process to appear in the windows 0, 4, and 5, the following assignment will be performed:

  **cnumber=c_0+c_4+c_5;**

For the graphic to appear in all the windows, suffice will be to assign **0** to the [cnumber](local_cnumber.md) variable. It won't be necessary if this variable has not been modified, as it is its value by default.

The values equivalent to these constants correspond with the following powers of 2:

    **c_0** = 1   scroll / mode-7 number 0

    **c_1** = 2   scroll / mode-7 number 1

    **c_2** = 4   scroll / mode-7 number 2

    **c_3** = 8   scroll / mode-7 number 3

    **c_4** = 16  scroll / mode-7 number 4

    **c_5** = 32  scroll / mode-7 number 5

    **c_6** = 64  scroll / mode-7 number 6

    **c_7** = 128 scroll / mode-7 number 7

    **c_8** = 256 scroll / mode-7 number 8

    **c_9** = 512 scroll / mode-7 number 9


---------------------------------------
See: [Constants](constants_predefined.md) - [cnumber](local_cnumber.md).

