a text string or pointer was declared **twice**, as a parameter and as
private data, and in the declarations a different length was specified.

It is not necessary to declare this data as private, because you can
specify its length in the same parameters of the process.

### Example:}
PROGRAM name_of_program;
BEGIN
  //...
END

PROCESS my_process(string my_string[16])
BEGIN
  //...
END
**-**

The process of this example receives a parameter in a **private** string (but
this is not indicated in the process) of **17** characters in length (from
my_string[0] to my_string[16]).

The previous process can return to declare this string in the section
[PRIVATE](declaration_of_private_datadot.md) (for example, to add an explanatory commentary), but in this case the 
specified lengths must coincide. In this case,**my_string** will be declared as shown
below.

{#9999,Example
```
PROGRAM name_of_program;
BEGIN
  //...
END

PROCESS my_process(string my_string[16])

PRIVATE
  string my_string[16]; // Here I will receive some text.

BEGIN
  //...
END
```


---------------------------------------
See: [syntax](syntax_of_a_programdot.md) - [Declaration of private data](declaration_of_private_datadot.md)

