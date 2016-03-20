**xgraph=0;** // OFFSET of the process' graphic table---------------------------------------
.

This is a predefined [LOCAL](declaration_of_local_datadot.md) variable, which means that each process will have its own value in its **xgraph** variable.

This is an advanced level variable. Thus, its use requires certain experience.

The **xgraph** local variable (**extended graphic**) allows us to use **multiple graphics**. This variable is used to define the graphic of a process as a **graphics set** among which it is necessary to see **the most appropriate with the process' angle** (specified in the [angle](local_angle.md) local variable).

If the **xgraph** variable is defined, the [graph](local_graph.md) local variable which normally defines the graphic of the process **will be ignored** and one graphic or another will be used depending on the [angle](local_angle.md) variable.

Therefore, on changing the process' angle **the graphic of the process won't appear rotated**, but it will use this angle to select the process' graphic (inside the defined set).

By default the **xgraph** variable will equal **0** in all the processes,
which indicates that they are not going to use **multiple graphics**.

---------------------------------------


The utility of the multiple graphics lies on the possibility of creating games in **perspective**, where the change of an angle in the process doesn't implied
a rotation of its graphic, but the replacement of the graphic by another one painted in a different **perspective** (painted with another angle inside that perspective).

**How to use the multiple graphics.**---------------------------------------


1 - First, the different pictures that are going to represent the process' graphic have to be painted with different angles in perspective. The latter will be a finite number of graphic's views, such as **4**, **8**, **12**, etc., (or any other integer bigger than **1**).

Take into account that if 4 views are defined, a different view will be defined every 90 degrees, if 8 views are defined, every 45 degrees, etc.

2 - It is necessary to put these graphics in order according to their angles. First, the graphic corresponding with angle 0 (towards the right) and then, the rest in a clockwise direction.

3 - A table, generally [GLOBAL](declaration_of_global_datadot.md), must be created and initialised with the following values:

  **Number of graphic's views**,

  **Graphic's code for **angle **0 (first view)**,

  **Code of the following angle (second view)**,

  ...

### Note This table must contain simple data (of type [INT](data_of_type_int.md), 32-bit whole numbers with sign).


The name given to this table makes no difference. For instance,
if a multiple graphic is defined with 4 views, which must be the graphics with the codes 10, 11, 12, and 13, the definition of the table could be as follows:

  **GLOBAL**

      **table_graphic1[]=4, 10, 11, 12, 13;**

      ....

4 - Finally, the offset of this table must be assigned inside the computer's memory to the **xgraph** local variable of the process, which is done with the following statement (inside the process in question):

  **xgraph=OFFSET table_graphic1;**

The [OFFSET](offset.md) operator is used to obtain the offset of a program's variable in the memory.

---------------------------------------


Once the **multiple graphic** has been defined, in each frame of the game the system will use the graphic corresponding with the angle **closest to the process' angle** (the one indicated in its [angle](local_angle.md) variable).

The **xgraph** variable must be put at **0** again in order to disable the **multiple graphic** system in a process,

### Important If any graphic's code is put with a **negative sign** inside the table that defines the set of graphics, then this graphic will appear **horizontally flipped**. If the graphic was facing right, it will appear facing left, and vice versa.

---------------------------------------


### Note The multiple graphic system is normally used in **mode 7 windows**, as in the folded three-dimensional plane the graphics must be seen in a different way, according to the angle from which they are observed.

For further information about this technique, see the [start_mode7()](start_mode7().md) function used to activate a **mode 7 window** in the program.

---------------------------------------
See: [Local data](predefined_local_data.md)

