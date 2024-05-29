<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    function submitData(action) {
        $(document).ready(function() {
            var data = {
                action: action,
                id: $("#id").val(),
                name: $("#name").val(),
                email: $("#email").val(),
                gender: $("#gender").val(),
            };
            $.ajax({
                url: 'function.php',
                type: 'post',
                data: data,
                success: function(response) {
                    alert(response);
                    if (response == "Deleted Successfully") {
                        $("#" + action).css("display", "none");
                    }
                }
            });
        });
    }
</script>