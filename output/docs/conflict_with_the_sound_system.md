The audio system of DIV Games Studio was not initiated because of
a conflict with your sound card. This problem is often produced for these reasons:

- The card is being used at the same time by **another program**. It cannot
reproduce the sound if any other program exists which reading or writing
data to the card (such as an MP3 player or sound capture device).

- A problem with the **auto-detection** of the card's parameters can occur.
You must execute the sound configuration program or define
these values in the variable BLASTER or ULTRASND of the system environment (you can find
more information on this in the user's manual of DIV Games Studio 2).

- Because of the **incompatibility** of the card. If the card is not a
mark GRAVIS (tm) or SOUND BLASTER (tm), it may be incompatible
with DIV Games Studio. The majority of commercially available cards are compatible
with SOUND BLASTER cards, but they still may not be 100% compatible and may
present some problems.

---------------------------------------


**General solution of the audio problems.**

If your particular problem doesn't fit into any of these three cases,
you must first execute the sound configuration program. This can be accessed
from DIV by pressing **F4**, loading the program **SETUP.PRG** from the
**SETUP** directory, and executing it with the key command **F10**.

In the first chapter of the **user's manual** you can find the information 
about how to obtain the parameters of your sound card.

Also you can try the configure the sound system indicating in the configuration 
program as if your card was a simpler one (previous to yours). For example, if you
have a card compatible with a **Sound Blaster AWE 64** or **128** and cannot
initiate the sound system; try to configure the system as a
 **Sound Blaster 16**, or **Sound Blaster Pro** card.

As the last recourse, if it still wasn't possible to configure the sound in your system,
you must deactivate it. To do this execute the configuration program
and select **&lt;Without sound&gt;** in the field which defines the type of card.
Then press the **&lt;Save&gt;** button to establish this configuration and deactivate
the sound in DIV Games Studio 2.

---------------------------------------


### Note The playback of CD-Audio is independent of the digital sound system
which configuration is described here; therefore CD music will continue to be played
although the sound system has not been initiated properly.

