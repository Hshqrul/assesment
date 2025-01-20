<script>
$(document).ready(function() {
    $("#myButton").click(function() {
        $.ajax({
            url: 'TestAjax.php',
            type: 'POST',
            data: { action: 'myFunction' },
            success: function(response) {
                $('#result').html(response);
            },
            error: function() {
                alert("Error in AJAX request");
            }
        });
    });
});
</script>
