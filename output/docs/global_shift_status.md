**shift_status=0;** // State of the special keys---------------------------------------
.

The state of different special keys, such as [**ALT**], [**CONTROL**], etc. is indicated in this predefined global variable.

Each of these keys have the following code assigned:

Right SHIFT key        = **1**

Left SHIFT key         = **2**

CONTROL keys           = **4**

ALT and/or ALT GR keys = **8**

SCROLL LOCK key        = **16**

NUM LOCK key           = **32**

CAPS LOCK key          = **64**

INSERT key             = **128**


The **shift_status** variable will contain the **addition of all the codes of the pressed or activated keys**.

For instance, if the [**ALT**] key was pressed ant the [**CAPS LOCK**] was activated, the **shift_status** variable's value would equal **72** (8+64).

In order to verify whether a key like [**ALT**] is pressed, it is not possible to check that **shift_status** is equal to **8**, as it would imply that [**ALT**] is
the **only** pressed or activated special key.

A correct verification would be carried out as follows:

  **IF (shift_status AND 8 == 8)**

      // The [ALT] key is pressed ...

  **END**


---------------------------------------


### Note The [key()](key().md) function is normally used to verify whether a key is pressed. But it is not possible to determine with this same function whether keys such as **CAPS LOCK** are activated, but only if they are pressed or not.

There are two variables containing the code of the last pressed key;
[scan_code](global_scan_code.md) (**scan** code of the last pressed key) and [ascii](global_ascii.md)
(**ascii** code of the last pressed key).

---------------------------------------
See: [Global data](predefined_global_data.md) - [key()](key().md) - [ascii](global_ascii.md) - [scan_code](global_scan_code.md)

