$(document).ready(function () {
    $("#defaultForm").submit(function () {

        var readingTimes = $("[name=readingTimes]").val();
        var readingLvl = $("[name=readingLvl]").val();
        var message = "";

        message += "Your Reading entered after " + readingTimes + " is " + readingLvl + " mmol/L \n";

        var reading = "";

        if (readingLvl <= 7.8) {
            reading += "Normal";
        } else if (readingLvl >= 7.9 && readingLvl <= 11) {
            reading += "Elevated";
        } else {
            reading += "High";
        }

        message += "Sugar Level is: " + reading + "\n";
        message += "Proceed to submit Reading?";


        var strconfirm = confirm(message);
        if (strconfirm == true) {
            return true;
        } else {
            return false;
        }
    });
});


