**net_get_games()**

### Returns

Activated games of this game currently running.

### Description

returns the number of live games currently being played of a particular game
(to connections over local net).
This function is used to see if there is any live game at a determined moment.

To establish a connection, the function [net_join_game()](net_join_game().md) is used, to create
a game or to connect to them.

### Example program
```
PROGRAM example_net_get_games;

GLOBAL
  n;  // Active games.

BEGIN
  net.device=1; // set device to local LAN
  // ...

  n=net_get_games();

  IF (n>0)
    // ...
  END

  //...

END
```


Just is useful to IPX connections, it has no meaning in serial link or modem connections  
(because in these cases there can be just one game).

---------------------------------------
See: [net_join_game()](net_join_game().md) - [,STRUCT net](global_struct_net.md)

