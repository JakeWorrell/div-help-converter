The conditions are expressions normally similar to the following ones:

  **x&lt;320**

  **size==100 AND graph&gt;10**

  **y==0 OR (x&gt;=100 AND x&lt;=200)**

  ...

In general, any expression is valid as a condition. In the language, all the **ODD** expressions are interpreted as **true** and all the **EVEN** expressions are interpreted as **false**.

### Example
```
PROGRAM my_game;
BEGIN
    IF (20*2+1)
        x=x+1;
    END
END
```


In this example, the **x=x+1;** statement will always be executed, as the expression **20*2+1** is equal to **41**, an **odd** number.

All the available operators are valid inside a condition. It is even possible to perform assignments inside a condition (the assignments are operations that return the assigned value as a result).

All the [identifying codes](_identifying_codes_of_processesdot.md) of processes are **odd** numbers. That is to say, all of them are **true**. Therefore, it is possible to implement conditions
as the following one (supposing that **id2** has been declared as a variable,
and that **shot** is a type of process of the program).

  **id2=get_id(type shot);**

  **WHILE (id2)**

      **id2.size=id2.size-1;**

      **id2=get_id(type shot);**

  **END**


In the **id2=get_id(type shot)** condition, the result of the **get_id** function is being assigned to the **id2** variable. If that function has returned an [identifying code](_identifying_codes_of_processesdot.md), it will be an **odd** number and the condition will be evaluated as **true** (if **get_id()** does not find (more) identifiers of &quot;**shot** type&quot; processes, then it will return **0** (an **even** number), and the condition will be interpreted as **false**, finishing the [WHILE](while_statement.md) statement.

The previous statements would decrement the [size](local_size.md) variable of all the **shot** type processes existing in the program.

---------------------------------------
See: [Syntax](syntax_of_a_programdot.md) - [Definition of an expression](definition_of_an_expression.md)

