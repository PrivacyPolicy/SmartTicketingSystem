$(function() {
    // init
    addTicketClickListeners();



    function addTicketClickListeners() {
        $("tr.ticket").click(function(event) {
            if (event.currentTarget.id != "-1") {
                alert(event.currentTarget.id + "\n DO AJAX CALL");
            }
            
        });
    }
});