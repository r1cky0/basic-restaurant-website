function integerNumber(input) {
    var answer = true;
    if ( ! parseInt(input) ) {
        answer = false;
    } else {
        for (var i=0; i<input.length; i++) {
            if ((input.charAt(i) != "0") && ( ! parseInt(input.charAt(i))) ) {
                answer = false;
                break;
            }
        }
    }
    return answer;
}

function exists(input) {
    var atLeastOneChar = false;
    if (input) {
        for (var i=0; i<input.length; i++) {
            if (input.charAt(i) != " ") {
                atLeastOneChar = true;
                break;
            }
        }
    }
    return atLeastOneChar;
}

function checkForm() {
    var mes = "";
    if (! exists(document.fu.nu.value)) {
        mes = mes + "Missing family name\n";
    }
    if (! exists(document.fu.eu.value)) {
        mes = mes + "Missing family name\n";
    }
    if (! exists(document.fu.du.value)) {
        mes = mes + "Missing family name\n";
    }
    if (! exists(document.fu.hu.value)) {
        mes = mes + "Missing family name\n";
    }
    if (! exists(document.fu.pu.value)) {
        mes = mes + "Missing family name\n";
    }
    if (! integerNumber(document.fu.pu.value)) {
        mes = mes + "Wrong number of person\n";
    }
    if (mes != "") {
        document.fu.actionu.value = -1;
        alert(mes);
    } else {
        document.fu.actionu.value = 3;
    }
}