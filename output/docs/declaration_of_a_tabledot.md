[&lt;name&gt;](definition_of_a_namedot.md) [[](pointer__[__].md) [&lt;constant&gt;](definition_of_a_constantdot.md) []](pointer__[__].md)

(or, if the aim is to initialise the table)

[&lt;name&gt;](definition_of_a_namedot.md) [[](pointer__[__].md) [&lt;constant&gt;](definition_of_a_constantdot.md) []](pointer__[__].md) [=](equal.md) [&lt;list of constants&gt;](definition_of_a_list_of_constantsdot.md)

(or, if it is initialised without defining its length)

[&lt;name&gt;](definition_of_a_namedot.md) [[](pointer__[__].md) []](pointer__[__].md) [=](equal.md) [&lt;list of constants&gt;](definition_of_a_list_of_constantsdot.md)

To declare a table inside a [GLOBAL](declaration_of_global_datadot.md), [LOCAL](declaration_of_local_datadot.md)
or [PRIVATE](declaration_of_private_datadot.md) section, suffice will be to indicate its name followed by the length of the table in square brackets (symbols [[](pointer__[__].md) []](pointer__[__].md)). In that case, all the positions of the table will be initialised at 0 (zero).

The table's length is expressed as the maximum value of its index. That is to say, all the tables range from the position 0 to the position indicated in the square brackets in their declaration. For instance, a table declared as **my_table[9]**, will be a table of length **10** (of 10 positions, from my_table[0] to my_table[9]).

If the aim is to initialise the different positions of the table, it is necessary to put the symbol [=](equal.md) (assignment) after the previous declaration and, after this symbol, a [list of constants](definition_of_a_list_of_constantsdot.md).

If the table is initialised with a list, then it is not necessary to indicate
the table's length in square brackets, as the compiler will create a table
with as many positions as the number of values included in the list.

A table is a series of cells (or positions) of the computer's memory that is called by its name, appearing after it, in square brackets, the number of cell inside the table intended to be accessed.

Every table's cell is a variable that can contain whole numeric values within the range ([min_int](min_int.md) ... [max_int](max_int.md)).

For instance, if we declare a table as the following one:

    **my_table[]=33, -1, 6, -3, 99;**

We will be declaring a table whose name is **my_table** and that has
**5** cells (or positions), from cell no. 0 to cell no. 4. In the previous declaration, cell 0 (**my_table[0]**) is initialised with the value **33**, cell 1 (**my_table[1]**) with the value** -1**, etc.

The language allows us to access cell 0 simply with the name of the table (**my_table**), as if it was a variable, omitting the zero in square brackets that should appear after. That is to say, for the compiler, **my_table[0]** will be the same as **my_table** (the first cell of the table).

---------------------------------------
See: [Syntax](syntax_of_a_programdot.md) - [Glossary](glossary_of_terms.md)

