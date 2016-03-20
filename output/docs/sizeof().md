**SIZEOF(**&lt;name of the variable&gt;**)**

### Returns

The numbers of elements contained in the variable.

### Description

The reserved word **SIZEOF** is used to calculate the number of elements that a  table or a structure have.

This reserved word **is used as if it was a function** of the language,
indicating in brackets, the [name](definition_of_a_namedot.md) of the variable and returning the number of elements (positions) of the latter.

It can be used to obtain the number of elements of a variable but, in this case, **SIZEOF** will always return **1** as the number of elements (as a variable is a single element).

### Example program
```
PROGRAM example_sizeof;

PRIVATE
    table1[]=0, 1, 2, 3;
    table2[]=4, 5, 6, 7, 8;
    variable=9;

BEGIN
    // ...

    save("help.dat", OFFSET table1, SIZEOF(table1)+SIZEOF(table2)+SIZEOF(variable));

    // ...
END
```


In this example, **SIZEOF** is used to obtain the number of elements
of the following three data:

**table1** of **4** elements.

**table2** of **5** elements.

**variable** (**1** element).


In this case, it is used to save in the **help.dat** file the contents of these three data with the [save()](save().md) function that requires the number of elements intended to be stored in the file, as a third parameter.

In this case, **10** elements will be stored in the **help.dat** file, numbers from **0** to **9**, according to the initialisation of the data in the example.

The [save()](save().md) statement of the previous example could have also been expressed without using **SIZEOF**, in the following way:

  **save(&quot;help.dat&quot;, OFFSET table1, 10);**

There is only one difference: if, in the program of the example, some elements were added to any of the two tables, it would be not necessary to modify the call to the [save()](save().md) function, as **SIZEOF** will always return the current size of the tables.

---------------------------------------
See: [Syntax](syntax_of_a_programdot.md) - [Declaration of a table](declaration_of_a_tabledot.md) - [Declaration of a structure](declaration_of_a_structuredot.md)

