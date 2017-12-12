
// A page can't be manipulated safely until the document is "ready." jQuery detects this state of readiness for you.
$(document).ready(function () {

    /**
     * This is the ViewModel
     */
    function AppViewModel() {
        var self = this;

        // used for login
        self.username = ko.observable('');
        self.password = ko.observable('');

        // used for comments
        self.msg = ko.observable("eee");
        self.msgInfo = ko.observable("QACK");
        self.retrievedComments = ko.observableArray();
        self.activeUser = ko.observable("");
        self.commentText = ko.observable("");
        self.retrievedComment = ko.observableArray();


        /**
         * Login a user
         */
        self.sendLogin = function () {
            // Converts the data to plaintext that PHP can read
            var data = ko.toJS({"username": self.username, "password": self.password});

            $.ajax({
                url: "../login.php",
                type: 'post',
                data: data,
                success: function (result) {
                    // alert('credentials sent to PHP backend');
                    location.href = '../public_html/';
                }
            });
        };



        self.getAllComments = function () {
            alert("getAllComments");
            $.getJSON("http://localhost/~Anders/tasty/get-username.php",
                function(jsonUser){
                    self.activeUser = jsonUser;
                    alert(self.activeUser);
                    $.getJSON("http://localhost/~Anders/tasty/get-comments.php",
                        function(jsonComments){
                            //self.getUser();
                            for (var i = jsonComments.length - 1; i >= 0; i--)
                            {
                                var entry = jsonComments[i];

                                if(self.activeUser == jsonComments[i]["name"]){

                                    entry.author = true;
                                }
                                self.retrievedComments.unshift(entry);
                            }
                        }
                    );
                }
            );
        };

        self.getLatestComments = function () {
            $.getJSON("http://localhost/~Anders/tasty/get-latestcomment.php",
                function(jsonComment){
                    var exists = false;
                    for (var i = jsonComment.length - 1; i >= 0; i--)
                    {
                        var entry = jsonComment[i];
                        self.retrievedComments.push(entry);
                    }
                }
            );
        };



        /**
         * test
         */
        self.submitComment = function () {
            $.post("http://localhost/~Anders/tasty/post_comment.php",
                "commentText=" + ko.toJS(self.commentText), function () {
                    self.emptyCommentField();
                });
            removeComments(updateComments);
        };

        /**
         * clears the comment field
         */
        self.emptyCommentField = function () {
            self.commentText("");
        };

        self.deleteComment = function (entry) {
            //alert("sho");
            $.post("http://localhost/~Anders/tasty/delete-comment.php",
                "id=" + ko.toJS(entry.id));
            /*self.retrievedComments.removeAll();

            self.getAllComments();*/
            removeComments(updateComments);
        };

        function removeComments(callback) {
            self.retrievedComment.removeAll();
            callback();
        }

        function updateComments() {
            self.getAllComments();
        }

        self.getAllComments();


    }

    // Activates knockout.js
    ko.applyBindings(new AppViewModel(), document.getElementById('commentsdiv'));

});