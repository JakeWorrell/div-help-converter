**SWITCH** [(]((__).md) [&lt;expression&gt;](definition_of_an_expression.md) [)]((__).md)

    [CASE](case.md) **&lt;range of values&gt;** [:](colon.md)

        [&lt;statement&gt;](declaration_of_statementsdot.md) [;](semicolon.md)

        ...

    [END](end.md)

    ...

    [DEFAULT](default.md) [:](colon.md)

        [&lt;statement&gt;](declaration_of_statementsdot.md) [;](semicolon.md)

        ...

    [END](end.md)

[END](end.md)

A **SWITCH** statement is made up with a series of [CASE](case.md) sections and, optionally, of a [DEFAULT](default.md) section.

When a **SWITCH** statement is executed, the expression is first evaluated and then, if the result is within the range of values included in the first **CASE** section, its statements will be executed and the statement will finish. If the result of the expression is not in the first [CASE](case.md), it will be looked for in the second, third, etc. [CASE](case.md). Finally, if there is a [DEFAULT](default.md) section and the result of the expression has not coincided with any of the [CASE](case.md) sections, then the statements of the [DEFAULT](default.md) section will be executed.

### Example
```
PROGRAM my_game;
BEGIN
    SWITCH (x)
        CASE 1:
            x=-1;
        END
        CASE 2:
            x=-2;
        END
        CASE 3:
            x=-3;
        END
        CASE 99:
            x=-99;
        END
        DEFAULT:
            x=0;
        END
    END
END
```


The **SWITCH** statement of this program will change the sign of the **x** variable if it is equal to **1**, **2**, **3** or **99**. Otherwise, the statement will put the variable at **0**.

**Range of values of a case section**---------------------------------------


A value, a range of values (minimum [..](dotdot.md) maximum), or a list of values and/or ranges separated by [commas (,)](comma.md) may be specified in a case section. For instance, the previous statement could have been expressed as follows:

  **SWITCH (x)**

      **CASE 1..3, 99:**

          **x=-x;**

      **END**

      ### DEFAULT

          **x=0;**

      **END**

  **END**


Once one of the [CASE](case.md) sections of a **SWITCH** statement has been executed **no more sections will be executed**, even if they also specify the
result of the expression, for instance, in the following statement:

  **SWITCH (2+2)**

      **CASE 3..5:**

          **x=x+1;**

      **END**

      **CASE 2, 4, 6:**

          **y=y-1;**

      **END**

  **END**

The **x=x+1;** section will be executed and then, the statement will finish and the **y=y-1;** section won't be executed as, even if the result of the evaluated expression (**4**) is included in it, it is also included in the previous section,
(as 4 is within the range 3..5).

It is not necessary to arrange the [CASE](case.md) sections according to their values (smaller to larger, or larger to smaller), but it is indispensable that the [DEFAULT](default.md) section (if it exits) is the last section. There can only be one [DEFAULT](default.md) section.

It is possible to nest **SWITCH** statements with no limits. That is to say, new **SWITCH** statements (and any other kind of statement) can be put inside a [CASE](case.md) section.

---------------------------------------
See: [Syntax](syntax_of_a_programdot.md)

