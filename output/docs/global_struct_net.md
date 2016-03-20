**STRUCT net;**

    **device;**      // Connection mechanism

    **com;**         // communications Port

    **speed;**       // Speed of connection

    **number;**      // Telephone number

    **init;**        // Modem initiation string

    **mode;**        // Mode (press or tone)

    **server;**      // Indicates if the PC is a server

    **max_players;** // Max number of players

    **num_players;** // Current number of players

**END**

This data structure requires you to have extensive programming experience 
to know how to create a game oriented for net connection (you can find out 
more information in the **user's manual**).

It contains data about your PC's net hardware, which are needed in conjunction
with the functions [net_join_game()](net_join_game().md) and [net_get_games()](net_get_games().md).

The structure **net** has only one register. In its different fields
are established the parameters which define the type of connection.

---------------------------------------


**device** - Mechanism with which the connection will be established,
it can be one of three values:

 **1** - Connection in one **local net**, with protocol IPX.

 **2** - Connection by cable (only two crews).

 **3** - Modem connection (only two crews).

For the connection mechanism to function the fields of the structure **net** must be initiated, 
because many of these parameters are needed to control the mechanism.

---------------------------------------


**com** - communications port used for the connection, it means, the
number of COM mechanism (from COM1 to COM4), indicating it as numerical value between **1** and **4**.

This field only needs to be defined for connections by cable or modem.

---------------------------------------


**speed** - speed in bauds (number of bits per second), up to 115000.
This speed must correspond to the cable or modem's capabilities,
and to the amount of data the program requires to run.

This field only needs to be defined for cable or modem connections.

---------------------------------------


**number** - Telephone number, of course this field is necessary only for
modem connections.

For example, the telephone number which the modem needs to dial must be assigned with a statement
like the following: **net.number=&quot;912345678&quot;;**.

---------------------------------------


**init** - Initiation string, it is a field only required for modem connections; for example a statement like: **net.init=&quot;ATZ&quot;;**.

---------------------------------------


**mode** - mode in which the modem connection must be established (also only for this connection mechanism), the values can be one of the following:

 **0** - Pulse.

 **1** - Tones.

---------------------------------------


**server** - indicates if a PC (computer) is the server. This (field is only for reading, it can't 
be modified).

In a connection, only one PC will have the field **net.server** being the value **1**, this
PC will be the server of the game, and will coordinate and control the most important actions
of the program.

---------------------------------------


**max_players** - The max number of players which is allowed per game,
from **2** to **16**. This field is useful only for LAN (local area network) connections,
because in cable or modem connections the max number of players will always be **2**.

This number must coincide with the max number of registers the global
structure has used in its communication parcels between the different PCs.

---------------------------------------


**num_players** - The current number of players connected to the game,
from **1** to **net.max_players**. This is a dynamic value, which  changes as (players connect
 and disconnect from the current game) in real time.

The game program must predetermine if players can dynamically enter and exit
from the game as they wish, or if all of them must be connected before the game starts.

---------------------------------------
See: [global data](predefined_global_data.md) - [net_join_game()](net_join_game().md) - [net_get_games()](net_get_games().md)

