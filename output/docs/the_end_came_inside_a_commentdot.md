The end of the program has come inside a comment of several lines
(those defined between the[ /*](definition_of_commentsdot.md) and[ */](definition_of_commentsdot.md) symbols).

This error appears because any comment has not been closed. Therefore, check that all the comments opened with the[ /*](definition_of_commentsdot.md) symbol have their corresponding[ */](definition_of_commentsdot.md) symbol closing them.

### Example
```
PROGRAM my_game;
BEGIN
    /* Beginning of the comment
    FRAME;
END // Error: The end came inside a comment.
```


---------------------------------------
See: [Syntax](syntax_of_a_programdot.md) - [Definition of comments](definition_of_commentsdot.md)

