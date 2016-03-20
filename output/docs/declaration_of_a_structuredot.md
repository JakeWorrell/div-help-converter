**STRUCT** [&lt;name&gt;](definition_of_a_namedot.md) [[](pointer__[__].md) [&lt;constant&gt;](definition_of_a_constantdot.md) []](pointer__[__].md)

    [&lt;declaration of data&gt;](declaration_of_a_variabledot.md) [;](semicolon.md)

    ...

[END](end.md)

(or, if you initialise the structure)

**STRUCT** [&lt;name&gt;](definition_of_a_namedot.md) [[](pointer__[__].md) [&lt;constant&gt;](definition_of_a_constantdot.md) []](pointer__[__].md)

    [&lt;declaration of data&gt;](declaration_of_a_variabledot.md) [;](semicolon.md)

    ...

[END](end.md) [=](equal.md) [&lt;list of constants&gt;](definition_of_a_list_of_constantsdot.md)

To declare a structure inside a [GLOBAL](declaration_of_global_datadot.md), [LOCAL](declaration_of_local_datadot.md) or [PRIVATE](declaration_of_private_datadot.md) section, it is necessary to put the reserved word **STRUCT** preceding its name. After it, the number of records of the structure must be indicated, in square brackets (symbols [[ ]](pointer__[__].md)).

After this head defining the name of the structure and the number of records, all the data that belong to the structure and that will comprise its fields, will be declared. Finally, the reserved word [END](end.md) must appear to finish the declaration.

The records' number of the structure is expressed as the maximum records' number of the structure. That is to say, all the structures have from record 0 to the record indicated in the square brackets. For instance, a structure declared as **STRUCT my_structure[9]**, will be a structure of **10** records (from the record my_structure[0] to my_structure[9]).

A structure is like an index card file (records), each of them with different written information (fields). For instance, a structure in which we could include the initial and final positions of a series of processes of a game could be as follows (an index card file with 10 cards, each of them indicating the (x, y) initial
and the (x, y) final of a process):

**STRUCT movement_enemies[9]**

    **x_initial;**

    **y_initial;**

    **x_final;**

    **y_final;**

**END**

This structure, that would be accessed with the name **movement_enemies**, has ten records and four fields in each record (two coordinates that determine the initial position of the process [x_initial ,y_final], and two that determine the final position [x_final, y_final]).
**Movement_enemy[0].x_final** would be used to access the **x** final of the first enemy.

The language allows us to access the record 0 of the structure simply with the name of the structure (**movement_enemies.x_final**), omitting the zero in square brackets that should come later. That is to say, for the compiler
**movement_enemies[0].x_final** will be the same as **movement_enemies.x_final**.

Each field of the structure may be a variable, a table
or another complete structure, with its different records and fields.

If the aim is to initialise the structure (establishing the initial values of its fields in the different records), the symbol [=](equal.md) (assignment) must be put after the reserved word [END](end.md) followed by a [list of constants](definition_of_a_list_of_constantsdot.md). If the structure is not initialised in this way, all the fields will be put at 0 by default.

Keep in mind that , in order to initialise a structure, the first values will be the values of the fields of the first record, the following ones those of the second record, and so on. 

For instance, if the following declaration is made:

STRUCT a[2]

    b;

    c[1];

END = 1, 2, 3, 4, 5, 6, 7, 8, 9;

First, it must be taken into account that the structure **a** has 3 records
(from a[0] to a[2]) and that there are three fields (b, c[0] &amp; c[1]) in each record. Then, the previous declaration will initialise the structure in the following way:

a[0].b=1;

a[0].c[0]=2;

a[0].c[1]=3;

a[1].b=4;

a[1].c[0]=5;

...

---------------------------------------
See: [Syntax](syntax_of_a_programdot.md) - [Glossary](glossary_of_terms.md)

