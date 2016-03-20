Symbols delimiting literals.

Literals are the **texts in inverted commas**. Literals may start and finish with the character [**'**] or even with the character [**&quot;**] (but they have to start and finish with the same character). There are two ways to include the character [**&quot;**] in a literal, supposing that the aim is to define a literal containing the text: a&quot;B&quot;c

 - Duplicating the character: &quot;a&quot;&quot;B&quot;&quot;c&quot;

 - Defining it with the simple inverted comma: 'a&quot;B&quot;c'

It happens the same regarding the character [**'**], that can be included in a literal if it is duplicated, or if the literal is delimited with the character [**&quot;**].

All the literals must be closed in the same line as they started. It is not possible to define literals occupying more than one line.

---------------------------------------


**Literals of several lines.**

It is possible to define the literals over several lines, to do this you just need to divide the
text into several lines, and put them successively (do not separate them with any symbol). 
For example, you could define a constant as:

**salute=&quot;&iexcl;Ho&quot;**

**       &quot;la!&quot;;**

This also can be used to initiate the data of type [STRING](data_of_type_string.md).
There is no limit in the number of lines. Only [Comments](definition_of_commentsdot.md)
can appear between two successive literals.


---------------------------------------
See: [Syntax](syntax_of_a_programdot.md)

