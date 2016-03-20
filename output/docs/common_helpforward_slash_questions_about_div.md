**Where can I find information about DIV?**

The DIV Games Studio Environment has its own dedicated web site **WWW.DIV-ARENA.COM**,
from here you can download upgrades and utility packages, get technical support, review / submit 
Games designs and chat to other DIV users about cool new games, hints on obtaining the best from DIV etc..
in fact talk about whatever you wish.

**How can I obtain help about ... ?**

All options accessible from options menus are described
exclusively in the **user manual** for DIV Games Studio 2.

**How can I resolve a configuration problem ?**

For sound problems, incomplete installations, etc., see the chapter
[resolution of problems](resolution_of_configuration_problems.md) of this electronic help.

**What improvements have been made for this version?**

They are divided in two groups: the [new language capabilities](new_language_commands_etcdotdot_in_div_version_3dot0.md)
(explained in this **help**), and the [new environment](new_additions_to_the_environment_in_version_3dot0.md) (explained in the **user's manual**).

**Why did I get the error message &quot;Can't recognise the file type&quot;?**

It is possible that you are attempting to load a file with an incorrect menu, which means,
the palette menu serves only to load palettes, the files menu only loads
graphics files (groups of graphics), the programs menu loads programs or text files, etc.

You may also be attempting to load a PCX or BMP Map in true colour,
this version of DIV can work only with 256 colour graphics, so these types of 
files are impossible to import. The graphics which you want to load
into DIV must first be converted into 256 colours with another application.

**How can I stretch a graphic?**

To stretch a graphic you must press the left mouse button in the
map window, not on the bar with its name, but on the proper graphic
contained in the window. Then move the mouse to the position
in which you want leave the graphic and let go of the left mouse button 
(you can stretch maps in files, to the trash, to the background, in other maps
or in the fonts generator).

**How can I drag a graphic contained in another graphic out?**

**+126,0**You must select the part of the graphic which you want to drag out from
the section blocks. The new section could be represented as a rectangle, 
painting contours, etc.**-**

**+133,0**Once the selection has been extracted many new icons  will appear 
on the toolbar, including the icon **cut the window**.
After pressing on this the desktop **creates a new map window**
**and inserts the selected zone** into it.**-**

**How can I cut and copy the graphics?**

**+126,0** See also the last question. To cut and move graphics you must access
the **toolbar**, inside the picture window, selecting the icon which shows cutters.

From the desktop some operations can be achieved, such as copying
one graphic into another, this can be made by dragging the first one
into the second. Also a copy of a graphic can be created if you drag
it to the background (area of the desktop which doesn't contain any windows).

**What must I do if the system becomes unstable?**

DIV Games Studio is a very complex program and, although it is stable
in its execution, it is possible that a module makes an error
after completing a determined action, or crashes the PC.

If this happens, to return the system to its original state, you must load
DIV from the MSDOS prompt indicating the parameter** /SAFE** (introducing the command 
D.EXE /SAFE from the directory where the program was installed), to enter DIV 
in  &quot;debug mode&quot;.

**What must I do to learn the programming language ?**

The basic concepts are not explained in this help file, but in the user's 
manual for DIV Games Studio 2, in the chapters 4, 5 &amp; 6.

Also you can learn a lot from the Examples of the language functions 
(See the list of functions in the language help)
and the tutorials, which are simple mini-games 
designed to simplify the learning of the language (you can find these tutorials
in the directory PRG/TUTOR of DIV Games Studio 2).

**How are the graphics loaded into the games?**

In a game the graphics contained in the map (MAP or PCX files) can be used, 
loading them using the functions [load_map()](load_map()_forward_slash_load_pcx().md) or [load_pcx](load_map()_forward_slash_load_pcx().md), 
or placing some graphics in FPG file of several graphics and then loading them 
with the function [load_fpg()](load_fpg().md), this last option has an advantage because 
many graphics can be loaded at the same time in the game.

Often the graphics are assigned to the variable
[LOCAL graph](local_graph.md) of the processes of the game.

**How to show a new graphic in the game?**

To create a new graphic or &quot;sprite&quot; in a game, first a new process ([PROCESS](declaration_of_processesdot.md)) 
must be created with the commands which will manage
its conduct in the game, then every time you want
to create a process of this type, you must call the process
(See how to make a [call to a process](call_to_a_process.md)).

**How to undo a process?**

To undo or &quot;kill&quot; a process of the game, you can execute
a [RETURN](return_statement.md) statement from itself or, to kill a process from another process, 
send a signal s_kill (See the function [signal()](signal().md), which is used for this).

**Which are the functions that manage the mouse?**

The mouse is not controlled by any function, but by the global structure
[mouse](global_struct_mouse.md), you can access the help file about **language** / **global data**
to see the other structures which control other important aspects of the games.

**Where are all DIV files loading from ?**

When the function load_fpg( ... ) is called in a program 
the internal manager of DIV attempts to locate this file following this
method (supposing that it intends to load the file &quot;DIR/file.EXT&quot;):

- First it checks where the executable (EXE) of the game is,
or in the main directory of DIV (where D.EXE is) in case the game
will be executed from this environment.

- Then the program attempts to open the file from the directory 
specified in the function (&quot;DIR/file.EXT&quot;).

- If the program has still failed to open the file, it will attempt to load the
file inside a directory which has the same extension as the one specified, 
such as &quot;EXT/DIR/file.EXT&quot;.

- If this is still not found, the program will try to load the file
without a specific path, meaning &quot;file.EXT&quot;.

- Finally, if the file was not found in any of those directories, the program will
attempt to find the file in the directory whose name coincides with the extension 
of the file, ignoring the path passed to the function, such as &quot;EXT/file.EXT&quot;.

