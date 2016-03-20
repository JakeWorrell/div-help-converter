**fading=FALSE;** // Indicator of screen fading---------------------------------------
.

This global variable indicates if a screen fading (a gradual change of the game's palette colours) is being performed at a specific moment. Its value will be:

[false (0)](false.md) - If a fading is **not** being performed.

[true (1)](true.md) - If a fading is being performed.

The purpose of this variable is to be able to determine the end of a screen fading started with the [fade()](fade().md) or [fade_on()](fade_on().md) functions.

On using these functions, a fading of the palette's colours will start, gradually coming closer to the definitive colours in the next frames of the game. In every [FRAME](frame_statement.md) statement a part of the fading will be performed.

When a fading is started, the **fading** variable will automatically become equal to **true** (1) and when it is finished, it will recover its original value, **false** (0).

---------------------------------------


### Note 1 Generally, this variable is used to control the [fade()](fade().md) function,
and verify whether the fading has already been executed (performed). For instance, to stop the program's execution until the fading is finished, which can be done with a statement as follows (just after the call to the [fade()](fade().md) function):

  **WHILE (fading)**

      **FRAME;**

  **END**


Literally this statement defines: &quot;**while the fading continues to be performed, a new frame must be displayed**&quot;.

### Note 2 All the programs perform a fading ([fade_on()](fade_on().md)) at
the beginning of their execution (automatically). Therefore, this variable will be put at **true (1)** at the beginning of all the programs until this initial fading doesn't finish (while the screen &quot;**fading on**&quot; is being performed).

---------------------------------------
See: [Global data](predefined_global_data.md) - [fade()](fade().md) - [fade_on()](fade_on().md)

