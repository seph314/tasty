/**
 * This is a simple *viewmodel* - JavaScript that defines the data and behavior of your UI
 */

// A page can't be manipulated safely until the document is "ready." jQuery detects this state of readiness for you.
$(document).ready(function () {


    function LoginViewModel() {
        var self = this;
        self.username = ko.observable('');
        self.password = ko.observable('');
        self.test = ko.observable('testmeddelande');


        self.sendEntry = function () {
            //Here is where you convert the data to something php can swallow
            var data = ko.toJS({"username":self.username, "password":self.password});

            $.ajax({
                url: "../login.php",
                type: 'post',
                data: data,
                success: function (result) {
                    console.log(result);
                }
            });
        }
    }
    // Activates knockout.js
    ko.applyBindings(new LoginViewModel());

});