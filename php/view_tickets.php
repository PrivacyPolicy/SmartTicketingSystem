<!DOCTYPE html>
<html lang=en>
    <?php include 'query.php'; ?>
    <head>
        <meta charset=utf-8>
        <title>SmartTicket - View Tickets</title>

        <link rel=stylesheet href=../css/materialize.min.css>
        <link rel=stylesheet href=../css/custom.css>

        <script src=../js/jquery.min.js></script>
        <script src=../js/materialize.min.js></script>
        <script src=../js/view_tickets.js></script>
    </head>
    <body>

        <nav>
        </nav>
        <nav class="links">

        </nav>

        <main>
            <div class="row">
                <div class="col s10 offset-s1">
                    <section id=ticketsTable>
                        <table class="striped">
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
                                $array = query("SELECT * FROM tickets");
                                if (empty($array)) {
                                    echo "
                        <tr id=-1 class=\"ticket noresults\">
                            <td>No tickets found</td>
                        </tr>";
                                } else {
                                    foreach ($array as $ticket) {
                                        echo "
                        <tr id={$ticket[0]} class=ticket>
                            <td class=\"ticketNum\">
                                {$ticket[0]}
                            </td>
                            <td class=\"subject\">
                                {$ticket[1]}
                            </td>
                            <td class=\"client\">
                                {$ticket[2]}
                            </td>
                            <td class=\"priority\">
                                {$ticket[4]}
                            </td>
                            <td class=\"assignee\">
                                {$ticket[3]}
                            </td>
                        </tr>";
                                    }
                                }
                                echo "\n";
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
                </div>
            </div>
        </main>
    </body>
</html>