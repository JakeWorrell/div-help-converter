The [sizeof()](sizeof().md) function may be used to obtain the number of elements of a table or structure. For that purpose, it requires in [brackets]((__).md), the name of the table or structure (with no square brackets or index).

It can also be used with the name of a variable but, in this case,
the function will always return 1.

It can indistinctly be used with global, local or private data.

In the indicated position of the program, the aim is to obtain the size of an object that is not a variable, table or structure. For instance, this error
will appear if the aim is to obtain the size of a constant, function, process, etc.

### Example
```
PROGRAM my_game;
CONST
    my_constant=99;
GLOBAL
    a=sizeof(my_constant); // Error: The size can not be calculated.
BEGIN
    //...
END
```


This example will provoke the error on trying to obtain the number of elements
of a [constant](declaration_of_constantsdot.md), as a constant is not an object having a size, but just a synonymous of the numeric values that it represents.

---------------------------------------
See: [Syntax](syntax_of_a_programdot.md) - [sizeof](sizeof().md)

