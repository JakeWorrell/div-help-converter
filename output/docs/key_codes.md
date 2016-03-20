Constants: **Key codes**
---------------------------------------


These constants are normally used as a parameter of the [key()](key().md) function, to indicate which key is the one that the user wishes to know whether it is pressed.

It can also be used to compare the [scan_code](global_scan_code.md) global variable, that contains the code of the last key that has been pressed, with these values.

The character **_** (underlining) followed by the name of the key, is normally used to designate each constant. For instance, for the [**A**] key, the constant referred to its code will be **_a**.

The whole list of these constants, with their respective values,
is as follows (according to the standard arrangement of the keytable):

**_esc**         = 1   [ESC] or escape

**_f1**          = 59  [F1] or function 1

**_f2**          = 60  [F2] or function 2

**_f3**          = 61  [F3] or function 3

**_f4**          = 62  [F4] or function 4

**_f5**          = 63  [F5] or function 5

**_f6**          = 64  [F6] or function 6

**_f7**          = 65  [F7] or function 7

**_f8**          = 66  [F8] or function 8

**_f9**          = 67  [F9] or function 9

**_f10**         = 68  [F10] or function 10

**_f11**         = 87  [F11] or function 11

**_f12**         = 88  [F12] or function 12 (DEBUGGER)

**_prn_scr**     = 55  [PRINT SCREEN]

**_scroll_lock** = 70  [SCROLL LOCK]


**_wave**        = 41  [&ordm;] or [&ordf;] key

**_1**           = 2   Number &quot;1&quot; key

**_2**           = 3   Number &quot;2&quot; key

**_3**           = 4   Number &quot;3&quot; key

**_4**           = 5   Number &quot;4&quot; key

**_5**           = 6   Number &quot;5&quot; key

**_6**           = 7   Number &quot;6&quot; key

**_7**           = 8   Number &quot;7&quot; key

**_8**           = 9   Number &quot;8&quot; key

**_9**           = 10  Number &quot;9&quot; key

**_0**           = 11  Number &quot;0&quot; key

**_minus**       = 12  Symbol &quot;?&quot; key

**_plus**        = 13  Symbol &quot;&iquest;&quot; key


**_backspace**   = 14  Delete ( &lt;- ) key

**_tab**         = 15  Tabulator [TAB] key

**_q**           = 16  Letter &quot;Q&quot; key

**_w**           = 17  Letter &quot;W&quot; key

**_e**           = 18  Letter &quot;E&quot; key

**_r**           = 19  Letter &quot;R&quot; key

**_t**           = 20  Letter &quot;T&quot; key

**_y**           = 21  Letter &quot;Y&quot; key

**_u**           = 22  Letter &quot;U&quot; key

**_i**           = 23  Letter &quot;I&quot; key

**_o**           = 24  Letter &quot;O&quot; key

**_p**           = 25  Letter &quot;P&quot; key

**_l_brachet**   = 26  Key [^] or [']

**_r_brachet**   = 27  Key [*] or [+]

**_enter**       = 28  [ENTER] (Enter or Return)


**_caps_lock**   = 58  [CAPS LOCK] or capitals lock

**_a**           = 30  Letter &quot;A&quot; key

**_s**           = 31  Letter &quot;S&quot; key

**_d**           = 32  Letter &quot;D&quot; key

**_f**           = 33  Letter &quot;F&quot; key

**_g**           = 34  Letter &quot;G&quot; key

**_h**           = 35  Letter &quot;H&quot; key

**_j**           = 36  Letter &quot;J&quot; key

**_k**           = 37  Letter &quot;K&quot; key

**_l**           = 38  Letter &quot;L&quot; key

**_semicolon**   = 39  Letter &quot;&Ntilde;&quot; key

**_apostrophe**  = 40  [**{**] key

**_backslash**   = 43  [**}**] key


**_l_shift**     = 42  [SHIFT] or left capitals

**_z**           = 44   Letter &quot;Z&quot; key

**_x**           = 45  Letter &quot;X&quot; key

**_c**           = 46  Letter &quot;C&quot; key

**_v**           = 47  Letter &quot;V&quot; key

**_b**           = 48  Letter &quot;B&quot; key

**_n**           = 49  Letter &quot;N&quot; key

**_m**           = 50  Letter &quot;M&quot; key

**_comma**       = 51  Key [;] or [,] key

**_point**       = 51  [:] or [.] key

**_slash**       = 51  [_] or [-] key

**_r_shift**     = 54  [SHIFT] or right capitals


**_control**     = 29  [CONTROL] keys

**_alt**         = 56  [ALT] or [ALT GR] keys

**_space**       = 57  [SPACE] or spacebar


**_ins**         = 82  [INSERT]

**_home**        = 71  [HOME]

**_pgup**        = 73  [PGUP] or page up

**_del**         = 83  [DEL] or delete

**_end**         = 79  [END]

**_pgdn**        = 81  [PGDN] or page down


**_up**          = 72  Up cursor

**_down**        = 80  Down cursor

**_left**        = 75  Left cursor

**_right**       = 77  Right cursor


**_num_lock**    = 69  [NUM LOCK] or numeric lock

**_c_backslash** = 53  Symbol [/] of the numeric keytable

**_c_asterisk**  = 55  Symbol [*] of the numeric keytable

**_c_minus**     = 74  Symbol [-] of the numeric keytable

**_c_home**      = 71  [HOME] of the numeric keytable

**_c_up**        = 72  Up cursor of the numeric keytable

**_c_pgup**      = 73  [PGUP] of the numeric keytable

**_c_left**      = 75  Left cursor of the numeric keytable

**_c_centre**    = 76  [5] key of the numeric keytable

**_c_right**     = 77  Right cursor of the numeric keytable

**_c_end**       = 79  [END] of the numeric keytable

**_c_down**      = 80  Down cursor of the numeric keytable

**_c_pgdn**      = 81  [PG DN] of the numeric keytable

**_c_ins**       = 82  [INS] of the numeric keytable

**_c_del**       = 83  [DEL] of the numeric keytable

**_c_plus**      = 78  Symbol [+] of the numeric keytable

**_c_enter**     = 28  [ENTER] of the numeric keytable


It is indifferent to use these constants or the numeric values that they represent. That is to say, it is possible to call the [key()](key().md) function, to verify whether the [**A**] key is pressed, such as **key(_a)** or **key(30)** (in the previous list, it is possible to verify that **30** is the numeric value of the constant **_a**).

---------------------------------------


### Important Some of these codes can vary in certain keytables. In case of doubt it is possible to execute the following sample program, that shows a table on screen, corresponding to the [key()](key().md) function (indicating the **codes of the keys that are pressed** at any moment), besides the values of the [scan_code](global_scan_code.md), [ascii](global_ascii.md) and [shift_status](global_shift_status.md) variables (also related to the reading of the keytable).

### Example program
```
PROGRAM example_codes_of_the_keytable;

GLOBAL
    keys[128];

BEGIN
    write(0, 0, 0, 0, "Codes of the pressed keys, according to key()");
    FROM x=0 TO 127;
        write_int(0, (x%16)*20, (x/16)*10+20, 0, OFFSET keys[x]);
    END
    write(0, 0, 160, 0, "Code of the last key pressed (scan_code):");
    write_int(0, 320, 160, 2, OFFSET scan_code);
    write(0, 0, 180, 0, "Code ASCII of the last key (ascii):");
    write_int(0, 320, 180, 2, OFFSET ascii);
    write(0, 0, 190, 0, "State of the special keys (shift_status):");
    write_int(0, 320, 190, 2, OFFSET shift_status);
    LOOP
        FROM x=1 TO 127;
            IF (key(x))
                keys[x]=x;
            ELSE
                keys[x]=0;
            END
        END
        FRAME;
    END
END
```


This program may be used (by clicking on the text &quot;### Example program&quot; with the mouse and then, by pressing the [**F10**] key) to find out the code that any specific key has.

This numeric code can later be used as a parameter of the [key()](key().md) function, to verify in the game whether this key is pressed at a specific moment.

---------------------------------------
See: [Constants](constants_predefined.md) - [key()](key().md) - [scan_code](global_scan_code.md) - [ascii](global_ascii.md) - [shift_status](global_shift_status.md)

