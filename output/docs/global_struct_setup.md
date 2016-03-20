**STRUCT setup;**

    **card;**     // Type of card

    **port;**     // Access port

    **irq;**      // Interruption request

    **dma;**      // Direct memory access channel

    **dma2;**     // 16 bit channel of access

    **mixer;**    // Type of mixer

    **rate;**     // Max frequency

    **master;**   // Master (general) volume

    **sound_fx;** // Effects volume

    **cd_audio;** // CD audio volume

**END**


This is a very advanced data structure, which is not at all necessary to create a game, no matter how difficult it is, as DIV Games Studio's process manager will normally take charge of the sound hardware automatically.

All the fields referred to the sound hardware are automatically updated by the program if you have a sound card, provided that the **BLASTER** or **GRAVIS** environment variable is properly initialised.

This one record structure contains a series of fields divided into two
groups: the first one, to activate new parameters of the sound hardware installed in the computer, and the second one to adjust the different volume controls managed by the sound system's **mixer**.

---------------------------------------


### Important

The [reset_sound()](reset_sound().md) function must be called to activate the new parameters of the sound hardware inserted in this structure (in the **card**, **port**, **irq**, **dma** and **dma2** fields).

The [set_volume()](set_volume().md) function must be called to activate the new volume levels inserted in the structure (in the **master**, **sound_fx** and **cd_audio** fields). 

This structure is normally used inside the sound system setup programs (see [setup_program](setup_program.md)).

### Note To access these fields, the field name must be preceded by the word **setup** and by the symbol [. (period)](dot__minusgt.md). For instance, **setup.master** must be used to access the **master** field (which indicates the mixer's general volume level).

---------------------------------------


A more detailed description of every field of this structure is now shown.

**card** - Indicates the type of sound card installed in the computer.
The program accepts cards of the **Sound Blaster** (tm) and **Gravis Ultra Sound** (tm) families, as well as all those **100%** compatible with them.

The values that this field can take are the following ones, depending on the sound card type:

    Without card or sound    = **0**

    Sound Blaster 1.5        = **1**

    Sound Blaster 2.0        = **2**

    Sound Blaster Pro        = **3**

    Sound Blaster 16         = **4**

    Sound Blaster AWE        = **5**

    Gravis Ultra Sound       = **6**

    Gravis Ultra Sound MAX   = **7**


---------------------------------------


**port** - Indicates the computer's communications port in which
the data of the sound card must be written and read.

The values that this field can take are the following ones, depending on the port assigned to the sound hardware:

    0x210 = **0**

    0x220 = **1**

    0x230 = **2**

    0x240 = **3**

    0x250 = **4**

    0x260 = **5**


---------------------------------------


**irq** - This field indicates the number of IRQ (Interrupt request) assigned to the active sound card.

The values that this field can take are the following ones, depending on the IRQ used by the card:

    IRQ 2   = **0**

    IRQ 3   = **1**

    IRQ 5   = **2**

    IRQ 7   = **3**

    IRQ 10  = **4**

    IRQ 11  = **5**

    IRQ 12  = **6**

    IRQ 13  = **7**

    IRQ 14  = **8**

    IRQ 15  = **9**


---------------------------------------


**dma** - The direct memory access (DMA) channel's number used by the sound card must be indicated in this field.

This field can take values from 0 to 10, directly depending on the channel's number.

---------------------------------------


**dma2** - Some sound cards have a second direct memory access channel
faster than the previous one, of 16 bits, commonly named HDMA, DMA2 or DMA16.

Like in the previous field of this structure, this second channel can take values from 0 to 10 depending on the 16 bit channel's number used by the card.

---------------------------------------


**mixer** - Type of mixer used by the sound system, can be one of these two constants:

  **fast_mixer** - Fast mixer with two sound channels (1).

  **quality_mixer** - Max quality mixer (2).


By default, all programs will be initialised with the fast mixer setting activated 
(**setup.mixer=fast_mixer;**) because this is the faster mode.

---------------------------------------


**rate** - Max permitted frequency (bit rate), a value between **11025**Hz (the min permitted quality of sound) and **44100**Hz (quality CD). By default, all programs are configured as 44100 (**setup.rate=44100;**), 
but it can be changed, because with the best quality, 
the sound system will be slower and will consume more processor time.

The value specified in **setup.rate** is the **max quality**
of sound, this means all loaded effects of sound will
reconfigure to this quality if they have a better quality. This means, all effects
saved to a frequency of 11025 will play with poor quality, although
the max permitted frequency may be bigger.

---------------------------------------


**bits** - Resolution of the digital effects samples and musical modules,
this field can have one of these constants as its value :

  **sound_bits_8** - 8 bit samples.

  **sound_bits_16** - 16 bit samples.


The effect is similar to the value specified in the field **rate**, the **8 bit** sounds will sound
worse (and occupy less space) than those of **16 bit** quality. The value
indicated in **setup.bits** indicates the max depth of the sample.

By default, all programs activate **16 bit** samples ({setup.bits=sound_bits_16;)), 
because the difference in quality is considerable.

---------------------------------------

**master** - This field contains the output general or master volume of the card. A number ranging from 0 (minimum volume) and 15 (maximum volume) must be here indicated. By default, the value equals **15**, the maximum volume.

Turning the master volume down will affect the sound effects' volume as well as the CD audio music reproduction's volume.

---------------------------------------


**sound_fx** - This field controls the volume to which the sound effects executed with the [sound()](sound().md) functions are reproduced.

This volume is independent from that used with the sound functions. The former is general for all the sound effects. On the contrary, the latter (volume indicated in the functions) is specific for every sound.

The values of this field also range from 0 (minimum volume) and 15 (maximum volume). By default, the value will be equal to the maximum volume.

---------------------------------------


**cd_audio** - This field controls the volume of the music that will be reproduced from the audio tracks of a CD ROM or Compact Disc.

Similar to the two previous fields, the values of this field can also rage from 0 (minimum volume) and 15 (maximum volume). By default, the value will be equal to the maximum volume.

---------------------------------------
See: [Global data](predefined_global_data.md) - [reset_sound()](reset_sound().md) - [set_volume()](set_volume().md)

