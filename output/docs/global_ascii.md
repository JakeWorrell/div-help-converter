**ascii=0;** // ASCII code of the last pressed key---------------------------------------
.

This global variable always indicates the ASCII code of the **last pressed key** in the last game's frame.

The **ascii** variable will be at **0** if no key has been pressed in the previous frame of the game.

The ASCII codes are a list of characters (letters, numbers and symbols)
numbered from **0** to **255** that have been standardised. The codes less than 32 are called control characters; from 32 to 127 appears the international set of characters; and from number 128, appears the expanded set of characters (according to the PC standard). The international and expanded ASCII characters are shown below.

**Summary of the standard PC ASCII codes.**---------------------------------------
033 21** !**│097 61** a**│161 A1** &iacute;**│225 E1** &szlig;**

034 22** &quot;**│098 62** b**│162 A2** &oacute;**│226 E2** &Gamma;**

035 23** #**│099 63** c**│163 A3** &uacute;**│227 E3** &pi;**

036 24** $**│100 64** d**│164 A4** &ntilde;**│228 E4** &Sigma;**

037 25** %**│101 65** e**│165 A5** &Ntilde;**│229 E5** &sigma;**

038 26** &amp;**│102 66** f**│166 A6** &ordf;**│230 E6** &micro;**

039 27** '**│103 67** g**│167 A7** &ordm;**│231 E7** &tau;**

040 28** (**│104 68** h**│168 A8** &iquest;**│232 E8** &Phi;**

041 29** )**│105 69** i**│169 A9** ⌐**│233 E9** &Theta;**

042 2A** ***│106 6A** j**│170 AA** &not;**│234 EA** &Omega;**

043 2B** +**│107 6B** k**│171 AB** &frac12;**│235 EB** &delta;**

044 2C** ,**│108 6C** l**│172 AC** &frac14;**│236 EC** &infin;**

045 2D** -**│109 6D** m**│173 AD** &iexcl;**│237 ED** &phi;**

046 2E** .**│110 6E** n**│174 AE** &laquo;**│238 EE** &epsilon;**

047 2F** /**│111 6F** o**│175 AF** &raquo;**│239 EF** &cap;**

048 30** 0**│112 70** p**│176 B0** ░**│240 F0** &equiv;**

049 31** 1**│113 71** q**│177 B1** ▒**│241 F1** &plusmn;**

050 32** 2**│114 72** r**│178 B2** ▓**│242 F2** &ge;**

051 33** 3**│115 73** s**│179 B3** │**│243 F3** &le;**

052 34** 4**│116 74** t**│180 B4** ┤**│244 F4** ⌠**

053 35** 5**│117 75** u**│181 B5** ╡**│245 F5** ⌡**

054 36** 6**│118 76** v**│182 B6** ╢**│246 F6** &divide;**

055 37** 7**│119 77** w**│183 B7** ╖**│247 F7** &asymp;**

056 38** 8**│120 78** x**│184 B8** ╕**│248 F8** &deg;**

057 39** 9**│121 79** y**│185 B9** ╣**│249 F9** ∙**

058 3A###  │122 7A** z**│186 BA** ║**│250 FA** ∙**

059 3B** ;**│123 7B** {{**}│187 BB** ╗**│251 FB** &radic;**

060 3C** &lt;**│124 7C** |**│188 BC** ╝**│252 FC** ⁿ**

061 3D** =**│125 7D** {**}}│189 BD** ╜**│253 FD** &sup2;**

062 3E** &gt;**│126 7E** ~**│190 BE** ╛**│254 FE** ■**

063 3F** ?**│127 7F** **│191 BF** ┐**│255 FF** &nbsp;**

064 40** @**│128 80** &Ccedil;**│192 C0** └**

065 41** A**│129 81** &uuml;**│193 C1** ┴**

066 42** B**│130 82** &eacute;**│194 C2** ┬**

067 43** C**│131 83** &acirc;**│195 C3** ├**

068 44** D**│132 84** &auml;**│196 C4** ─**

069 45** E**│133 85** &agrave;**│197 C5** ┼**

070 46** F**│134 86** &aring;**│198 C6** ╞**

071 47** G**│135 87** &ccedil;**│199 C7** ╟**

072 48** H**│136 88** &ecirc;**│200 C8** ╚**

073 49** I**│137 89** &euml;**│201 C9** ╔**

074 4A** J**│138 8A** &egrave;**│202 CA** ╩**

075 4B** K**│139 8B** &iuml;**│203 CB** ╦**

076 4C** L**│140 8C** &icirc;**│204 CC** ╠**

077 4D** M**│141 8D** &igrave;**│205 CD** ═**

078 4E** N**│142 8E** &Auml;**│206 CE** ╬**

079 4F** O**│143 8F** &Aring;**│207 CF** ╧**

080 50** P**│144 90** &Eacute;**│208 D0** ╨**

081 51** Q**│145 91** &aelig;**│209 D1** ╤**

082 52** R**│146 92** &AElig;**│210 D2** ╥**

083 53** S**│147 93** &ocirc;**│211 D3** ╙**

084 54** T**│148 94** &ouml;**│212 D4** ╘**

085 55** U**│149 95** &ograve;**│213 D5** ╒**

086 56** V**│150 96** &ucirc;**│214 D6** ╓**

087 57** W**│151 97** &ugrave;**│215 D7** ╫**

088 58** X**│152 98** &yuml;**│216 D8** ╪**

089 59** Y**│153 99** &Ouml;**│217 D9** ┘**

090 5A** Z**│154 9A** &Uuml;**│218 DA** ┌**

091 5B** [**│155 9B** &cent;**│219 DB** █**

092 5C** \**│156 9C** &pound;**│220 DC** ▄**

093 5D** ]**│157 9D** &yen;**│221 DD** ▌**

094 5E** ^**│158 9E** ₧**│222 DE** ▐**

095 5F** _**│159 9F** &fnof;**│223 DF** ▀**

096 60** '**│160 A0** &aacute;**│224 E0** &alpha;**---------------------------------------


Therefore, an ASCII code is referred to the **character that has been created with the last keystroke** (or keystroke combinations, in those cases such as letters bearing a stress mark).

---------------------------------------


### Important There is another predefined global variable, called [scan_code](global_scan_code.md), which also contains the code of the last pressed key. But, unlike **ascii**, this new variable stores the **scan code** of the key. This indicates **which key has been pressed** and not **which character has been generated** by it (like **ascii**).

There is a series of constants designating these [keys codes](key_codes.md) (keytable scan codes). 
Access the help about these [keys codes](key_codes.md)
to observe, moreover, a **sample program** with the **ascii** and **scan_code** variables.

The [key()](key().md) function of the language is normally used in order to verify whether a key is being pressed or not. This function receives one of these [keys codes](key_codes.md) as a parameter, and returns **0** if the key is not pressed or **1** if it is pressed.

---------------------------------------
See: [Global data](predefined_global_data.md) - [scan_code](global_scan_code.md) - [key()](key().md)

