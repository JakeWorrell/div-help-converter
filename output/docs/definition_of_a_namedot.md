A name is a sequence of alphanumeric characters used to **identify** an object of the program, such as the name of a process, [constant](declaration_of_constantsdot.md) or variable.

These names can be made up of the following characters:

  Symbols:

  **_ # &ordf; &ordm; $ ₧ &fnof; &pound; &yen; &cent;**

  Digits:

  **0123456789**

  Letters:

  **abcdefghijklmnopqrstuvwxyz**

  Letters (extended):

  **&ntilde; &ccedil; &aelig; &acirc;&auml;&agrave;&aring;&aacute; &ecirc;&euml;&egrave;&eacute; &icirc;&iuml;&igrave;&iacute; &ocirc;&ouml;&ograve;&oacute; &ucirc;&uuml;&ugrave;&uacute; &yuml;**


provided that the following rules to create new names are respected:

- The sequence of characters must not contain characters that are not in the previous list (except **capital** letters corresponding to lower case letters included in the list).

- Inside the sequence, it is not possible to put blanks. That is to say, **enemy spacecraft** is not a valid name as, for the compiler, it would imply two names. In 
this case, the name can be declared as **enemy_spacecraft**.

- A name can not start with a numeric digit. That is to say, **0a** is not a valid name. Nevertheless, all the necessary digits can be included in the name after the first character (**a0** is indeed a valid name).

- The name must not coincide either with any of the language's reserved words or with any of the objects (constants, variables, etc.)
predefined in the language. To check it, see the list of reserved words and predefined objects, being possible to access the Glossary at any moment. The reserved words appear in capital letters and the predefined objects in lower case letters.

- There is no difference between the capital and lower case letters (for the compiler, **ABc** and **abC** are the same name).

- The same name can not be used for two different objects.
For instance, it is not possible to name a constant **value** and then, to declare
a process **PROCESS value(x, y);**.

---------------------------------------
See: [Syntax](syntax_of_a_programdot.md) - [Glossary](glossary_of_terms.md)

