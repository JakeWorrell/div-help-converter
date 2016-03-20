**STRUCT joy;**

    **left;**    // Left control

    **right;**   // Right control

    **up;**      // Up control

    **down;**    // Down control

    **button1;** // First button

    **button2;** // Second button

    **button3;** // Third button

    **button4;** // Fourth button

**END**


This global structure is used to control the **joystick**. It contains a series of logical fields related to the programming of this device: the state of the buttons (whether they are pressed or not) and the state of the main four control directions.

To access these fields, the name of the field must be preceded by the word **joy** and the symbol [. (period)](dot__minusgt.md). For instance, to access the **left** field (which indicates whether the left control is pressed), it is necessary to use **joy.left**.

---------------------------------------


**left** - This field will be at **1** when the **joystick** is orientated to the **left**, and at **0** in the opposite case.

**right**  - This field will be at **1** when the **joystick** is orientated to the **right**, and at **0** in the opposite case.

**up**  - This field will be at **1** when the **joystick** is orientated **up**, and at **0** in the opposite case.

**down**  - This field will be at **1** when the **joystick** is orientated **down**, and at **0** in the opposite case.

For instance, to perform an action in a program **when the joystick is moved to the right** (**joy.right**), a statement like the following one must be included in the code:

  **IF (joy.right)**

    // Action to perform (statements)

  **END**


For diagonal positions, the two fields comprising this diagonal must be verified. For instance, to perform an action when the **joystick** is in the upper right diagonal, the following statement will be used:

  **IF (joy.up AND joy.right)**

    // Action to perform (statements)

  **END**


---------------------------------------


**button1**, **button2**, **button3** and **button4** - These fields indicate the state
of up to four joystick's buttons, being at **1** when the respective button is pressed, and at **0**, when it is not.

Some joysticks only have 2 buttons. In this case, they will be buttons number 0 and 1. In computers with two connected joysticks, the second joystick
will have the buttons number 2 and 3.

---------------------------------------


### Note When an analogical reading of the **joystick** is required (to know the exact coordinates at which the joystick is located), it will be necessary to use the [get_joy_position()](get_joy_position().md) function. Obviously, this function will only be useful in an analogical **joystick**, and it won't work in the digital ones.

---------------------------------------
See: [Global data](predefined_global_data.md) - [get_joy_position()](get_joy_position().md) - [get_joy_button()](get_joy_button().md)

