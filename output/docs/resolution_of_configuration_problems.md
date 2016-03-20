**General resolution of audio problems.**

If the audio system couldn't be initiated, it is most likely because of a sound card
conflict. This problem is often produced by one of these causes :

- The card is being used at the same time by **another program**. It cannot
initiate the sound if any other program is reading or writing
data via the card (such as an  MP3 player or sound capture device).

- A problem can occur with the **auto-detection** of the soundcard's parameters.
You must execute the sound configuration program or define these values in the 
variable BLASTER or ULTRASND of the system environment (you can find
more information in the user's manual for DIV Games Studio 2).

- Because the soundcard is **incompatible** with DIV. 
If the card is not a GRAVIS (tm) or SOUND BLASTER (tm), it may be incompatible
with DIV Games Studio. The majority of commercial cards are compatible
with SOUND BLASTER, but may not be 100% compatible and may present some problems.

If your particular problem doesn't fit into any of these three cases,
you must first execute the sound configuration program. This can be
called from DIV by pressing **F4**, or loading the program **SETUP.PRG** from the
**SETUP** directory , and executing it with the key command **F10**.

In this program you must input the parameters of your sound card.
To obtain these parameters in MS Windows it is probably best to consult
the soundcard's handbook, but normally you can also access them the following way: 
pressing with the right mouse button in &quot;My Computer&quot;, activating the Properties menu \
Device Manager \ Sound, video and games Controllers,
selecting your audio card (normally one compatible with &quot;Sound Blaster&quot; or &quot;SB&quot;) 
and pressing the Properties button. Then a dialogue will appear with the 
characteristics of your sound card where, in the Resources pane you'll find:

**1.** The IRQ number of your card as an &quot;interrupt request value&quot;.

**2.** The DMA and of DMA2 (also denominated as HDMA or DMA16) numbers 
which are the two &quot;direct memory access&quot; values.

**3.** The port number as the initial value of the first &quot;enter/exit value&quot;.

Also you can try to configure the sound system indicating in the 
configuration program a simpler card (previous to yours). For example, if you
have a soundcard compatible with a **Sound Blaster AWE 64** or **128** and cannot
get the sound system to initiate; try to configure the system as if it were
a **Sound Blaster 16**, or **Sound Blaster Pro** card.

As the last recourse, if it is not possible to configure the sound in your system,
you must deactivate it. For this you must execute the configuration program
and select the value **&lt;Without sound&gt;** in the field which defines the type of card.
Then press the **&lt;Save&gt;** button to establish this configuration and deactivate
the sound in DIV Games Studio 2.

If you are unable to hear the sound effects in your program on your PC, you probably have a sound 
card which is not 100% compatible with the Sound Blaster or Gravis Ultrasound family of cards. 
Consult your dealer.

### Note The reproduction of CD-Audio is independent of the digital sound system
whose configuration is described here; therefore CD music will be reproduced
although the sound system may not have been correctly initialised.

---------------------------------------


**Video or Graphics card Problems.**

If at any time DIV enters a resolution which cannot be displayed properly, the first thing which 
must be done is to exit from the environment by pressing the key combination **ESC+control** 
(or **ALT+X** and **Enter** in succession) and, then, re-enter the program in safety mode. To enable this 
mode you must, from the **MS-DOS** command prompt and in the directory (FOLDER) in which the program 
was installed , execute the following command:

**  D /SAFE**


This way you will load up the environment in a low resolution (in 320x200, the most compatible mode),
from this mode you can attempt to put in other resolutions which will be
compatible with your graphics card and with your monitor.

On those PCs where the graphics card is not compatible with the standard
VESA system you must install VESA driver for the card. For this, you must contact your 
card supplier or technical support of your hardware for the driver. ( A driver is a small program 
which must be installed on the PC to give support for some hardware or utilities such as, 
in this case, your video or graphics card).

---------------------------------------


**Problems with the mouse.**

If the mouse is jumping on the screen, instead of moving smoothly from point to point, 
it is because you're using an incorrect or out of date mouse handler (the mouse driver is not
functioning properly). You can resolve this problem in one of these ways:

**1.** Contact with the supplier of your PC to obtain the latest driver for your mouse.

**2.** Change the resolution of the program (with the option **system\video mode**)
to another which does not produce this problem.

**3.** (MS-DOS, only for advanced users). Comment out the line in your autoexec.bat file 
in which the mouse driver is loaded. This can be done from the DIV environment, by loading this file 
(situating on the root directory of your hard disk) with the key command F4 
and adding the word REM at the beginning the line which loads the mouse driver 
(a line which normally finishes with the text ...  mouse.com). Then press
F2 to save the file, close it (pressing on the upper left corner
of the text window), exit from DIV (ALT+X) and re-start your PC. If
you then have problems with another program which requires this driver,
return to edit the same autoexec.bat file and remove the word REM which was added.

---------------------------------------


**Solution of possible installation problems.**

If you find any problem, check the minimum requirements indicated in the program. 
If you have doubts about one of the elements consult the technical support of your PC 
or your PC supplier.

The most likely problem is reading from the CD-ROM drive; for this, clean the surface of the 
DIV Games Studio CD carefully with a clean and dry duster, and attempt the installation of the 
program once more.

**Manual installation**

If you couldn't install the program correctly and have a lot of free space on the 
hard disk of your PC (sufficient to allow a maximum installation) you can attempt a manual 
installation of the program, by following these steps:

**MS-DOS users** - Supposing that your CD-ROM disk drive is the letter D:, select the CD-ROM 
drive with the following command:

###   D

And press Enter. Then introduce the following commands (supposing that your hard disk is the C:
drive):

**  XCOPY DATA\*.* C:\DIV\*.* /S**

###   C

**  CD \DIV**

**  DEL INSTALL*.***


Pressing Enter after each one of these commands. If you have sufficient space the
program will be installed without any problem, introduce this command to execute it afterwards:

**  D /SAFE**


For the next steps in executing the program, follow the conventional instructions.

**Users of Windows 95/98** - Open the MS-DOS prompt (double clicking on its icon, or via
start menu \ programs \ ms-dos) and follow the instructions for MS-DOS users. For 
the remaining executions of the program you can use the instructions that come with the
operating system, remembering that the program will be installed in the DIV folder
of your hard disk.

---------------------------------------


If you cannot get the program to function correctly with these suggestions, then contact
your FastTrak Technical Support, its tel. is (44) 1923 495497 (01923 495497 for UK users) 
during normal office hours **Monday to Friday** from **09:00 to 17:30** or go to **http://www.div-arena.com**
and try the message forums or the live chatroom.

Remember though, that as DIV Games Studio is a big selling product with limited technical support
facilities, it is best to first try and follow carefully all instructions and check the website 
before making a call to this service.

### Important This technical support service does not provide any consultation regarding
the programming language, because we could not give any more advice than is contained in the 
**help file** and the **user's manual** of the program. With these you can find a solution 
for any doubts regarding the programming language you have.

