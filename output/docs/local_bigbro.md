**bigbro=0;** // [Identifying code](_identifying_codes_of_processesdot.md) of the elder brother---------------------------------------
.

This is a predefined [LOCAL](declaration_of_local_datadot.md) variable, which means that each process will have its own value in its **bigbro** variable.

This variable always contains the [identifying code](_identifying_codes_of_processesdot.md) of the process  created by the father just before creating the current process after it. 

Inside the language, **elder brother** is the name given to this process. 
For further information, see the [hierarchies of processes](hierarchies_of_processesdot.md) in the language.

By default, this variable will be equal to **0** if the father process (the one that called the current one) has not created any other process before. If it has created one, or more than one, **bigbro** will indicate the [identifying code](_identifying_codes_of_processesdot.md) of the last one.

---------------------------------------


### Note The [identifying code](_identifying_codes_of_processesdot.md) of the **younger brother** is indicated
in the predefined [smallbro](local_smallbro.md) local variable.

---------------------------------------
See: [Local data](predefined_local_data.md) - [Identifying code](_identifying_codes_of_processesdot.md) - [Hierarchies of processes](hierarchies_of_processesdot.md)

