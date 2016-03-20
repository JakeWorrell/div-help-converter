**fps;** // Number of frames per second---------------------------------------


The global predefined variable **fps** (frames per second) maintains the
number of frames per second which the program shows.

This variable is set by the internal processes of DIV Games
Studio automatically. It doesn't determine this value in an instant, but
rather takes an average over the last few seconds.

The function [set_fps()](set_fps().md) allows you to set the number of frames
per second of the program, but this establishes the ideal number
of frames and not the actual (which is stored in **fps**).

This means, that this variable serves as a counter to determine how many frames
per second, on average, are converted to video.

---------------------------------------


### Note The variable **fps** contains data only for reading, and its value cannot be
modified by the program.

---------------------------------------
See: [global data](predefined_global_data.md) - [set_fps()](set_fps().md)

