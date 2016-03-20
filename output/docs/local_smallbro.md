**smallbro=0;** // [Identifying code](_identifying_codes_of_processesdot.md) of the younger brother---------------------------------------
.

This is a predefined [LOCAL](declaration_of_local_datadot.md) variable, which means that each process will have its own value in its **smallbro** variable.

This variable always contains the [identifying code](_identifying_codes_of_processesdot.md) of the **following** process  created by the father of the current process after it.

Inside the language, **younger brother** is the name given to this process. For further information, see the [hierarchies of processes](hierarchies_of_processesdot.md) in the language.

By default, this variable will be equal to **0** until the father process makes a call to another process. At this moment, the new process (the younger brother of this one) will be created, indicating its [identifying code](_identifying_codes_of_processesdot.md) in **smallbro**.

---------------------------------------


### Note The [identifying code](_identifying_codes_of_processesdot.md) of the **elder brother** is indicated
in the predefined [bigbro](local_bigbro.md) local variable.

---------------------------------------
See: [Local data](predefined_local_data.md) - [Identifying code](_identifying_codes_of_processesdot.md) - [Hierarchies of processes](hierarchies_of_processesdot.md)

