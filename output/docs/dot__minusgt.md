Operator of access to structures or to alien local data. The symbols** .** and** -&gt;**
are synonymous. Therefore, they can indistinctly be used.

---------------------------------------


**Access to structures.**

To access a field of a structure, this operator must be used in the following way:

&lt;name of the structure&gt;**[**&lt;no. record&gt;**]**** . **&lt;name of the field&gt;

(or, using the other symbol)

&lt;name of the structure&gt;**[**&lt;no. record&gt;**]**** -&gt; **&lt;name of the field&gt;

### Examples

  **scroll[0].camera**

  **m7[1]-&gt;z**


### Note Keep in mind that the record number in square brackets can be omitted when record number 0 is accessed. For instance, **scroll[0].camera** will always be equivalent to **scroll.camera**.

---------------------------------------


**Access to alien local data (belonging to another process).**

To access a [LOCAL](declaration_of_local_datadot.md) variable of a process from another one, the [identifying code](_identifying_codes_of_processesdot.md) of the process whose variable is going to be read or modified must be known. Then, it will be possible to access it in the following way:

&lt;identifying code&gt;** . **&lt;local variable name&gt;

(or using the other symbol)

&lt;identifying code&gt;** -&gt; **&lt;local variable name&gt;

### Examples

   **father.x**

   **son-&gt;graph**


---------------------------------------
See: [Declaration of a structure](declaration_of_a_structuredot.md) - [Identifying codes](_identifying_codes_of_processesdot.md) - [Syntax](syntax_of_a_programdot.md)

