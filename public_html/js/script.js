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
        self.retrievedComments = ko.observableArray();
        self.activeUser = ko.observable("");
        self.commentText = ko.observable("");



        /**
         * Handles user login
         * (It works and can be activated but I use the old PHP login right now).
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



        /**
         * Loads all comments.
         * Uses get-username.php to get username of loggedin user
         * Uses get-comments.php to get comments from database
         * Sets entry.author to true so that we can ad a delete-button on the right comments.
         */
        self.getAllComments = function () {
            $.getJSON("../get-username.php",
                function (jsonUser) {
                    self.activeUser = jsonUser;
                    $.getJSON("../get-comments.php",
                        function (jsonComments) {
                            for (var i = jsonComments.length - 1; i >= 0; i--) {
                                var entry = jsonComments[i];

                                if (self.activeUser == jsonComments[i]["name"]) {

                                    entry.author = true;
                                }
                                self.retrievedComments.unshift(entry);
                            }
                        }
                    );
                }
            );
        };


        /**
         * Handles new comments
         * Uses post_comment.php to connect to database
         */
        self.submitComment = function () {
            $.post("../post_comment.php",
                "commentText=" + ko.toJS(self.commentText), function () {
                    self.emptyCommentField();
                    removeComments(updateComments);
                });
        };


        /**
         * clears the comment field
         */
        self.emptyCommentField = function () {
            self.commentText("");
        };


        /**
         * Delets a comment
         * @param entry
         */
        self.deleteComment = function (entry) {
            $.post("../delete-comment.php",
                "id=" + ko.toJS(entry.id));
            /*self.retrievedComments.removeAll();
           self.getAllComments();*/
            removeComments(updateComments);
        };

        function removeComments(callback) {
            self.retrievedComments.removeAll();
            callback();
        }

        function updateComments() {
            self.getAllComments();
        }

        self.getAllComments();

    }

    // Activates knockout.js
    ko.applyBindings(new AppViewModel());

});