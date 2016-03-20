

**More extensive programming language.** The programming language has been enlarged, including
many new characteristics and internal functions, the more prominent of which are detailed
below.

---------------------------------------
		

**+150,0**The **compilation options** are a new characteristic of this version, 
which allow you to adapt the process of compilation to the individual requirements of
each project (see [Compiler_options](compilation_options.md)).**-**

**+150,0**In addition to the first version's data (which are now known as [INT](data_of_type_int.md)), 
there now also exists data of the types [STRING](data_of_type_string.md) (strings of text), [WORD](data_of_type_word.md) (16 bit 
positive whole number values), [BYTE](data_of_type_byte.md) (8 bit positive whole number values) and [POINTER](data_of_type_pointer.md) 
(pointers, to all these types).**-**

**+150,0**Also 2 or 3 dimensional **tables** and **structures** (also of any of these
types) can be defined (see the [declaration of a table](declaration_of_a_tabledot.md)), and
the structures can be initiated globally (see [declaration of a structure](declaration_of_a_structuredot.md)).**-**

**+150,0**The new [FUNCTION blocks](the_function_blocks_.md) behave in a similar way to the functions of
other programming languages, they execute sequentially (and not parallel as the processes do),
not returning until they are finished.**-**

**+171,0** Different aspects of the **program debugger** have been improved, with new functions and
support for new types of data. Also new are the **time profiles**, which you can access from the 
debugger using the keyboard command **F11**, here you can observe the time taken in the 
execution and painting of each process.**-**

**+152,0**The **error control system** for the programs has been improved, creating a 
more stable and better executable, there also now exists the possibility
to ignore certain execution errors to allow the program to continue running 
(see the function [ignore_error()](ignore_error().md).**-**

**+157,0****new functions of file management** have been added, which give you 
much more flexibility and potential over the way a program handles files; 
see for example [fopen()](fopen().md), [fseek()](fseek().md), [get_dirinfo()](get_dirinfo().md), [chdir()](chdir().md), 
[remove()](remove().md)) or [disk_free()](disk_free().md).**-**

**+158,0**Besides support for CD-Audio music and digital effects, there now exist
different functions for the reproduction / playback of music modules **MOD**, **S3M** and **XM**
(see [load_song()](load_song().md), [song()](song().md) or [set_song_pos()](set_song_pos().md)).**-**

**+163,0****Optimised code generator.** The code generated for the programs is better and
faster (at least 60%) than the previous version. Also the created programs **EXE**
are much smaller.**-**

**+164,0****Functions for playing games over the internet or other network.** With DIV Games
Studio 2, it is possible to create games to play by **cable**, **modem** and 
**local net IPX**. This functionality is very simply controlled by the functions 
[net_join_game()](net_join_game().md) and [net_get_games()](net_get_games().md).**-**

**+165,0**Also new is the integration into the language of the ability to 
manipulate strings of text, with data of type [STRING](data_of_type_string.md), many new
functions (such as for example [strcat()](strcat().md), [strchr()](strchr().md), [upper()](upper().md)
or [strdel()](strdel().md)) have been added along with adapted syntax to work with 
string expressions directly in the language.**-**

**+166,0****Dynamic memory support**. It is possible to ask for and free up memory
dynamically whilst a program is running, thanks to the functions [malloc()](malloc().md) and
[free()](free().md) (complemented with the new data type [POINTER](data_of_type_pointer.md)).
Also the function [memory_free()](memory_free().md) allows you to determine the free disposed memory 
in the system at a certain point in the program.**-**

**+167,0**You can also now **order** and **disorder** data,
with the simple function [qsort()](qsort().md) which permits you to order
and disorder data structures, taking any field as its index.**-**

**+168,0**Another new feature is the ability to **search for a path**. This is achieved with 
different functions (see [path_find()](path_find().md)) which, for instance, allow you to find the shortest
and best available routes between two points, avoiding any obstacles.**-**

**+169,0****Compression of data.** Everything is more compact; the
executables and installed data (can be created as **compact and protected installations**).
Also functions of compression are included in the language (see [compress_file()](compress_file().md)).**-**

**+170,0****New mode 8.** A new mode with up to 10 screen regions, which allows you to visualise 
maps of three-dimensional sectors. These three-dimensional environments also include an 
integrated editor in the environment and many specific functions (see for example
[start_mode8()](start_mode8().md), [set_sector_height()](set_sector_height().md), or [set_fog()](set_fog().md)).**-**

---------------------------------------


**+176,0****And much more.** What's new in the language doesn't stop here,
there are many other improvements and functions (besides the bugs in the original version
which have been fixed). Outlined below we describe what else is new in the DIV programming
language.**-**

- A new function, called [force_pal()](force_pal().md), allows all {graphics loaded in a program 
to adapt automatically to a palette} at the time of execution.

- Functions for data encryption also exist, such as [encode()](encode().md), 
[encode_file()](encode_file().md) and [decode_file()](decode_file().md).

- The **library declarations** reside now in the headline of the program,
just after the **PROGRAM** statement (see [IMPORT](declaration_of_librariesdot.md)).

- It is now possible to create programs in **much more video modes**, because the available
VESA modes can also be detected (See [video_modes](global_struct_video_modes.md)).

- In this new version **assignations inside a condition** are prohibited, 
to simplify the programming for less advanced users. However this can be changed 
(see [_extended_conditions and _simple_conditions](compilation_options.md)).

- Now it is possible to define the **max number of processes** which can be active in the 
program during execution (see [_max_process](compilation_options.md)).

- It is now possible to define **literals over many lines**, to do this the text must only be 
divided into distinctive literals, and put successively (see the [limitation symbols of literals](double_quote__apostrophe.md)).

- The **sound system** is completely new, and it is now possible to play back **WAV files of better quality** 
in the programs (See [load_wav()](load_pcm()_forward_slash_load_wav().md) and new fields of the structure [setup](global_struct_setup.md)). 
Also new sound functions such as [change_channel()](change_channel().md) or [is_playing_sound()](is_playing_sound().md) have been added.

- Also it is now permitted to use directly **frames of PCX format** in the
programs (See [load_pcx()](load_map()_forward_slash_load_pcx().md)), and to save these files (See [save_map/pcx()](save_map()_forward_slash_save_pcx().md)).

- Functions now exist to fix **a colour of the palette**, such as ([set_color()](set_color().md)) and also
to localise colours ([find_color()](find_color().md)).

- Trigonometric **mathematical functions** as [sin()](sin().md), [cos()](cos().md), [tan()](tan().md),
[asin()](asin().md), ... have been added.

- Also a **primitives painting tool** has been included to create distinct graphics on screen:
such as lines, rectangles and boxes, circles, ... (See [draw()](draw().md)).

- **other functions** have been added which increase the existing possibilities
in the creation of programs, such as [screen_copy()](screen_copy().md), [write_in_map()](write_in_map().md),
[calculate()](calculate().md), [load_screen()](load_screen().md), [xadvance()](xadvance().md), [new_map()](new_map().md), ...

- Also you can count the **frames per second** (See [fps](global_fps.md)), obtain the **parameters of the program** (See
[argv[]](global_argv[.md)), delay the **vertical retrace** (See [vsync](global_vsync.md)), control the
mouse in the programs better (See [mouse.cursor](global_struct_mouse.md) and [mouse.speed](global_struct_mouse.md)), etc.

---------------------------------------


And of course, all functions, data and possibilities which were available in the first
version of DIV Games Studio, still remain! **:)**

---------------------------------------
### See also [New graphical environment changes](new_additions_to_the_environment_in_version_3dot0.md)

