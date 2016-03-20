**encode(**&lt;OFFSET of the data&gt;**,** &lt;length&gt;**,** &lt;clue&gt;**)**

### Description

encrypt or un-encrypts a block of data in memory with a determined clue.
The necessary parameters are the following:

**&lt;OFFSET of the data&gt;** - Memory address in which starts the block which must
be compressed, to obtain this address the operator [OFFSET](offset.md) must be used.

**&lt;length&gt;** - Length of the data to be compressed, the number of
positions of memory, filled up for the same, the length of any
data can be obtained with [SIZEOF()](sizeof().md).

**&lt;clue&gt;** - A literal (text between quotation marks) with the clue of encryption
or decryption of the data.

The algorithm is reversible so, to decrypt the data, simply you must to encrypt
them with the same clue.

The algorithm of encryption is very complex, so, any encrypted data with a clue
just can be recovered applying to it the same clue again.

### Example program
```
PROGRAM example_encode;

CONST
    password="mypass";

GLOBAL
    table_original[14]  =0,1,2,3,4,5,6,7,8,9,10,11,12,13,14;
    table_encrypted[14]=0,1,2,3,4,5,6,7,8,9,10,11,12,13,14;
    counter;

BEGIN
    write(0,0,  0,0,"Original values");
    write(0,160,0,0,"encrypted values");
    write(0,0,190,0,"[SPACE] to encrypt/decrypt the values");

    // encrypts the values of the second table

    encode(OFFSET table_encrypted,sizeof(table_encrypted),password);

    FOR (counter=0;counter<15;counter++)
        write_int(0,0,  20+counter*8,0,OFFSET table_original[counter]);
        write_int(0,160,20+counter*8,0,OFFSET table_encrypted[counter]);
    END

    LOOP
        IF (scan_code==_space)

            // encrypts and decodes of values of the second table

            encode(OFFSET table_encrypted,sizeof(table_encrypted),password);

        END
        FRAME;
    END
END
```


This program has defined two tables of global data both with the same
values and allows, pressing the **space bar**, to encrypt and
decrypt one of the two tables (the denominated **table_encrypted[]**).

It can be seen how, when the data are encrypted a second time they are recovered
in its original state. If a different clue is used, the result will be 
completely different.

---------------------------------------


### Note There are other two functions which allow to encrypt and 
decrypt any kind of file, in this case must be used a function to
each operation: [encode_file()](encode_file().md) to encrypt and [decode_file()](decode_file().md)
to decrypt.

---------------------------------------
See: [encode_file()](encode_file().md) - [decode_file()](decode_file().md)

