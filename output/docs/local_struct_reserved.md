**STRUCT reserved;**

    **process_id;**    // Identifier of the process

    **id_scan;**       // Index of processes

    **process_type;**  // Type of process

    **type_scan;**     // Index of types

    **status;**        // State of the process

    **param_offset;**  // Offset of the parameters

    **program_index;** // Program counter

    **is_executed;**   // executed process

    **is_painted;**    // painted process

    **distance_1;**    // Mode 7 reserved

    **distance_2;**    // Mode 7 reserved

    **frame_percent;** // Percentage of frame

    **box_x0, box_y0;** // Beginning of the process' graphic

    **box_x1, box_y1;** // End of the process' graphic

    **m8_object;**      // Object inside the world m8

    **old_ctype;**      // Old Ctype

    **f_count;**        // Accumulating function counter 

    **caller_id;**      // Process or function caller

    **stack_pointer;**  // Stack pointer for the process


**END**


In this structure, different **variables of internal use** (used by the **manager of processes of DIV Games Studio**) are stored.

They are local variables reserved for the system. It is not necessary to know these variables, as most of them are not useful to create programs.

### Important The modification of the values of these variables will probably provoke **crashing** the computer, an incorrect working of the **manager of processes** or problems on using many of the internal functions. Therefore, no responsibility is assumed for the problems derived from an incorrect use of the **reserved** structure.

---------------------------------------


A **brief description** of each of these fields is now shown, just for information.

**process_id** - [Identifying code](_identifying_codes_of_processesdot.md) of the process. This value is normally obtained with the reserved word [ID](id.md) and the value of this field must not be modified.

**id_scan** - It is internally used for detecting collisions in order to save the [identifying code](_identifying_codes_of_processesdot.md) of the last process that has collided with the current process.

**process_type** - Type of the current process, normally obtained with the operator [TYPE](types_of_processesdot.md), later indicating  the process name (see [Types of processes](types_of_processesdot.md)).

**type_scan** - It is internally used to detect collisions or obtain identifying codes of processes of a specific type.

**status** - Present state of the process. The values that this field can adopt are the following ones:

  **0** - non-existent process.

  **1** - process that has received a signal **s_kill**.

  **2** - alive or awake process (s_wakeup).

  **3** - asleep process (s_sleep).

  **4** - frozen process (s_freeze).


**param_offset** - Offset of the computer's memory in which the parameters received by the process are located.

**program_index** - Program's counter. Offset of the computer's memory in which the first statement that must execute the process in the next frame is located.

**is_executed** - It indicates whether this process has already been executed in the current frame.

**is_painted** - It indicates whether the graphic of the process has already been painted in the current frame of the game.

**distance_1** - Vertical distance of the process (reserved for processes displayed in a mode 7 window).

**distance_2** - Horizontal distance of the process (reserved for processes displayed in a mode 7 window).

**frame_percent** - Percentage of the following frame completed by the process. This value will be useful when the [FRAME](frame_statement.md) statement is used indicating a percentage. Otherwise, it will simply be equal to 0 (0%) when the process has not been executed and 100 (100%) when it has already been executed.

**box_x0, box_y0** - Upper left coordinate of the graphic in the previous frame of the game (where the graphic was placed at screen coordinates).

**box_x1, box_y1** - Lower right coordinate of the graphic in the previous frame of the game.

**m8_object** - number of object inside the mode 8, indicates an ordinal
relative to the map of sectors.

**old_ctype** - old value of the local variable ctype, is used to
control changes in the coordinates of the process.

**f_count** - accumulation counter of the function, to control the number
of returns and level the battery for each process.

**caller_id** - identification code of the process or function which invoked
this.

**stack_pointer**  - pointer of local stack of each process, maintains
the direction of the stack at the start of the process, with the stacked parameters


---------------------------------------
See: [Local data](predefined_local_data.md) - [Syntax](syntax_of_a_programdot.md)

