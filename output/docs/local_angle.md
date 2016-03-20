**angle=0;** // angle of the process' graphic---------------------------------------
.

This is a predefined [LOCAL](declaration_of_local_datadot.md) variable, which means that each process will have its own value in its **angle** variable.

The **angle** local variable defines the angle in which the graphic of the process must be seen, indicating an angle with regard to the original graphic in **degree thousandths** (see [Use of angles in the language](use_of_angles_in_the_languagedot.md)).

By default, the value of this variable will be equal to **0** (0 degrees) for all the processes, but when the graphic is modified, it will **rotate** to adjust to the new angle.

The angle may be defined as any integer within the range ([min_int](min_int.md) ... [max_int](max_int.md)).

Some examples of the angles that define certain values in the **angle** local variable are now shown (keep in mind that the angles are expressed in degree **thousandths**):

      ...

 ** -180000** - [Angle](use_of_angles_in_the_languagedot.md) to the left

 **  -90000** - [Angle](use_of_angles_in_the_languagedot.md) downwards

 **  -45000** - [Angle](use_of_angles_in_the_languagedot.md) of the diagonal down/right

 **       0** - [Angle](use_of_angles_in_the_languagedot.md) to the right

 **  +45000** - [Angle](use_of_angles_in_the_languagedot.md) of the diagonal right/up

 **  +90000** - [Angle](use_of_angles_in_the_languagedot.md) upwards

 ** +180000** - [Angle](use_of_angles_in_the_languagedot.md) to the left

 ** +270000** - [Angle](use_of_angles_in_the_languagedot.md) downwards

      ...


### Important When the aim is to rotate the graphic of a process,
**it is advisable to paint it orientated to the right**, as it will be displayed like this by default (with the **angle** local variable equal to **0**).

Thus, when another angle is specified, the graphic will appear exactly orientated towards it.

For instance, a graphic that has been drawn to the right can be seen orientated upwards (to the angle of 90 degrees) by indicating the following statement:

  **angle=90000;** // 90 degree thousandths (90 degrees).

If a graphic was painted orientated towards another angle,
(for instance, downwards), it would become orientated downwards by default,
**in the angle 0**, which can provoke confusions when it comes to orientating the graphic towards another angle.

---------------------------------------


To make the graphic of a process advance its coordinates ([x](local_x.md), [y](local_y.md)) towards its angle (the one specified **angle** in the local variable of the process) a specific distance, the [advance()](advance().md) function can be used.

---------------------------------------


### Note The graphic of a process must be indicated assigning a **graphic code** to the [graph](local_graph.md) local variable.

---------------------------------------
See: [Local data](predefined_local_data.md) - [Use of angles in the language](use_of_angles_in_the_languagedot.md)

