**set_volume(****)**

### Description

Advanced function, only for very experienced users.
Adjusts the different volume controls managed by the **mixer** of the system sound.

To adjust the volume, the following values of the [setup global structure](global_struct_setup.md) must be set:

    **setup.master**   - General volume

    **setup.sound_fx** - Sound effects volume

    **setup.cd_audio** - CC-audio music volume


This function is normally used inside the sound setup programs (see [setup_program](setup_program.md)), or even in the rest of the programs, normally to adjust the CD_Audio music volume.

---------------------------------------


To activate the rest of the values of the setup structure (those referring to the sound card's parameters) the [reset_sound()](reset_sound().md) function must be called with the following defined values of the structure:
 
    **setup.card**

    **setup.port**

    **setup.irq**

    **setup.dma**

    **setup.dma2**


---------------------------------------
See: [reset_sound()](reset_sound().md) - [Setup structure](global_struct_setup.md) - [setup_program](setup_program.md)

