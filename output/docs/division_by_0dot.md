In the indicated position of the program, a [constant expression](definition_of_a_constantdot.md) unresolved because it contains a division by 0 among its operations, appears.

On dividing a number by zero results &plusmn; infinite and, as in the programming language only integers within the range ([min_int](min_int.md) ... [max_int](max_int.md)) can be used, it is not possible either to store the result of that operation in any variable or to relate it with a constant.

### Example
```
PROGRAM my_game;
CONST
    infinite=1/0; // Error: Division by 0.
BEGIN
    //...
END
```


It is probably an involuntary error. Thus, on evaluating the expression it is necessary to avoid doing any division by zero.

---------------------------------------
See: [Syntax](syntax_of_a_programdot.md) - [Statement of assignment](assignment_statementdot.md)

