A process is an object independent of the program, that executes its own code and that can have its own coordinates, graphics, etc. Processes of a program can be, for instance, a shot, spacecraft or enemy.

When something similar to what is below is input inside a program:

**PROCESS shot(**...**);**

[BEGIN](begin.md)

   ** // **statements** ...**

[END](end.md)

The statements that are going to execute the &quot;**shot** type&quot; processes (the code ruling their performance), are specified.

As it can be noticed, more than one **shot** type process may exist in a program. Then, how can they be distinguished? Simply by their identifying code.

Every time that a new process is created in a game, an identifying code is assigned to this process. This code is going to be the exclusive reference of the process until it disappears.

Two different processes will never have the same identifying code at the same time. However, the code that belonged to a process that has already disappeared can be assigned to a new process (something similar to what happens in relation to an i.d.).

The identifying codes are always whole, positive, odd numbers, like 471, 1937 or 10823.

All the processes have their own identifying code in [ID](id.md), that is something similar to a process' local variable local, with the proviso that it can not be modified.

Moreover, the processes have the identifying code of the process that created them (that called them) in [father](local_father.md). They have the identifying code of the last process they created (the last one they called) in [son](local_son.md). And so on.
(see [Hierarchies of processes](hierarchies_of_processesdot.md)).

**What are the identifying codes for?**---------------------------------------


Normally, all the processes need the identifying code of the other processes in order to interact with them (to see where they are, to modify them, ...).

For instance, it is not possible to subtract energy from the &quot;**enemy** type&quot; process, as many or none of this type of processes may exist. It is necessary to have the specific identifying code of the **enemy** process from which you want to subtract energy.

A process accesses all its own variables simply by their names, such as [x](local_x.md), [size](local_size.md) or [graph](local_graph.md). Thus, if the identifier of a process is known (in [son](local_son.md), [father](local_father.md) or any variable defined by the user, such as **id2**), then it is possible to access the variables of that process, like (**son.x**, **father.size** or **id2.graph**). That is to say, the syntax to access local variables of another process is as follows:

  &lt;identifying_code&gt; . &lt;name_variable&gt;

These variables can normally be used to consult them modify them.

**It is not at all possible to access [PRIVATE](declaration_of_private_datadot.md) variables of another process at any rate**. In order to access a private variable of another process, it is necessary to change its declaration to the [LOCAL](declaration_of_local_datadot.md) section to transform it into a local variable. Then, any process will be able to access that variable just having the identifying code of the process, as all the processes will have that variable.

The identifiers have more utilities other than the access to alien local variables,
such as the [signal()](signal().md) function, that can send specific signals to a process if its identifying code is known (for instance, to eliminate the process).

There are also other functions, such as [collision()](collision().md), used to detect collisions with other processes. When this function detects a collision, it returns the identifying code of the process with which it is colliding. Once this code is known, it is possible to access the variables of the process and send them signals.

The [get_id()](get_id().md) function operates in a similar way to [collision()](collision().md),
obtaining the identifying code of a process. But in this case, no collision with it is necessary.

---------------------------------------
See: [Ways to obtain the identifying code of a process.](ways_to_obtain_the_identifying_code_of_a_processdot.md)

