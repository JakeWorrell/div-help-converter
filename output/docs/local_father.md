**father;** // [Identifying code](_identifying_codes_of_processesdot.md) of the father---------------------------------------
 process.

This is a predefined [LOCAL](declaration_of_local_datadot.md) variable, which means that each process will have its own value in its **father** variable.

This variable always contains the [identifying code](_identifying_codes_of_processesdot.md) of the process that created (called) the current process (the one that has this variable).

Inside the language, father process is the name given to the process that calls another one. The process that has been called receives the name of son process. For further information, see the [hierarchies of processes](hierarchies_of_processesdot.md) in the language.

The DIV's **manager of processes** is the process named **div_main**. Its function is to create the main process of the program (**PROGRAM**) at the beginning of the game's execution. Therefore, it will be the father of the main program, as well as the father of all the processes that become orphan (processes whose father has been killed or finished before them, see [states of a process](states_of_a_processdot.md)).

---------------------------------------


### Note The [identifying code](_identifying_codes_of_processesdot.md) of the son process is indicated in the
predefined [son](local_son.md) local variable.

---------------------------------------
See: [Local data](predefined_local_data.md) - [Identifying code](_identifying_codes_of_processesdot.md) - [Hierarchies of processes](hierarchies_of_processesdot.md)

