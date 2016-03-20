**reset_sound(****)**

### Description

Advanced function, only for very expert users. Resets the sound system.

This function is used to activate new parameters of the sound hardware.

The following values of the [setup global structure](global_struct_setup.md) must be established:

    **setup.card**

    **setup.port**

    **setup.irq**

    **setup.dma**

    **setup.dma2**


This function is normally used inside the sound setup programs (see [setup_program](setup_program.md)).

---------------------------------------


To activate the rest of the values of the setup structure, those referred to the **mixer** volume, the [set_volume()](set_volume().md) function must be called. The values to establish the volume are the following ones:

    **setup.master**

    **setup.sound_fx**

    **setup.cd_audio**


---------------------------------------
See: [set_volume()](set_volume().md) - [Setup structure](global_struct_setup.md) - [setup_program](setup_program.md)

