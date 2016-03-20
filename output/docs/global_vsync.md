**vsync=0;** // Wait the vertical retrace---------------------------------------


The global predefined variable **vsync** defines a logical value (0 or 1) which
indicates if it is necessary to wait before doing a **vertical retrace** the following
frame is converted to video (when all processes execute the statement [FRAME](frame_statement.md)).

By default this variable will be set to **0**, which means, the process does not delay the
vertical retrace before converting each frame to video.

To indicate to the system that it must delay the vertical retrace you must set
this variable to **1** (with the statement **vsync=1;**).

---------------------------------------


### Note Delaying the vertical retrace can make movements more soft to the eye 
(this effect is visible most of all in the panoramic effects, see [start_scroll()](start_scroll().md)), 
 but delaying the retrace will also slow the programs down in the great majority of cases.

---------------------------------------
See: [global data](predefined_global_data.md)

