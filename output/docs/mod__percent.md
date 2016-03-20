Arithmetic operator of **module** or **remainder of a whole division**. The reserved word **MOD** 
and the symbol** %** are synonymous.
This operator is used in the [arithmetic expressions](definition_of_an_expression.md) between two
operands, to obtain the module of the first one divided by the second one.

For instance, **7 MOD 3** will return 1, as the whole division of 7
by 3 give us 2 as quotient and **1** as **remainder**.

That is to say, **n MOD m** will always return a number within the range (0..m-1).

To understand easily how to obtain the remainder of an operation
**n MOD m**, the following steps may be followed:

**Step 1** - If **n** is less than **m**, then the result of the operation **MOD** is **n**.

**Step 2** - (When **n** is bigger than or equal to **m**), subtract **m** from **n** and go to **step 1**.

---------------------------------------


### Use On some occasions, this operator is used in the programs requiring that a counter variable always changes between **0** and **other number**. For instance, if the aim is that the **x** variable indefinitely varies between 0 and 319 (x=0, x=1, x=2, ..., x=319, x=0, x=1, ...), then there would be the following option:

  **x=0;**

  **LOOP**

  **    x=x+1;**

  **    IF (x==320) x=0;**

  **    // ...**

  **END**


But many programs replace these statements by the following ones:

  **x=0;**

  **LOOP**

  **    x=(x+1) MOD 320;**

  **    // ...**

  **END**


that fulfills the same function, as the operator **MOD** will truncate 
the expression when it is bigger than or equal to 320 at a lesser value.

---------------------------------------


The **quotient** of a whole division is obtained through the operator [/](forward_slash.md)
(division).

---------------------------------------
See: [Syntax](syntax_of_a_programdot.md) - [Expression](definition_of_an_expression.md)

