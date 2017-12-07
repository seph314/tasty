/*
<script type="text/javascript" src="jquery.js">
    <script type="text/javascript">
    function post()
    {
        var comment = document.getElementById("comment").value;
        var name = document.getElementById("username").value;
        if(comment && name)
        {
            $.ajax
            ({
                type: 'post',
                url: 'post_comment.php',
                data:
                    {
                        user_comm:comment,
                        user_name:name
                    },
                success: function (response)
                {
                    document.getElementById("all_comments").innerHTML=response+document.getElementById("all_comments").innerHTML;
                    document.getElementById("comment").value="";
                    document.getElementById("username").value="";

                }
            });
        }

        return false;
    }
    </script>;
    */