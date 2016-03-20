**atan2(**&lt;x&gt;**,** &lt;y&gt;**)**

### Returns

The arctan of **&lt;y&gt;**/**&lt;x&gt;**.

### Description

Calculates the arctan of the tan obtained as the division of the
two values, given as the parameter (**&lt;y&gt;**/**&lt;x&gt;**), the angle corresponding
to arctan  (inverse operation to the tan of an angle, which can be obtained
with the function [tan()](tan().md)) is obtained.

The angles are always manipulated in thousandths of a degree (see the
[use of angles in the language](use_of_angles_in_the_languagedot.md)), and the arctan is also returned 
in thousandths as a value between** -180000** and **180000** (from -180 to +180
degrees).

---------------------------------------


### Note 1 Another function exists to calculate the arctan called
simply [atan()](atan2().md), this function takes as its only parameter the
tan of an angle and returns its arctan between -90000 and 90000 (from -90
to 90 degrees).

---------------------------------------


### Note 2 There is also a version of **atan2()**, which is more simply adapted
to the geometric concepts; it is the function denoted as [fget_angle()](fget_angle().md)
which obtains directly the angle between two points.

---------------------------------------
See: [Expression](definition_of_an_expression.md) - See: [Use of angles in the language](use_of_angles_in_the_languagedot.md)

