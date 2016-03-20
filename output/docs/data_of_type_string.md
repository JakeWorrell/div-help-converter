The **STRING** tables are different to the other data types, for one thing their data can only 
be **strings of text** and they can only have **1 dimension**. If a literal is not assigned to them, 
the string will stay initiated as **&quot;&quot;** (**empty string**).

If a string is defined as **STRING s=&quot;abc&quot;;**, then when it is accessed by its
name (**s**), it will refer to the contained string (**&quot;abc&quot;**). Also you can 
access any character of the string as if it were an element of a table
(for Example, the statement **s[3]=&quot;d&quot;;** would add a **&quot;d&quot;** to the string).

### Note It is not necessary to declare in brackets the length of the text strings 
(by default 256 characters will be set aside for the string).

---------------------------------------


**operations with strings of text.**

Inside a program, supposing the data **s** and **r** are of type **STRING**, then 
the following operations can be performed on the data.

**1.** data of type **STRING** can be used in all functions which require
text (such as [write](write().md)(0,0,0,0,s), [load_fpg](load_fpg().md)(r), ...).

**2.** It is also possible to assign literals to a string by writing 
**s=&quot;any text...&quot;;** or assigning one string to another, as **s=r;**.

**3.** the strings Can be summed with statements such as **s+=&quot;text to be added&quot;;** or
**s=r+&quot;ho&quot;+&quot;the&quot;;**.

**4.** Also a character can be added to a string with statements such as **s+=ascii;**
or **r+=&quot;a&quot;;**.

**5.** A character can be deleted (from the end) of the string with **s--;**, **s-=1;** 
or **r=s-1;**.

**6.** Strings can be compared with conditions such as **(s==&quot;hello&quot;)**, **(s&gt;=r)**,
**(s&lt;&quot;0&quot;+r)**, etc.

**7.** And, finally, a great number of functions for text management exist (See the {#1032,
list of functions of the language}).

---------------------------------------


**Literals of many lines.**

It is possible to define literals over many lines, for this you only need to divide the
text into many texts, and place them one after the other (without any separation with symbols). 
For example, a constant can be defined as:

**greetings=&quot;&iexcl;Ho&quot;**

**       &quot;the!&quot;;**

This can also be used to initiate data of type **STRING**. There is no limit
in the number of lines allowed. Between two following literals only [commentaries](definition_of_commentsdot.md)
can appear.

---------------------------------------
See: [types of data](types_of_data.md) - [Declaration of data](declaration_of_a_variabledot.md)

