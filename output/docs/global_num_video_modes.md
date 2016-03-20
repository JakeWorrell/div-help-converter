**num_video_modes;** // Number of detected video modes---------------------------------------


The global variable **num_video_modes** contains the number of VESA video modes
which were detected in the system's graphics adaptor.

The parameters of each one of these modes are registered in the global structure
[video_modes](global_struct_video_modes.md), therefore the variable **num_video_modes**
defines the total number of registers defined in this structure.

---------------------------------------


### Note Besides the modes registered in this structure, there exists a list
of **10 standard video modes**, which numbers are contained in the constants 
[m320x200 ... m1024x768](videomodes.md).

---------------------------------------
See: [global data](predefined_global_data.md) - [STRUCT video_modes](global_struct_video_modes.md) - [set_mode()](set_mode().md)

