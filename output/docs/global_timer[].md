**timer[9];** // Counters of time---------------------------------------
.

This is a 10 position global table, from **timer[0]** to **timer[9]**,
and each of these 10 positions is a counter of **second hundredth** that is automatically incremented.

At the beginning of the program, these 10 counters will be put at  zero. They are use to time within a program. For that purpose, they can be put at zero at any time.

There are 10 counters so that the user can dedicate each of them to perform a different action inside the game, no matter which ones of the 10 counters are used. Normally, if the program only needs one counter (most of the times), that numbered **0** (**timer[0]**) is used, as the language allows us to omit the zero in square brackets in this case. If only one counter is needed, it is possible to use **timer** simply.

For instance, to implement a process that 5 seconds after the beginning of its execution (if it had been called) performed a specific action, it would be constructed in a way similar to the following one (by using, for instance,
the counter timer[9]):

 **PROCESS process_example();**

 **BEGIN**

     **timer[9]=0;**

     // ...

     **LOOP**

         **IF (timer[9]&gt;=500)**

             // Action to perform ...

         **END**

         // ...

         **FRAME;**

     **END**

 **END**


---------------------------------------


### Note 1 As timing is performed in second hundredths, these counters can be incremented in **1** hundredth, **2**, **3**, **4**, etc. in every frame of the game In an example like the previous one, the user can not wait for **timer[9]** to equal **500** exactly, as a frame could indicate **497** hundredths passed (since it was put at zero with **timer[9]=0;**) and the following frame **502** hundredths, without having passed through value **500**.

---------------------------------------


### Note 2 It is also important to underline that much care must be taken to prevent several processes of the program from using the same counter for different purposes.

If, for instance, a **process_example()** (like the previous one) was created, in every frame of the game these processes would never manage to execute the action of the five seconds, as each of them would put the counter **timer[9]** at **0** at the beginning of their execution, thus invalidating the timing of the previous processes.

Keeping in mind that the counter timer[9] is [GLOBAL](declaration_of_global_datadot.md), it is the same for all the game's processes, if a process puts it at **0**, it will be put at **0** for the rest of the processes.

---------------------------------------


### Note 3 Finally, much care must be taken regarding the conditions similar to those of the previous example (**IF (timer[9]&gt;=500) ... **), as these conditions
won't only be activated **once every 5 seconds**, but they will be activated
**always after the first 5 seconds**.

To understand the problem better, a process performing one action, **only once**, five seconds after the beginning of its execution, is now shown.

 **PROCESS process_example();**


 **PRIVATE**

     **action_performed=FALSE;**


 **BEGIN**

     **timer[9]=0;**

     // ...

     **LOOP**

         **IF (timer[9]&gt;=500) AND NOT action_performed)**

             // Action to perform ...

             **action_performed=TRUE;**

         **END**

         // ...

         **FRAME;**

     **END**

 **END**


A private variable called **action_performed** which, at first, will be **false** is used. 
To perform an action now, it will be necessary that more than five 
seconds have passed and that **the action has not been performed yet**.
Therefore, after its performance the **action_performed** variable will become **true**.

For the previous example to execute the action **every five seconds**
(indefinitely), suffice will be to put the statement **timer[9]=0;** again after the
**action to perform**, not being necessary, in this case, the **action_performed** private variable, as other **5** seconds would be necessary for **timer[9]** to be again bigger than or equal to **500**.

---------------------------------------
See: [Global data](predefined_global_data.md)

