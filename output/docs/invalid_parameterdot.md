The processes can receive parameters in the following kinds of data:

- A predefined local variable (like [x](local_x.md), [size](local_size.md), [flags](local_flags.md), ...).

- A local variable defined inside the [LOCAL](declaration_of_local_datadot.md) section.

- A global variable defined inside the [GLOBAL](declaration_of_global_datadot.md) section.

- A private variable of the process declared inside the [PRIVATE](declaration_of_private_datadot.md) section
of the process.

- A private variable **not declared** inside the [PRIVATE](declaration_of_private_datadot.md) section.

In all these cases, it is understood that a variable can be referred to a
variable, to a specific position of a table or to an element inside a structure.

In the indicated position of the program, the aim is either to receive a parameter in an object different from those aforementioned, or to indicate an expression instead of a simple variable. These are some examples of invalid parameters' declarations:

  **PROCESS my_process(my_constant)**

  A parameter can not be received in a constant.

  **PROCESS my_process(x*2)**

  A parameter can not be received in an expression.

  **PROCESS my_process(x=0)**

  A parameter can not be received in an assignment.

---------------------------------------
See: [Syntax](syntax_of_a_programdot.md) - [Parameters of a process](parameters_of_a_processdot.md)

