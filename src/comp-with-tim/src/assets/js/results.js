function getUrlParameter(sParam) {
    var sPageURL = decodeURIComponent(window.location.search.substring(1)),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : sParameterName[1];
        }
    }
};

function showResults() {
    let compile = getUrlParameter('compile');
    let variabletype = getUrlParameter('variabletype');
    let comments = getUrlParameter('comments');
    let testresult = getUrlParameter('testresult');

    // Only print results if there are any
    if (compile != undefined){
        $("#result").html("<h3>Auto-marker results</h3><br><p>Here is an idea of what your mark will look like. I will be going over your homework individually before entering the marks so that I can verify the results.</p><br><br>")
        
        // There are smart people in the world that may think changing the parameters mean hacking
        if (compile > 1 || variabletype > 2 || testresult > 6 || comments > 1){
            $("#result").append("<br><br><h2>Nice try, but it is impossible to change your mark this way ;)</h2>")
        }else{
            $("#result").append("<ul><li>Can compile and run <b>(" + compile + "/1)</b></li>")
            $("#result").append("<li>Correct variable types are used <b>(" + variabletype + "/2)</b></li>")
            $("#result").append("<li>All test cases passed <b>(" + testresult + "/6)</b></li>")
            $("#result").append("<li>Comments are appropriately used <b>(" + comments + "/1)</b></li></ul>")

            // Present relevant tips
            $("#result").append("<br><br><h3>Tip(s)</h3>")
            if (compile == 0){
                $("#result").append("<br><p>If you get 0 on \"Can compile\" as well as 0 on \"test cases\", it means that your program could not compile or run and therefore no test cases could be run on it. Check to make sure that it can run fine with the example on the handout! If you still can't fix it, don't worry - I will manually go over your code and give you part marks.")
            }
            if (testresult != 6){
                $("#result").append("<br><p>If 0 the test cases passed, try running the example on the homework handout to see if your program does exactly the same thing as the example. If you got part marks for the test cases, try entering something else and see if it does what you expect. Be sure to check the \"edge cases\"!</p>")
            }
            if (comments == 0){
                $("#result").append("<br><p>When you start making programs that are > 1000 lines of code, nobody wants to read through it to figure out what it does. Put comments so that it helps you and other programmers to find what they want quickly!</p>")
            }
        }
    }
}