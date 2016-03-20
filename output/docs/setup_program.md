This reserved word is used to designate  special kinds of programs, related to the **sound hardware setup**.

The special characteristic of these programs is that they start with the reserved word **SETUP_PROGRAM** instead of [PROGRAM](programapostrophes_headdot.md).

This topic is very advanced, for expert users only.

A program of this type can be observed in the **SETUP** directory of DIV Games Studio. These programs, once they have been compiled, will automatically be included in the installations of the rest of the programs, when the box &quot;**Include sound setup**&quot; is activated during the installation process.

### Note In the installations, the last setup program compiled in DIV Games Studio will always be included.

---------------------------------------


However, keep in mind that it is not indispensable to create sound setup programs, as the games created with DIV Games
Studio will automatically detect whether the computer in which they are executed is provided with a sound card compatible with **Sound Blaster** or **Gravis Ultrasound**, providing that it is correctly configured.

---------------------------------------


This kind of programs normally modify the [setup global structure](global_struct_setup.md), that controls the parameters of the sound system.

---------------------------------------
See: [Syntax](syntax_of_a_programdot.md) - [Setup structure](global_struct_setup.md)

