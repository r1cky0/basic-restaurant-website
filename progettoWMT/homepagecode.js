var cur_im = 0;
var img = new Array(3);
var alt = new Array(3);
img[0] = "images\piatto1.jpg";
img[1] = "images\piatto2.jpg";
img[2] = "images\piatto3.jpg";
alt[0] = "paccheri";
alt[1] = "paccheri pesto";
alt[2] = "tagliatelle funghi";

function changeImage(input) {
    if (input == 0) {
        cur_im = cur_im - 1;
        if (cur_im == -1) {
            cur_im = 2;
        }
    } else if (input == 1) {
        cur_im = cur_im + 1;
        if (cur_im == 3) {
            cur_im = 0;
        }
    }

    document.getElementById("homeimage").src = img[cur_im];
    document.getElementById("homeimage").alt = alt[cur_im];
}