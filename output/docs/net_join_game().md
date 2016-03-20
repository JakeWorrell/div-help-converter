**net_join_game(**&lt;name of the game&gt;**,** &lt;OFFSET structure&gt;**,** &lt;SIZEOF(structure)&gt;**)**

### Returns

Number of players in the game (0, 1, 2, ...). If there is an error, a negative
number is returned, which is the error code:

 ** -1** : Connection aborted by the user.

 ** -2** : Can't start the connection.

 ** -3** : The number of players doesn't fit.

 ** -4** : There were errors of synchronisation.


### Description

The net functions are of an extremely advanced level, so could be difficult to understand
for users with not enough experience in programming.

First the predefined global structure [net](global_struct_net.md) must be initialised with the parameters
that define the type of connection which is going to be established.

Then, a call to the function **net_join_game()** will be enough to create a new game or to join
a game (if it is already created).

The name of the game (a literal, as **&quot;MyGame&quot;**), is used to differentiate a game from other games
running at the same time on one local net. 

&gt;From that moment, every computer connected to the game will send and receive data from 
the others automatically, through the net structure, indicated by the parameters.

**The structure of data.**

This must be a global structure of the program with as many registers as players
that are connected at the same time.

In the fields of the structure the sent data can be read and written to; each player
must input their values in their own register. The number which corresponds
to the total number of players is returned by this function.

The system will automatically send their register values to the other players, and the registers
of the others players to them.

[The predefined structure net](global_struct_net.md)

In this structure are established the parameters which define the type of connection. The fields
of this structure are :

**net.device** - Type of Connection Port  (1-IPX, 2-Serial link or 3-Modem).

**net.com** - N║ of COM Port, from 1 to 4 (just for serial and modem).

**net.speed** - Connection Speed (in bauds), up to 115000 (just for serial and modem).

**net.number** - Telephone number (just modem), for example **net.number=&quot;913040622&quot;;**.

**net.init** - Initialising string of the modem, for example **net.init=&quot;ATZ&quot;;**.

**net.mode** - 0 or 1 depending on whether the signals are pulses or tones (only for modem).

**net.server** - Indicates if it is the server (just reading, can't be modified).

**net.max_players** - Maximum number of players, from 2 to 16 (it must be the same as the number of registers to the global structure).

**net.num_players** - Current number of players, from 1 to 16 (players can connect and disconnect at any moment).

When the connection is made by a serial link or modem, you may only connect **2 players**.

---------------------------------------


It's important that the register number of the structure used for the data transfer
has as many registers as that indicated in **net.max_players**.

For example, if a game is created and the maximum number of players is 8,
and the information which must be given to the players is just their coordinates (x,y),
then it could be done as is shown in the following program (supposing a IPX connection
for a local net).

### Example program
```
PROGRAM example_net_join_game;

GLOBAL
  STRUCT player[7] // 8 players as maximum (from 0 to 7).
    x,y;
  END

  id_red;

BEGIN

  net.device=1;
  net.max_players=8; // Here, the number of registers is indicated.

  // ...

  id_red=net_join_game("xxx",OFFSET player, sizeof(player));

  IF (id_red<0)

    // An error has been produced ...

  END

  // The register of this player is "player[id_red]"

  player[id_red].x=x; // I Define my fields
  player[id_red].y=y;

  FRAME; // Sending / Reception of data

  // Now there are connected "net.num_players", and their data has also been passed to 
  // the other registers of the structure player[].

  // ...

END
```


### Note Further information can be found about how to structure a game over the internet in
the user's manual of DIV Games Studio.

---------------------------------------
See: [net_get_games()](net_get_games().md) - [STRUCT net](global_struct_net.md)

