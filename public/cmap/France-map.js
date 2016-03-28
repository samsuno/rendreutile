/*
Plugin Name: France regions HTML 5 map
Plugin URI: http://cmap.comersis.com/
Description: France regions map.
Version: france-free-1.032
Author: S.Marmion
Author URI: http://www.cmap.comersis.com
License: non-comercial
*/

// MAP CONFIG  ///////////////////////////////////////////////////////////////////////

var mapcolor = "#70ABF3";			// couleur de fond de carte
var mapcolor_hover = "#FF0000";		// couleur de survol de la souris
var maplines = "#FFFFFF";			// couleur des traits de séparation des régions

//

// MAP LINKS  ///////////////////////////////////////////////////////////////////////

var paths = {
                R0: {
                title: "Alsace",
                url: "../public/app?regionName=Alsace",
                path: "269,69, 268,71, 267,73, 263,73, 258,71, 257,69, 255,75, 258,76, 257,77, 258,78, 259,77, 260,77, 262,79, 261,86, 260,87, 258,86, 259,87, 258,92, 261,93, 260,94, 258,101, 256,105, 256,108, 254,109, 258,112, 259,117, 260,117, 261,119, 261,119, 262,120, 262,121, 264,122, 266,121, 267,121, 268,120, 268,119, 269,118, 269,117, 271,116, 270,114, 269,114, 269,110, 270,104, 270,103, 269,102, 270,99, 271,96, 272,93, 273,92, 272,90, 273,86, 273,84, 274,82, 275,81, 279,76, 281,71, 275,69, 273,69, 269,69, 269,69"
                },
                R1: {
                title: "Aquitaine",
                url: "../public/app?regionName=Aquitaine",
                path: "116,182, 115,185, 111,188, 111,191, 109,194, 106,194, 105,195, 105,196, 104,198, 99,198, 96,195, 95,192, 92,192, 92,190, 90,190, 90,192, 89,193, 88,189, 83,185, 82,182, 80,184, 80,185, 77,211, 77,209, 79,207, 81,209, 81,212, 80,212, 79,211, 78,212, 77,213, 76,215, 76,217, 75,223, 71,243, 69,247, 66,250, 65,251, 63,251, 64,254, 66,254, 66,255, 67,255, 68,254, 70,255, 71,255, 72,256, 70,260, 69,261, 70,262, 72,262, 73,260, 74,260, 73,262, 76,263, 77,264, 78,264, 81,266, 84,266, 86,265, 86,266, 86,268, 88,269, 90,271, 91,271, 92,270, 93,271, 95,270, 96,265, 97,264, 98,264, 98,262, 102,257, 102,256, 103,255, 103,251, 102,251, 102,250, 101,247, 98,247, 97,245, 99,239, 99,236, 104,235, 104,236, 105,236, 105,234, 107,234, 108,233, 112,234, 115,232, 119,233, 121,232, 123,229, 124,230, 123,228, 126,225, 124,225, 124,223, 128,222, 127,217, 129,216, 131,212, 134,210, 134,209, 136,207, 137,204, 137,202, 136,198, 134,198, 134,196, 133,195, 134,194, 133,193, 135,190, 133,188, 130,187, 131,185, 127,183, 123,183, 123,181, 116,182, 116,182"
                },
                R2: {
                title: "Auvergne",
                url: "../public/app?regionName=Auvergne",
                path: "180,147, 179,148, 176,148, 173,145, 171,145, 168,147, 164,148, 163,149, 163,152, 163,153, 158,154, 156,157, 157,159, 161,161, 163,166, 162,168, 163,171, 159,176, 161,179, 162,182, 161,183, 162,190, 158,189, 158,191, 154,196, 155,197, 154,198, 154,200, 152,200, 153,202, 151,203, 152,206, 154,209, 153,212, 155,215, 157,213, 160,214, 162,211, 164,207, 166,204, 169,206, 170,209, 171,209, 171,211, 172,214, 172,214, 176,205, 177,207, 181,203, 182,204, 183,207, 186,208, 186,206, 188,206, 192,210, 196,207, 199,206, 200,203, 202,203, 202,201, 203,200, 204,197, 205,198, 205,196, 206,194, 205,193, 203,193, 203,191, 200,189, 197,191, 195,191, 194,190, 193,191, 194,187, 193,183, 190,181, 188,177, 189,174, 188,172, 191,170, 190,163, 190,162, 192,161, 194,159, 194,156, 193,155, 189,153, 186,146, 183,149, 180,147, 180,147"
                },
                R3: {
                title: "Basse-Normandie",
                url: "../public/app?regionName=Basse-Normandie",
                path: "85,59, 83,56, 84,53, 84,52, 83,51, 80,50, 78,52, 77,52, 71,50, 70,50, 70,51, 71,52, 72,53, 72,54, 71,55, 71,56, 72,59, 73,61, 74,62, 74,63, 75,66, 77,65, 76,67, 76,70, 77,72, 77,75, 76,78, 76,81, 79,84, 80,83, 80,84, 78,85, 76,84, 75,84, 77,89, 79,90, 82,87, 85,89, 85,89, 90,89, 91,91, 93,90, 94,91, 97,89, 102,89, 102,88, 104,88, 105,91, 107,92, 107,94, 108,94, 114,91, 115,91, 116,96, 120,98, 121,98, 123,100, 125,100, 125,100, 124,96, 128,93, 128,89, 125,86, 125,85, 124,84, 124,83, 120,78, 117,77, 117,76, 117,75, 116,72, 117,71, 115,66, 117,65, 115,65, 115,60, 112,61, 110,63, 108,64, 105,65, 101,63, 94,62, 89,60, 87,61, 86,62, 85,61, 85,59"
                },
                R4: {
                title: "Bourgogne",
                url: "../public/app?regionName=Bourgogne",
                path: "180,94, 172,95, 172,99, 170,101, 174,105, 174,108, 172,111, 172,112, 171,113, 169,115, 170,117, 171,120, 170,121, 169,122, 170,125, 169,128, 171,129, 172,133, 172,136, 174,137, 173,140, 173,145, 176,148, 179,148, 180,147, 183,149, 186,146, 189,153, 193,155, 194,156, 194,159, 192,161, 192,163, 195,165, 199,164, 200,165, 203,163, 203,161, 204,160, 205,161, 207,160, 208,161, 209,160, 212,164, 215,153, 218,154, 221,153, 223,155, 225,154, 224,152, 226,149, 224,144, 223,144, 226,142, 221,139, 221,138, 222,136, 225,132, 226,128, 227,127, 225,123, 223,122, 226,120, 225,119, 224,117, 223,118, 221,119, 221,117, 219,117, 214,116, 213,113, 214,112, 214,110, 213,109, 212,109, 212,107, 210,107, 210,105, 206,105, 204,107, 201,107, 199,108, 198,108, 191,108, 189,103, 187,101, 186,102, 185,98, 182,95, 180,94, 180,94"
                },
                R5: {
                title: "Bretagne",
                url: "../public/app?regionName=Bretagne",
                path: "84,96, 85,95, 85,89, 85,89, 82,87, 79,90, 77,89, 75,84, 71,85, 69,84, 70,82, 69,82, 68,82, 67,83, 66,84, 68,87, 67,88, 67,87, 66,86, 66,84, 64,84, 64,84, 63,84, 62,85, 61,83, 60,84, 61,82, 59,82, 55,84, 54,86, 52,86, 52,87, 51,85, 50,84, 49,81, 45,77, 46,76, 44,77, 43,78, 44,76, 44,75, 43,75, 41,77, 42,76, 41,75, 41,76, 39,75, 38,76, 37,76, 36,75, 35,76, 34,76, 34,80, 32,81, 31,79, 28,79, 28,81, 27,80, 26,81, 26,78, 24,78, 24,79, 22,79, 18,80, 17,79, 15,80, 14,80, 13,81, 14,82, 13,81, 12,82, 13,82, 10,82, 9,82, 8,83, 8,84, 9,85, 8,85, 7,88, 8,89, 10,89, 11,89, 15,88, 16,88, 18,86, 15,89, 15,90, 16,89, 18,90, 17,90, 19,91, 18,92, 19,93, 21,93, 18,93, 17,91, 15,91, 12,91, 12,90, 12,91, 11,92, 12,94, 13,93, 17,94, 18,96, 17,97, 16,98, 15,97, 9,98, 8,98, 11,100, 13,99, 12,100, 13,101, 14,102, 15,105, 14,106, 16,107, 19,107, 19,105, 20,105, 20,104, 21,102, 20,104, 22,106, 23,106, 23,104, 26,107, 27,108, 28,108, 28,106, 28,108, 30,107, 29,108, 29,109, 32,109, 32,108, 33,109, 34,112, 35,111, 36,111, 36,108, 36,109, 37,110, 38,109, 36,111, 38,112, 36,112, 39,113, 40,112, 39,114, 40,115, 40,117, 40,118, 41,119, 40,117, 41,115, 42,116, 44,116, 44,114, 45,115, 46,115, 48,115, 49,116, 49,118, 48,117, 45,117, 47,119, 54,119, 56,119, 54,119, 55,121, 62,119, 62,116, 65,114, 71,114, 72,112, 77,110, 80,112, 81,111, 82,106, 85,105, 84,96, 84,96"
                },
                R6: {
                title: "Centre",
                url: "../public/app?regionName=Centre",
                path: "170,101, 170,101, 164,103, 160,102, 161,102, 161,100, 159,98, 159,96, 157,96, 156,97, 155,95, 154,97, 150,97, 149,92, 147,92, 146,91, 145,88, 142,85, 142,80, 140,76, 137,80, 137,81, 134,82, 132,81, 130,83, 127,83, 125,85, 125,86, 128,89, 128,93, 124,96, 125,100, 125,100, 126,102, 125,103, 124,104, 125,105, 126,108, 122,113, 121,114, 120,116, 116,118, 115,118, 115,120, 112,118, 112,120, 111,125, 108,132, 111,134, 111,136, 112,136, 113,139, 114,140, 120,139, 119,138, 122,139, 122,141, 126,148, 126,151, 128,153, 130,153, 131,156, 133,156, 132,158, 133,159, 136,158, 137,159, 139,158, 144,157, 145,156, 152,157, 154,157, 156,157, 158,154, 163,153, 163,152, 163,149, 164,148, 168,147, 171,145, 173,145, 173,140, 174,137, 172,136, 172,133, 171,129, 169,128, 170,125, 169,122, 170,121, 171,120, 170,117, 169,115, 171,113, 172,112, 172,111, 174,108, 174,105, 170,101, 170,101"
                },
                R7: {
                title: "Champagne-Ardenne",
                url: "../public/app?regionName=Champagne-Ardenne",
                path: "210,46, 210,45, 209,42, 209,40, 210,39, 210,37, 209,37, 206,39, 206,42, 202,44, 197,44, 197,43, 197,46, 196,48, 197,50, 194,54, 193,54, 193,61, 193,63, 190,62, 186,64, 185,65, 187,69, 184,71, 185,72, 184,73, 186,74, 182,79, 181,80, 180,81, 182,86, 183,87, 182,89, 180,89, 180,94, 182,95, 185,98, 186,102, 187,101, 189,103, 191,108, 198,108, 199,108, 201,107, 204,107, 206,105, 210,105, 210,107, 212,107, 212,109, 213,109, 214,110, 214,112, 213,113, 214,116, 219,117, 221,117, 221,119, 223,118, 224,117, 227,115, 228,115, 230,115, 230,111, 231,109, 232,110, 234,108, 234,107, 233,106, 232,106, 231,105, 229,102, 229,98, 223,93, 224,92, 215,86, 214,84, 213,82, 212,79, 212,76, 214,76, 214,74, 213,73, 213,71, 212,66, 214,64, 214,63, 215,60, 215,56, 216,55, 219,56, 220,54, 221,54, 220,54, 220,53, 219,52, 216,51, 215,49, 213,48, 211,49, 210,48, 210,46, 210,46"
                },
                R8: {
                title: "Corse",
                url: "../public/app?regionName=Corse",
                path: "287,241, 286,242, 286,251, 282,250, 280,253, 275,255, 274,256, 273,256, 272,258, 272,260, 270,262, 270,264, 271,263, 273,265, 270,267, 271,270, 275,272, 273,273, 272,278, 276,276, 276,279, 275,283, 280,284, 277,285, 277,287, 279,289, 285,291, 286,292, 287,293, 290,285, 289,285, 290,284, 291,282, 291,274, 294,268, 292,254, 289,252, 290,246, 289,241, 287,241, 287,241"
                },
                R9: {
                title: "Franche-Comté",
                url: "../public/app?regionName=Franche-Comté",
                path: "254,109, 254,109, 254,110, 250,106, 247,107, 244,106, 241,106, 238,104, 234,107, 234,108, 232,110, 231,109, 230,111, 230,115, 228,115, 227,115, 224,117, 223,118, 224,117, 225,119, 226,120, 223,122, 225,123, 227,127, 226,128, 225,132, 222,136, 221,138, 221,139, 226,142, 223,144, 224,144, 226,149, 224,152, 225,154, 223,155, 225,159, 227,159, 227,160, 228,160, 230,158, 232,159, 232,160, 234,160, 237,159, 240,155, 241,150, 243,148, 248,143, 248,142, 248,139, 247,138, 248,137, 249,137, 251,136, 253,134, 253,133, 255,131, 258,128, 258,126, 259,125, 260,124, 256,124, 257,122, 259,119, 260,120, 261,119, 260,117, 259,117, 258,112, 254,109, 254,109"
                },
                R10: {
                title: "Haute-Normandie",
                url: "../public/app?regionName=Haute-Normandie",
                path: "138,41, 135,43, 131,45, 130,45, 127,46, 122,47, 121,48, 114,52, 111,57, 111,58, 112,59, 117,60, 116,60, 115,60, 115,65, 117,65, 115,66, 117,71, 116,72, 117,75, 117,76, 117,77, 120,78, 124,83, 124,84, 125,85, 127,83, 130,83, 132,81, 134,82, 137,81, 137,80, 140,76, 139,73, 140,72, 142,72, 144,67, 146,66, 144,61, 145,57, 144,53, 146,50, 144,46, 138,41, 138,41"
                },
                R11: {
                title: "Ile-de-France",
                url: "../public/app?regionName=Ile-de-France",
                path: "175,72, 174,71, 173,71, 169,72, 167,71, 166,72, 163,72, 157,69, 156,70, 151,68, 148,69, 145,69, 144,67, 142,72, 140,72, 139,73, 140,76, 142,80, 142,85, 145,88, 146,91, 147,92, 149,92, 150,97, 154,97, 155,95, 156,97, 157,96, 159,96, 159,98, 161,100, 161,102, 160,102, 164,103, 170,101, 170,101, 172,99, 172,95, 180,94, 180,89, 182,89, 183,87, 182,86, 180,81, 181,80, 182,79, 177,76, 175,74, 175,72, 175,72"
                },
                R12: {
                title: "Languedoc-Roussillon",
                url: "../public/app?regionName=Languedoc-Roussillon",
                path: "182,204, 181,203, 177,207, 176,205, 172,214, 174,216, 176,221, 176,225, 176,226, 181,229, 180,231, 179,231, 183,233, 181,236, 181,237, 179,237, 178,240, 174,239, 174,244, 171,244, 168,246, 165,245, 165,250, 165,252, 163,253, 157,252, 155,252, 155,254, 151,253, 150,252, 150,253, 147,254, 147,252, 142,257, 143,260, 148,262, 149,265, 149,267, 148,268, 149,269, 149,271, 147,271, 147,274, 149,275, 151,274, 153,277, 150,277, 149,278, 145,280, 144,281, 145,282, 149,283, 149,286, 150,286, 153,285, 153,284, 155,284, 156,284, 160,285, 162,287, 163,286, 165,287, 166,286, 166,285, 167,284, 169,284, 172,282, 177,284, 178,284, 177,282, 175,280, 175,267, 175,265, 178,260, 179,259, 182,257, 185,257, 188,253, 187,255, 189,253, 193,251, 194,249, 198,248, 199,248, 199,249, 200,250, 202,251, 204,248, 207,247, 206,246, 208,243, 210,244, 211,238, 215,233, 212,230, 212,227, 211,225, 207,223, 206,223, 205,224, 205,223, 201,225, 197,222, 193,215, 192,210, 188,206, 186,206, 186,208, 183,207, 182,204, 182,204"
                },
                R13: {
                title: "Limousin",
                url: "../public/app?regionName=Aquitaine",
                path: "163,171, 162,168, 163,166, 161,161, 157,159, 156,157, 154,157, 152,157, 145,156, 144,157, 139,158, 137,159, 136,158, 133,159, 132,158, 131,158, 131,159, 129,159, 128,160, 125,162, 124,164, 124,169, 126,170, 126,172, 125,173, 122,177, 121,177, 119,179, 123,183, 127,183, 131,185, 130,187, 133,188, 135,190, 133,193, 134,194, 133,195, 134,196, 134,198, 136,198, 137,202, 142,201, 145,204, 148,203, 151,203, 153,202, 152,200, 154,200, 154,198, 155,197, 154,196, 158,191, 158,189, 162,190, 161,183, 162,182, 161,179, 159,176, 163,171, 163,171"
                },
                R14: {
                title: "Lorraine",
                url: "../public/app?regionName=Lorraine",
                path: "268,71, 269,69, 267,68, 266,67, 266,66, 264,65, 262,67, 259,68, 257,67, 256,67, 256,66, 254,65, 252,65, 252,66, 252,67, 250,67, 250,65, 248,63, 246,61, 247,60, 245,59, 244,57, 241,58, 239,56, 238,56, 237,57, 236,58, 235,58, 234,58, 233,57, 232,57, 230,56, 227,56, 226,57, 223,57, 222,55, 221,54, 221,54, 221,54, 220,54, 219,56, 216,55, 215,56, 215,60, 214,63, 214,64, 212,66, 213,71, 213,73, 214,74, 214,76, 212,76, 212,79, 213,82, 214,84, 215,86, 224,92, 223,93, 229,98, 229,102, 231,105, 232,106, 233,106, 234,107, 238,104, 241,106, 244,106, 247,107, 250,106, 254,110, 254,109, 254,109, 256,108, 256,105, 258,101, 260,94, 261,93, 258,92, 259,87, 258,86, 260,87, 261,86, 262,79, 260,77, 259,77, 258,78, 257,77, 258,76, 255,75, 257,69, 258,71, 263,73, 267,73, 268,71, 268,71"
                },
                R15: {
                title: "Midi-Pyrenees",
                url: "../public/app?regionName=Midi-Pyrenees",
                path: "171,211, 171,209, 170,209, 169,206, 166,204, 164,207, 162,211, 160,214, 157,213, 155,215, 153,212, 154,209, 152,206, 151,203, 148,203, 145,204, 142,201, 137,202, 137,204, 136,207, 134,209, 134,210, 131,212, 129,216, 127,217, 128,222, 124,223, 124,225, 126,225, 123,228, 124,230, 123,229, 121,232, 119,233, 115,232, 112,234, 108,233, 107,234, 105,234, 105,236, 104,236, 104,235, 99,236, 99,239, 97,245, 98,247, 101,247, 102,250, 102,251, 103,251, 103,255, 102,256, 102,257, 98,262, 98,264, 97,264, 96,265, 95,270, 96,269, 100,272, 101,274, 102,274, 103,275, 106,274, 108,274, 109,275, 111,275, 112,274, 113,275, 114,275, 119,275, 119,271, 120,270, 129,273, 130,274, 135,275, 137,278, 138,278, 138,277, 140,277, 141,278, 143,278, 144,279, 145,279, 145,280, 149,278, 150,277, 153,277, 151,274, 149,275, 147,274, 147,271, 149,271, 149,269, 148,268, 149,267, 149,265, 148,262, 143,260, 142,257, 147,252, 147,254, 150,253, 150,252, 151,253, 155,254, 155,252, 157,252, 163,253, 165,252, 165,250, 165,245, 168,246, 171,244, 174,244, 174,239, 178,240, 179,237, 181,237, 181,236, 183,233, 179,231, 180,231, 181,229, 176,226, 176,225, 176,221, 174,216, 172,214, 172,214, 171,211, 171,211"
                },
                R16: {
                title: "Nord-Pas-de-Calais",
                url: "../public/app?regionName=Nord-Pas-de-Calais",
                path: "162,8, 160,9, 158,9, 154,10, 154,11, 153,11, 146,12, 143,15, 143,18, 142,21, 143,24, 144,26, 143,25, 143,31, 144,31, 149,32, 150,34, 154,36, 160,35, 158,38, 159,40, 161,38, 165,40, 165,39, 167,41, 168,40, 169,42, 173,41, 175,42, 181,42, 183,41, 184,42, 186,41, 195,43, 195,42, 197,40, 196,38, 195,38, 195,35, 197,34, 195,34, 192,31, 190,32, 189,31, 187,31, 186,33, 185,32, 185,31, 185,29, 184,27, 183,27, 182,27, 182,26, 181,26, 180,27, 178,26, 177,24, 176,22, 176,21, 174,17, 170,19, 170,20, 169,20, 167,19, 166,17, 164,17, 163,14, 163,13, 164,12, 163,10, 162,8, 162,8"
                },
                R17: {
                title: "Pays-de-la-Loire",
                url: "../public/app?regionName=Pays-de-la-Loire",
                path: "97,89, 94,91, 93,90, 91,91, 90,89, 85,89, 85,95, 84,96, 85,105, 82,106, 81,111, 80,112, 77,110, 72,112, 71,114, 65,114, 62,116, 62,119, 55,121, 55,121, 55,122, 54,122, 53,124, 53,126, 55,127, 56,126, 58,128, 61,126, 64,126, 61,127, 60,128, 61,129, 60,130, 59,131, 63,133, 64,135, 63,135, 63,137, 61,139, 60,140, 60,141, 65,146, 66,149, 67,152, 71,155, 73,155, 75,157, 76,157, 78,158, 78,159, 78,158, 80,160, 80,158, 82,159, 85,157, 85,159, 88,158, 89,159, 94,157, 93,156, 93,152, 90,143, 88,141, 87,138, 93,137, 95,135, 98,134, 103,134, 104,136, 108,132, 111,125, 112,120, 112,118, 115,120, 115,118, 116,118, 120,116, 121,114, 122,113, 126,108, 125,105, 124,104, 125,103, 126,102, 125,100, 123,100, 121,98, 120,98, 116,96, 115,91, 114,91, 108,94, 107,94, 107,92, 105,91, 104,88, 102,88, 102,89, 97,89, 97,89"
                },
                R18: {
                title: "Picardie",
                url: "../public/app?regionName=Picardie",
                path: "181,42, 175,42, 173,41, 169,42, 168,40, 167,41, 165,39, 165,40, 161,38, 159,40, 158,38, 160,35, 154,36, 150,34, 149,32, 144,31, 144,31, 143,31, 142,31, 142,34, 145,37, 143,37, 142,36, 141,36, 139,40, 138,41, 144,46, 146,50, 144,53, 145,57, 144,61, 146,66, 144,67, 145,69, 148,69, 151,68, 156,70, 157,69, 163,72, 166,72, 167,71, 169,72, 173,71, 174,71, 175,72, 175,74, 177,76, 182,79, 186,74, 184,73, 185,72, 184,71, 187,69, 185,65, 186,64, 190,62, 193,63, 193,61, 193,54, 194,54, 197,50, 196,48, 197,46, 197,43, 195,43, 186,41, 184,42, 183,41, 181,42, 181,42"
                },
                R19: {
                title: "Poitou-Charentes",
                url: "../public/app?regionName=Poitou-Charentes",
                path: "126,148, 122,141, 122,139, 119,138, 120,139, 114,140, 113,139, 112,136, 111,136, 111,134, 108,132, 104,136, 103,134, 98,134, 95,135, 93,137, 87,138, 88,141, 90,143, 93,152, 93,156, 94,157, 89,159, 88,158, 85,159, 85,157, 82,159, 82,159, 81,160, 79,163, 80,164, 82,164, 83,168, 82,169, 82,172, 80,173, 80,175, 79,175, 78,176, 79,178, 84,181, 85,183, 87,184, 89,187, 90,190, 92,190, 92,192, 95,192, 96,195, 99,198, 104,198, 105,196, 105,195, 106,194, 109,194, 111,191, 111,188, 115,185, 116,182, 119,179, 121,177, 122,177, 125,173, 126,172, 126,170, 124,169, 124,164, 125,162, 128,160, 129,159, 131,159, 131,158, 132,158, 133,156, 131,156, 130,153, 128,153, 126,151, 126,148, 126,148"
                },
                R20: {
                title: "Provence-Alpes-Cote-d-Azur",
                url: "../public/app?regionName=Provence-Alpes-Cote-d-Azur",
                path: "236,210, 236,212, 233,212, 232,215, 233,217, 232,218, 230,217, 228,220, 229,221, 234,224, 234,227, 232,227, 230,229, 228,228, 227,227, 223,226, 222,223, 221,224, 220,223, 215,226, 214,223, 210,223, 211,225, 212,227, 212,230, 215,233, 211,238, 210,244, 208,243, 206,246, 207,247, 204,248, 202,251, 202,251, 209,251, 210,251, 210,252, 210,253, 211,254, 215,254, 216,254, 217,254, 216,252, 217,251, 219,251, 221,254, 226,254, 227,253, 228,254, 228,255, 229,257, 228,258, 233,258, 233,259, 235,258, 236,258, 239,261, 239,262, 240,262, 241,261, 242,262, 242,260, 243,260, 244,261, 245,261, 247,262, 246,263, 247,262, 247,261, 248,260, 249,260, 252,260, 252,259, 254,258, 256,257, 258,257, 259,255, 257,254, 260,251, 260,250, 264,249, 264,247, 264,246, 265,245, 267,245, 268,244, 269,244, 269,243, 270,241, 271,241, 272,240, 273,240, 274,239, 275,239, 277,237, 277,236, 277,235, 277,234, 279,231, 280,230, 280,229, 281,228, 281,227, 280,225, 280,224, 279,225, 273,226, 273,226, 271,226, 269,224, 265,223, 262,219, 263,217, 261,215, 261,213, 262,212, 263,210, 264,209, 265,208, 264,206, 264,204, 263,204, 260,203, 258,202, 258,201, 257,200, 257,199, 256,198, 255,196, 251,197, 250,198, 246,196, 245,198, 246,200, 249,202, 248,205, 247,204, 240,206, 240,208, 237,208, 236,210, 236,210"
                },
                R21: {
                title: "Rhone-Alpes",
                url: "../public/app?regionName=Rhone-Alpes",
                path: "209,160, 208,161, 207,160, 205,161, 204,160, 203,161, 203,163, 200,165, 199,164, 195,165, 192,163, 192,161, 190,162, 190,163, 191,170, 188,172, 189,174, 188,177, 190,181, 193,183, 194,187, 193,191, 194,190, 195,191, 197,191, 200,189, 203,191, 203,193, 205,193, 206,194, 205,196, 205,198, 204,197, 203,200, 202,201, 202,203, 200,203, 199,206, 196,207, 192,210, 193,215, 197,222, 201,225, 205,223, 205,224, 206,223, 207,223, 211,225, 210,223, 214,223, 215,226, 220,223, 221,224, 222,223, 223,226, 227,227, 228,228, 230,229, 232,227, 234,227, 234,224, 229,221, 228,220, 230,217, 232,218, 233,217, 232,215, 233,212, 236,212, 236,210, 237,208, 240,208, 240,206, 247,204, 248,205, 249,202, 246,200, 245,198, 246,196, 250,198, 251,197, 255,196, 256,195, 258,194, 260,195, 260,194, 263,192, 264,192, 265,191, 266,186, 265,185, 262,183, 262,180, 262,179, 260,178, 260,177, 258,177, 257,174, 258,172, 260,172, 261,171, 262,169, 260,165, 259,166, 259,163, 256,162, 257,162, 258,158, 256,156, 256,155, 254,154, 249,155, 247,157, 246,156, 245,157, 244,159, 246,160, 245,161, 244,162, 242,163, 241,163, 240,164, 238,163, 238,162, 239,161, 242,160, 241,159, 242,156, 240,155, 237,159, 234,160, 232,160, 232,159, 230,158, 228,160, 227,160, 227,159, 225,159, 223,155, 221,153, 218,154, 215,153, 212,164, 209,160, 209,160"
                }

}


//function francefree(){
//var cmap = '';
//cmap += '<link rel="stylesheet" href="'+cmap/style.css+'" type="text/css" media="screen" />';
//cmap += '<script src="'+cmap/jquery-1.11.1.min.js+'"></script>';
//cmap += '<script src="'+cmap/france-map.js+'"></script>';
//cmap += '<div id="legende"></div><map  name="map"><div id="areas"></div> </map><img id="canvasMap" id="image" src="'+cmap/trans.gif+'" usemap="#map"/><canvas id="canvas">Mettez à jour votre navigateur Internet !</canvas>';
//document.write(""+cmap+"");
//}



$(function(){
// console.Log('teteteettetetet');
       
        var map = $("#map");
        var areas = $("#areas");
        var canvas = $("#canvas")[0]; 
		canvas.width = 300;
        canvas.height = 300;
        var c = canvas.getContext("2d");
 
        $.fn.render = function(){ 
          this.data.apply(this, arguments);
          render();
        }
        function clear(){    
          c.fillStyle = "#FFFFFF";
          c.fillRect(0, 0, canvas.width, canvas.height);
        }
		
	arr = new Array();
    for (var country in paths) {
        var obj = paths[country].path;
		var lnk = paths[country].url;
		var txt = paths[country].title;
		//arr[obj.id] = country;
		
        $('<area />', {
          shape : "poly",
          coords : ""+obj+"",
          href :  ""+lnk+"",
          alt : ""+txt+""
		  
        }).data({
 
          fillStyle: mapcolor,
          strokeStyle : maplines,
          lineWidth : 1.2,
		  alt : ""+txt+""
 
        }).mouseenter(function(){
          $(this).render({strokeStyle: maplines,
                          fillStyle : mapcolor_hover});
         $("div#legende").html(""+this.alt+"");
		 render();
		  //  ecrit dans la div
		
		
        }).mouseleave(function(){
          $(this).render({strokeStyle: maplines,
                          fillStyle : mapcolor});
		$("div#legende").html("");
 
        }).click(function(){
          //location.href=href;
		  window.location.href;
        }).appendTo(areas);
        render();
 // fin de CREATE POLY 1
 
}
 
        
 
        function fillStroke(fillStyle, strokeStyle){
          if (fillStyle) c.fill();
          if (strokeStyle) c.stroke();
        }
 
        function render(noClear){
          if (!noClear){
            clear();
          }
 
          areas.children().each(function(i){
            var area = $(this);
            var shape = area.attr("shape");
            var coords = area.attr("coords").split(",");
            var fillStyle = area.data("fillStyle");
            var strokeStyle = area.data("strokeStyle");
            var lineWidth = area.data("lineWidth");
			
              if (fillStyle){
                c.fillStyle = fillStyle; 
 
              }
              if (strokeStyle){
                if (lineWidth){
                  c.lineWidth = lineWidth; 
                }
                c.strokeStyle = strokeStyle;   
              }
 
              c.beginPath();
              var leng = coords.length;
              c.moveTo(coords[0], coords[1]);
              for (var i = 2; i < leng; i+=2){
                c.lineTo(coords[i], coords[i+1]); 
              }
              c.closePath();
              fillStroke(fillStyle, strokeStyle);
            c.lineWidth = 1;
          });
        }
      });
