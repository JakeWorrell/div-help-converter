The compiler detected, in the fly out position of the program, a statement of assignation inside of one condition.

Probably was intended to compare two values using for it the assignation symbol [=](equal.md), 
instead of the symbol of comparison / equivalence [==](equalequal.md).

---------------------------------------


### Note for new users If you want to **compare** two values with the symbol**=**,
you must include in the program the option [_simple_conditions](compilation_options.md).
For it you must put in the first line (before **PROGRAM ...**) this statement:

  **COMPILER_OPTIONS _simple_conditions;**

---------------------------------------


### Note for users of the previous version In this new version of the language
are prohibited the **assignations inside of one condition**, to simplify
the program syntax for new users. But it can be changed with
the options of compilation (see [_extended_conditions and _simple_conditions](compilation_options.md)).

---------------------------------------
See: [syntax](syntax_of_a_programdot.md) - [Compiler_options](compilation_options.md)

