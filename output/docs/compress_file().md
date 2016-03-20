**compress_file(**&lt;name of file&gt;**)**

### Description

Compresses one or more files of the disk, the only parameter required is 
the **&lt;name of file&gt;** which must be compressed, as a literal (text between
quotation marks). The joker characters &quot;?&quot; &amp; &quot;*&quot; can be used to specify some
files (for example, &quot;*.BAK&quot; to compress every file with the extension BAK).

To uncompress these files the function [uncompress_file()](uncompress_file().md) must be used.
The format of file encryption is a format specific to DIV Games Studio,
so it can't be uncompressed with any other external utility program.

The file will be saved compressed with the same name and extension as the
original. Files already compressed cannot be compressed a second time.


### Example program
```
PROGRAM example_compress_file;

GLOBAL
    counter;
    mytable[999];

BEGIN
    FOR (counter=0;counter<1000;counter++)
        mytable[counter]=counter;
    END

    save("help/help.cmp",OFFSET mytable,sizeof(mytable));

    compress_file("help/help.cmp"); // Compress the file.
END
```


This small program uses the function [save()](save().md) to create a file
called **help.cmp** with the data contained in **mytable**, this being a group of
consecutive numbers from 0 to 1000.

Once created, the file is compressed with the function **compress_file()**.

In this case, the original size of the file is 4000 bytes (1000 blocks of data),
and the size of the compressed file is 1441 bytes (36% of the original size).

---------------------------------------


### Note the functions [encode_file()](encode_file().md) and [decode_file()](decode_file().md)
allow you to encrypt and decode files on the disk.

The files encrypted with these functions **can't be compressed**
due to their being content completely randomly organised. But, {the files
compressed can be encrypted}.

---------------------------------------
See: [uncompress_file()](uncompress_file().md) - [encode_file()](encode_file().md) - [decode_file()](decode_file().md)

