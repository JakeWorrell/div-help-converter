**joy_status=0;** // State of the joystick---------------------------------------


The state of the joystick (or gamepad) connected to the computer is indicated in this global variable. These are the values that this variable takes by default:

**0** - If the joystick reading system is disabled. This value means that a joystick connected to the computer either has not been found at the beginning of the program's execution, or has been disconnected.

**1** - If the joystick reading system is active. This is the initial value by default, but if the joystick is disconnected (or there is no joystick connected), the reading system will be disabled (indicating **0** in the joy_status variable).

If the system is disabled, it can be reactivated by simply assigning **1** to **joy_status** (with the **joy_status=1;** statement). But if, after a limited time, no joystick is detected, the system will be disabled again.

---------------------------------------


There is a **special mode** in which the joystick reading system **won't be ever disabled**. This mode is simply defined by {assigning 2 to
joy_status}.

  **joy_status=2;** // Activates special mode


Nevertheless, much care must be taken as, if the joystick reading system is activated in this way, and there is no joystick connected to the computer, **the game's execution may be slowed down**.

---------------------------------------


### Note To read the joystick in the programs, the [global joy structure](global_struct_joy.md) is normally accessed. This structure always indicates its offset and the state of its
buttons (whether they are pressed or not).

---------------------------------------
See: [Global data](predefined_global_data.md) - [Joy structure](global_struct_joy.md) - [joy_filter](global_joy_filter.md)

