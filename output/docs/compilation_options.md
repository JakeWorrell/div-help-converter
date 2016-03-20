These options modify the form in which DIV interprets a program and the code
which it generates for DIVl. Normally it is not necessary to specify any options.

To add one or more of these options to program the word **COMPILER_OPTIONS** must 
be specified as the initial statement of the program (commentaries in margin) 
followed by the names of the included options.

If many options are included, they must appear separated by commas, adding
always a semicolon at the end (after the last option).

---------------------------------------


### disposed compilation options 

**_max_process=x**

Where x is a whole positive number. This defines the max number of
 simultaneous processes permitted during execution. This can be set
when a program is completed (when it is known how many 
processes it will have in one moment), to optimise memory during execution. 
When this value isn't defined, a min of 1 Mb (and a max of 2 Mb) will be reserved 
for the program memory.

**_extended_conditions**

Allows you to use assignations inside a condition (such as:**IF(id2=get_id(...))...)**; 
it was permitted by default in the first version. It may be necessary to declare this 
option in order to ensure that programs written with DIV1 function in DIV2.

**_simple_conditions**

Interprets the symbol = as a comparison, when it appears inside a condition. 
This is the opposite case to previously (and incompatible with l), 
once this option is included you will be able to make comparisons like 
**IF(x=0)...**, instead of interpreting them as an assignation of the value 0 to 
the variable x.

**_case_sensitive**

This option Differentiates between capital and small letters.
If this option is active **Abc** and **abc** will be
two different names. It is important to know that, if activated,
all reserved words of the language such as (**program**, **loop**,
**frame**, **if**, ...) must be put in small letters.

**_ignore_errors**

Forbids the appearance of error messages during the
execution of the program. The majority of errors will be ignored
(such as memory errors, file not found, divisions by zero, etc.) , 
we don't advise you use this option but, if you want it to be included, 
then do so only if the programs are finished, sufficiently checked, and without known
errors, before compiling the installation (See the final considerations).

**_free_syntax**

Permits you to use free syntax. With this option the symbols **;** (semicolon) 
at the end of the statements will no longer be necessary and parentheses are no 
longer required in statements like **IF**, **WHILE** or **UNTIL**. For example, in
this mode statements such as: **IF a&lt;0 a=0 END** (See before final considerations) 
will be valid.

**_no_strfix**

Will not finish automatically text strings. When
you put a character in a variable of type [STRING](data_of_type_string.md), normally the program 
inserts the character after the end of the string,
and adds white spaces with the character **NUL** (ascii 0) at the end of the string. 
This option disables this characteristic.

**_no_optimization**

Do not optimise the generated code. By default the programs are optimised. 
This option can be included to disable these optimisation processes. This means,
if this option is specified, the programs will go slower and will occupy more memory.

**_no_range_check**

Doesn't check that values accessed are out of the range of tables and structures. 
The compiler generates code to check during the execution that expressions used as indexes
of a table or structure are in the permitted limits,
and to show an error when a value is out of range. This option prevents this code being 
generated.

**_no_id_check**

Do not check the validity of the identification code. The
compiler also generates code to check the validity of the
identifier when it is used to access a local variable
from another process (as in **id2.graph**). If this option is specified
at the beginning of the program, then this checking will not be done.

**_no_null_check**

Do not check the accesses to null pointers (**NULL POINTER**). 
This disables the checking of attempts to access memory with null pointers 
or undefined pointers. Including this option means the code 
to protect these accesses of reading or writing in memory will not be generated .

**_no_check**

Does not allow any security checking.
This option unites the three previous options, and forbids the compiler
to generate code to check any type of anomalous operation during the execution. 
The programs will run faster, but it is not recommended to use these options
until the programs have been tested and are without errors.

---------------------------------------


To use these options, for example, the program can be begun with the following statement:

**COMPILER_OPTIONS _max_process=64,_no_id_check;**

In this case the compiler is set to reserve memory for 64 simultaneous processes in the 
execution of the program, and no validity checks on the identifiers to local variables of other
processes will be made (it is useful to switch off these checks,
when the programmer has sufficient experience to know what he's doing).

---------------------------------------


**Important: considerations about some of the options.**

**1.** New users of DIV or those with little programming experience can
simplfy a little the conditions with the option **_simple_conditions**, so that 
two values with the symbol **=** (also with the symbol **==**) can be compared. 
In contrast, users who have more experience, will probably prefer to activate 
the option **_extended_conditions** so that more complex conditions can be created, 
with assignations inside of them.

**2.** The options **_ignore_error** and all variants of **_no_check** must be used only
by experienced programmers, and only in the finished version of the program. 
Otherwise we don't recommend you use it, because major execution errors
can be produced, and it will be more difficult to find the cause without these error 
messages.

**3.** In general the programs are already optimised (the generated code is **60%**
faster than in the previous version), but any of these options will significantly change  the
speed of execution. The **profiles of time** of the debugger can be used to see the 
repercussions of each option.

**4.** The option **_ignore_errors** is often not the best, nearly always it is better to use
the function [ignore_error()](ignore_error().md) to ignore selectively some predetermined errors the 
program is known to generate during execution.

**5.** The use of free syntax (with **_free_syntax**) also has many dangers. Because
there is no differentiation between lines and white spaces, and in some cases 
incorrect interpretations can be produced . For example, in the
statement: **IF right ++x END**, the compiler will interpret that the symbol** ++** is the
post increment of **right**, instead of the pre increment of **x** (although this symbol
is united with this last variable). Another similar anomaly can happen using C programming
style pointers, for instance, with these two consecutive assignations:  **a=1 *ptr=2**, the compiler
will interpret them as: **a=(1*ptr)=2** (although they were in different phrases).
But in general, if you are not using preincrements or C programming style pointers, 
there will be no problems with the free syntax (also parentheses or
semicolons can be used in concrete cases, to resolve these small problems).

**6.** However, the option **_max_process** (which is the only one which must be followed by the
the symbol **=** and a number value) is strongly recommended. If the 
number of processes which the program can have running simultaneously is known,
then less memory needs to be reserved (leaving this free for graphics, sounds, etc.).

