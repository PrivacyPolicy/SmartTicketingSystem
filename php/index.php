<!DOCTYPE html>
<html lang=en>
    <?php include 'query.php'; ?>
    <head>
        <meta charset=utf-8>
        <title>SmartTicket - Submit a Ticket</title>

        <link rel=stylesheet href=../css/materialize.min.css>
        <link rel=stylesheet href=../css/custom.css>

        <script src=../js/jquery.min.js></script>
        <script src=../js/materialize.min.js></script>
        <script src=../js/view_tickets.js></script>
    </head>
    <body><nav>
        </nav>
        <nav class="links">

        </nav>

        <main>
            <div class="row">
                <div class="col s10 offset-s1 main">
                    <section id=ticketsTable>
                        <h4>Submit a Ticket</h4>
                        <h6>
                            Fill out the form below or email
                            <a href="mailto:newticket@SmartTicket.com"
                               target=_blank>
                                newticket@SmartTicket.com
                            </a> to submit a ticket.
                        </h6>
                        <form id=ticketForm method=post action=index.php>
                            <input name=fName placeholder="First Name">
                            <input name=lName placeholder="Last Name">
                            <input name=subject placeholder="Subject">
                            <input name=email placeholder="Email">
                            <input name=subject placeholder="Subject">
                            <div id=textAreaBorder>
                                <textarea name=body id=body
                                          class=materialize-textarea
                                          ></textarea>
                            </div>
                            <br><br>
                            <label for=file>
                                <a id=fileLink
                                   class="waves-effect waves-light btn">
                                    Attach a file
                                </a>
                            </label>
                            <input type=file name=fileUpload id=file>
                            <a id=formSubmit
                               class="waves-effect waves-light btn"
                               href="">
                                Submit
                            </a>
                        </form>
                        <br>
                    </section>
                </div>
            </div>
        </main>
    </body>
</html>