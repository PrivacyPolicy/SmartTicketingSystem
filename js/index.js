$(function() {
    // init
    addTicketClickListeners();



    function addTicketClickListeners() {
        $("#formSubmit").click(function(event) {
            $("#ticketForm").submit();
        });
    }
});