$(function() {
    // init
    addTicketClickListeners();



    function addTicketClickListeners() {
        $("tr.ticket").click(function(event) {
            alert(event.currentTarget.id + "\n DO AJAX CALL");
            
        });
    }
});