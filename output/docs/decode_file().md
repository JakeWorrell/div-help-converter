**decode_file(**&lt;name of the file&gt;**,** &lt;clue&gt;**)**

### Description

Decodes one or more files on the disk, that share the same clue as the one
they were encrypted with using the function [encode_file()](encode_file().md). The necessary 
parameters are the following:

**&lt;name of file&gt;** - Description of a file which must be unencrypted,
a literal (text between quotation marks) with the name of the file. 
You can use the joker characters &quot;?&quot; and &quot;*&quot; in the specifying of
these files (for example, &quot;*.BAK&quot; to decrypt every file with extension BAK).

**&lt;clue&gt;** - A literal specifying the clue of encryption for the file or files.
This clue must be **exactly** the same as the clue that the files were originally 
encrypted with, if {they are unencrypted with a different clue, the files will
remain indecipherable}.

The files unencrypted cannot be unencrypted again.

### Example program
```
PROGRAM example_decode_file;

CONST
    pass="mypass";

GLOBAL
    mytable[]=0,1,2,3,4,5,6,7,8,9,10,11,12,13,14;

BEGIN
    save("help/help.enc",OFFSET mytable,sizeof(mytable));
    encode_file("help/help.enc",pass);
    // ...

    decode_file("help/help.enc",pass); // decodes the file

END
```


This small program uses the function [save()](save().md) to create a file
called **help.enc** with the data contained in **mytable**, and is encrypted with
the function **encode_file()**.

Before the program finishes the contents of the file are recovered again using 
the function **decode_file()** which decodes the data. The file will be returned
to its original form.

---------------------------------------


The function [encode()](encode().md) allows you to encrypt and decode data in
memory, but in this case, the operation is reversible, so
the same function is used for both operations.

---------------------------------------


### Note the functions [compress_file()](compress_file().md) and [uncompress_file()](uncompress_file().md)
allow you to compress and uncompress files on the disk. The files encrypted
**cannot be compressed** with these functions (due to its content being completely 
randomly organised).

---------------------------------------
See: [encode_file()](encode_file().md) - [encode()](encode().md) - [compress_file()](compress_file().md) - [uncompress_file()](uncompress_file().md)

