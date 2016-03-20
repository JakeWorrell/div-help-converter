**channel[31];** // Use of sound channels---------------------------------------


The global table **channel** maintains information about the use
of the different (up to 32) sound channels of the audio system.

Each time when you play a sound with the function [sound()](sound().md), it is sent 
to one of these channels. And if the playback of one musical module with the 
function [song()](song().md) is initiated, a determined number of channels (up to 24) 
are reserved for it.

In this table, each position represents one of these sound channels,
and the system sets the value of each position to **1** when its respective channel is used.

The function [change_channel()](change_channel().md) allows you to modify the parameters of
each one of these channels.

---------------------------------------


### Note The system will never automatically set the value of the positions of the table **channel** to **0**,
this must be done with the program code, and similarly the program must determine
when a channel is used once more.

---------------------------------------
See: [global data](predefined_global_data.md) - [change_channel()](change_channel().md)

