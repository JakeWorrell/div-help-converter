Constants: **m320x200** ... **m1024x768**
---------------------------------------


These constants are used to indicate the videomode in the [set_mode()](set_mode().md) function. The whole list of constants is the following one:

    m320x200

    m320x240

    m320x400

    m360x240

    m360x360

    m376x282

    m640x400

    m640x480

    m800x600

    m1024x768


Each constant indicates the videomode in the following way: first,
the letter **m** and then, the horizontal and vertical resolution of the mode, separated by an **x**.

The values defined for these constants are the following ones.

    m320x200  = 320200

    m320x240  = 320240

    m320x400  = 320400

    m360x240  = 360240

    m360x360  = 360360

    m376x282  = 376282

    m640x400  = 640400

    m640x480  = 640480

    m800x600  = 800600

    m1024x768 = 1024768


---------------------------------------


### Note Besides these standard video modes, the global structure
[video_modes](global_struct_video_modes.md) contains a list of all modes compatible with the VESA standard
situated in the system's video adaptador.


---------------------------------------
See: [Constants](constants_predefined.md) - [set_mode()](set_mode().md) - [video_modes](global_struct_video_modes.md)

