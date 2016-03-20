**uncompress_file(**&lt;name of file&gt;**)**

### Description

Uncompresses one or more files on the disk, previously compressed
with the function [compress_file()](compress_file().md), the only parameter required is
the **&lt;name of file&gt;** which must be uncompressed, as a literal
(text between quotation marks). The joker characters &quot;?&quot; &amp; &quot;*&quot; can be used 
to specify some files (for example, &quot;*.BAK&quot; to uncompress every
file with extension BAK).

The format of file encryption is a format specific to DIV Games Studio,
so it can't be uncompressed with any other external utility program.

The file will be uncompressed with the same name and extension as the 
one compressed. Files not compressed with the function
[compress_file()](compress_file().md) can't be uncompressed using this function.


### Example program
```
PROGRAM example_uncompress_file;

GLOBAL
    counter;
    mytable[999];

BEGIN
    FOR (counter=0;counter<1000;counter++)
        mytable[counter]=counter;
    END

    save("help/help.cmp",OFFSET mytable,sizeof(mytable));

    compress_file("help/help.cmp"); // Compress an file

    // ...

    uncompress_file("help/help.cmp"); // Uncompress the file

    load("help/help.cmp",OFFSET mytable);
END
```


This small example uses the function [save()](save().md) to create a file
called **help.cmp** using the data contained in **mytable**, this being  a group
of consecutive numbers from 0 to 1000, then the file is compressed
with the function [compress_file()](compress_file().md).

Once the compressed file has been created, it is then uncompressed with the function
**uncompress_file()** and is again loaded over the original table using the
function [load()](load().md).

---------------------------------------


### Note the functions [encode_file()](encode_file().md) and [decode_file()](decode_file().md)
allow you to encrypt and decode files of the disk.

The encrypted files, generated with these functions **cannot be compressed**
due to their contents being completely randomly organised. 
But, **the compressed files can be encrypted**.

---------------------------------------
See: [compress_file()](compress_file().md) - [encode_file()](encode_file().md) - [decode_file()](decode_file().md)

