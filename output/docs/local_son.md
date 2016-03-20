**son=0;** // [Identifying code](_identifying_codes_of_processesdot.md) of the son---------------------------------------
 process.

This is a predefined [LOCAL](declaration_of_local_datadot.md) variable, which means that each process will have its own value in its **son** variable.

This variable always contains the [identifying code](_identifying_codes_of_processesdot.md) of the **last** process  created (called) by the current process. 

Inside the language, father process is the name given to the process that calls another one. On the other hand, son process is the name given to the process that has been called. For further information, see the [hierarchies of processes](hierarchies_of_processesdot.md) in the language.

By default, this variable will be equal to **0** until the process makes a call to another process. At this moment, the new process will be created indicating its [identifying code](_identifying_codes_of_processesdot.md) in **son**.

---------------------------------------


### Note The [identifying code](_identifying_codes_of_processesdot.md) of the father process is indicated in the predefined [father](local_father.md) local variable.

---------------------------------------
See: [Local data](predefined_local_data.md) - [Identifying code](_identifying_codes_of_processesdot.md) - [Hierarchies of processes](hierarchies_of_processesdot.md)

