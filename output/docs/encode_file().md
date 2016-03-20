**encode_file(**&lt;name of file&gt;**,** &lt;clue&gt;**)**

### Description

encrypts one or more files of the disk with a pre-determined clue.
The necessary parameters are the following:

**&lt;name of the file&gt;** - Description of a file which must be encrypted,
a literal (text between quotation marks) with the name of the file. 
You can use the joker characters &quot;?&quot; and &quot;*&quot; in the specifying of
these files (for example, &quot;*.BAK&quot; to encrypt every file with extension BAK).

**&lt;clue&gt;** - A literal containing the clue of encryption of the file or files.

The encryption algorithm is quite complex, but any encrypted file
with a clue can be recovered simply by applying the same clue to it
with the function [decode_file()](decode_file().md). If this function is not called,
the resulted file will be completely useless, being impossible to recover
the data contained in it.

Files which are already encrypted cannot be encrypted a second time.

### Example program
```
PROGRAM example_encode_file;

CONST
    password="mypass";

GLOBAL
    mytable[]=0,1,2,3,4,5,6,7,8,9,10,11,12,13,14;

BEGIN
    save("help/help.enc",OFFSET mytable,sizeof(mytable));

    encode_file("help/help.enc",password); // encrypts the file
END
```


This small program uses the function [save()](save().md) to create a file
called **help.enc** with the data contained in **mytable**, and then the program
encrypts it with the function **encode_file()**.

You can see how the contents of the created file (inside of the directory
**help/**) doesn't bear any relation to the original data (independent
of what the encryption clue is).

---------------------------------------


There is another function called [encode()](encode().md) which allows you to encrypt
and decrypt data in memory, in this case the operation is reversible, so
the same function is used for both operations.

---------------------------------------


### Note The functions [compress_file()](compress_file().md) and [uncompress_file()](uncompress_file().md)
allow you to compress and uncompress files of the disk. The encrypted files
**cannot be compressed** with the functions (as their contents are randomly 
organised).

---------------------------------------
See: [encode()](encode().md) - [decode_file()](decode_file().md) - [compress_file()](compress_file().md) - [uncompress_file()](uncompress_file().md)

