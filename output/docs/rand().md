**rand(**&lt;minimum value&gt;**,** &lt;maximum value&gt;**)**

### Returns

A random numeric value.

### Description

Returns a random number (chosen at random) between the **minimum value** and the **maximum value**, both included.

This function is normally used to set all the parameters intended to be varied in a game when it is restarted. For instance, the coordinates of an enemy may be initialised with random numbers, so it may appear in a different position in every game.

This function has another utility. Thus, if we want that an action does not always occur, but that it has a certain probability to occur, we normally use a statement of the following type:

  **IF (rand(0, 100)&lt;25)**

     ** // Action ...**

  **END**


In this case, the **action** will take place, on average, 25 per cent of the times the [IF](if_statements.md) statement would be executed. The reason for that is that, on obtaining a random number between 0 and 100, this number would be less than 25 in a fourth of times, approximately.

### Example program
```
PROGRAM example_rand;

PRIVATE
    table[15];
    counter;

BEGIN
    write (0, 0, 192, 0, "Press [SPACE] to calculate random values.");
    FROM counter=0 TO 15;
        write_int(0, 0, counter*10, 0, offset table[counter]);
    END
    LOOP
        IF (scan_code==_space)
            FROM counter=0 TO 15;

                // Random values between -100 and 100 are chosen
                table[counter] = rand(-100, 100);

            END
        END
        FRAME;
    END
END
```


In the example, a table with 16 data (from 0 to 15) is created. In every
iteration of the main loop it is checked whether the spacebar has been pressed.
If so, the 16 data of the table will be filled with random values between -100 and 100,
chosen with the **rand()** function.

---------------------------------------


By default, the values returned by the **rand()** function will completely be different in every execution of the program. If we want to have always the same series of numbers, we may use the [rand_seed()](rand_seed().md) function, specifying a number behind which the series of numbers returned by the **rand()** function will always be predetermined.

---------------------------------------
See: [rand_seed()](rand_seed().md)

