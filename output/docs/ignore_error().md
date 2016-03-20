**ignore_error(**&lt;error number&gt;**)**

### Description

This function allows you to ignore a specified execution error,
the **&lt;error number&gt;** is required as a parameter; this is the present
number in the information window of an error which appears on occasions
when a program is being executed.

At the beginning it is not recommended to ignore the execution errors,
because the program may not work correctly, and you may need some information
relative to the error to solve the problem.

When a program produces an execution error, it is always for a reason;
and to ignore the error will not solve the problem.

---------------------------------------


### Note Not all the errors can be ignored, there are some errors which
make it impossible for the program to run properly. These are the errors
denoted as &quot;serious&quot;, which will always cause the program to abort.

---------------------------------------


### Example program
```
PROGRAM example_ignore_error;
BEGIN

    ignore_error(145); // To ignore the divisions by zero

    x=x/0;
END
```


In this example the function **ignore_error()** is called to advise 
the system that, from now on, it should ignore all divisions by zero
(these will produce an unquantifiable result).

Now a division by zero is made, to check that the program doesn't emit
an error message.

This error number is **145**, the same as the number given with the call to the
function **ignore_error()** of the previous example.

---------------------------------------


### List of codes of execution errors

**100** There is not enough memory to run the program.

**101** Call to key() with a nonexistent key code.

**102** The palette was not loaded, file not found.

**103** An invalid palette file was loaded.

**104** Too many FPG files are open at the same time.

**105** The file was not loaded, file not found.

**106** An invalid FPG file was loaded.

**107** Number of scroll invalid (must be between 0 and 9).

**108** Number of region invalid (out of range).

**109** file Code invalid.

**110** Code of graphic invalid.

**111** An FPG file was used before it was loaded.

**112** A graphic's code is needed for the scroll.

**113** Too many fonts have been loaded.

**114** The font was not loaded, file not found.

**115** An invalid font file was loaded.

**116** Identifier code of fonts invalid.

**117** Code of text centre invalid.

**118** There are too many blocks of text currently active in the program.

**119** Identifier of text invalid.

**120** Screen region is defined incorrectly.

**121** Nonexistent graphic was used.

**122** A block out of memory was written.

**123** The file you are attempting to write to hasn't been opened.

**124** Can't write to the file (check space on disk).

**125** A block out of memory was read.

**126** Can't open the file for reading.

**127** Can't read the file.

**128** Can't load the sound effect.

**129** Can't play the wanted sound effect.

**130** Can't start the wanted animation.

**131** Number of mode 7 invalid (must be between  0 and 9).

**132** A code of graphic for the mode 7 is needed.

**133** Number of checkpoint invalid.

**134** Number of button incorrect (must be between 0 and 3).

**135** Number of axis incorrect (must be between 0 and 3).

**136** Address of the palette table out of memory.

**137** Can't check regions in mode 7 graphics.

**138** Code of graphic information incorrect.

**139** Can't check collisions in mode 7 graphics.

**140** Access out of rank.

**141** An invalid process was accessed..

**142** The process looks like a block, expecting FRAME.

**143** Can't load the map, file not found.

**144** An invalid map file was loaded.

**145** A division by zero was made.

**146** The size of the region is incorrect.

**147** Can't load FLI/FLC animation, file not found.

**148** Value of timeout incorrect (must be between 1 and 60).

**149** Number of players incorrect (must be between 2 and 8).

**150** Only global data can be sent .

**151** Size of the square invalid (must be between 1 and 256).

**152** searching Map invalid (from 1x1 to 128x128).

**153** Size of the map incorrect (from 1x1 to 32768x32768).

**154** Number of colour incorrect (must be from 0 to 255).

**155** The centre is outside of the graphic's limits.

**156** The object is outside of the map and will be eliminated.

**157** Map texture not found.

**158** Texture size incorrect.

**159** Can't load the world, file not found.

**160** Can't load the world, file not valid.

**161** Flag number invalid.

**162** Dispositive invalid (just 1-IPX,2-SERIAL,3-MODEM).

**163** Packet size invalid (just from 1 to 199).

**164** The string of text destination is invalid.

**165** Null cursor was accessed.

**166** The access mode to the file is invalid.

**167** Can't load the module.

**168** Too many ignored errors.

**169** To many files opened..

**170** Identifier of file (handle) not valid.

**171** Value out of rank.

**172** Too many graphic objects visualised.

**173** Type of graphic object is not known.

**174** Percentage of link out of rank (0..15).

**175** Number of graphic object invalid.

**176** Error variable of type: Texture of map [a] not found in file [b].

**177** Map texture.

**178** Not found in file.

**179** Too many partitions of dynamic memory were made..

**180** The cursor doesn't correspond to any of the reserved blocks.

**181** Can't reserve blocks of less than one position.

**182** A block outside of the memory was (de)encrypted.

**183** Can't load another palette when the current one is enforced.

**200** file with corrupted data, can't be loaded.


---------------------------------------


### Note With the compilation options (see [Compiler_options](compilation_options.md)) the errors 
of execution can be ignored , but this practice is not recommended.

---------------------------------------
See: [Compiler_options](compilation_options.md)

