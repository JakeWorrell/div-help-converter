**file=0;** // File code of the process' graphic---------------------------------------
.

This is a predefined [LOCAL](declaration_of_local_datadot.md) variable, which means that every process will have its own value in its **file** variable.

In the case that several graphics files **files FPG** have been loaded in a program, the **file** local variable indicates which file contains the graphic that the process is using.

The graphic of a process must be indicated by assigning a **graphic's code** to the [graph](local_graph.md) local variable.

If just one file has been loaded in the program, it won't be necessary
to assign any value to **file**, as the **code of the first loaded file**
will equal **0** and this is the value of the variable by default.

If the graphic has been loaded with the [load_map()](load_map()_forward_slash_load_pcx().md) or [load_pcx()](load_map()_forward_slash_load_pcx().md) function, it won't be necessary to assign any value to **file** either, as the graphics loaded with this function are used as if they belonged to file number **0**
(to the first one that is loaded in the program).

When more than a file is loaded, it is necessary to indicate in each process
in which one its graphic is stored. It is done by assigning
the **file code** returned by the [load_fpg()](load_fpg().md) function
(on loading this **file FPG**) to the **file** local variable.

### Note Normally, if several files are sequentially loaded in a program,
the first one will have the code **0**, the second, the code **1**, the third, the code **2** and so on.

---------------------------------------


In general, if several files are used, it is a good practice to have the same number of global variables (named, for instance, **file1**, **file2**, ...) containing the code of each of the files, to use them in the processes when it comes to defining
its **file** variable (the **file FPG** that must be used).

The variables would be defined inside the section [GLOBAL](declaration_of_global_datadot.md) in the following way:

  **GLOBAL**

      **file1;** // First file's code

      **file2;** // Second file's code

      ...

Next, these variables would be assigned the **file codes**
on loading them with the [load_fpg()](load_fpg().md) function in the following way (supposing that the names of the files is **name1.fpg**,
**name2.fpg**, etc.):

  **file1=load_fpg(&quot;name1.fpg&quot;);** // Files loading

  **file2=load_fpg(&quot;name2.fpg&quot;);**

  ...

These files are generally loaded at the beginning of the program. Later, the used file would only have to be defined inside each process with the following statement (supposing that the process uses graphics stored in the file **name1.fpg**):

  **file=file1;** // The first file is used


---------------------------------------


### Note Keep in mind that defining the **file** local variable is futile,
unless a **graphic's code** is assigned to the [graph](local_graph.md) local variable.

---------------------------------------
See: [Local data](predefined_local_data.md)

