<!DOCTYPE html>
<html lang=en>
    <?php include 'query.php'; ?>
    <head>
        <meta charset=utf-8>
        <title>SmartTicket - View Tickets</title>
        
        <link rel=stylesheet href=../css/materialize.min.css>
        
        <script src=../js/materialize.min.js></script>
        <script src=../js/jquery.min.js></script>
        <script src=../js/view_tickets.js></script>
    </head>
    <body>
        
        <nav>
            <div id=titleBar></div>
            <div id=navLinks></div>
        </nav>
        
        <main>
            <section id=ticketsTable>
                <table>
                    <thead>
                        <tr>
                            <th>Ticket #</th>
                            <th>Subject</th>
                            <th>Client</th>
                            <th>Priority</th>
                            <th>Assignee</th>
                        </tr>
                    </thead>
                    <tbody>
<?php

$json = query("SELECT * FROM tickets");
echo $json;
foreach ($json["data"] as $ticket) {
    echo "
                        <tr id={$ticket['id']} class=ticket>
                            <td class=\"ticketNum\">
                                
                            </td>
                            <td class=\"subject\">
                                
                            </td>
                            <td class=\"client\">
                                
                            </td>
                            <td class=\"priority\">
                                
                            </td>
                            <td class=\"assignee\">
                                
                            </td>
                        </tr>";
}
?>
                    </tbody>
                </table>
            </section>
            
            <section id=ticketView>
                <header>
                    <div id=viewTicketID>
                        Ticket #<span class=data></span>
                    </div>
                    <div id=viewTicketTitle></div>
                    <div id=viewTicketClient></div>
                </header>
                <div id=viewTicketActions>
                    <div id=viewTicketReply>Reply</div>
                    <div id=viewTicketAssign>Assign</div>
                    <div id=viewTicketAccept>Accept</div>
                    <div id=viewTicketClose>Close</div>
                </div>
                <div id=viewTicketBodyMessages>
                    Messages will appear here.
                </div>
            </section>
        </main>
    </body>
</html>