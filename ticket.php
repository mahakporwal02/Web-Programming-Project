<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="ticketpg.css">
    <title>booktickets</title>
    <script>
        function validateForm() {

            let isFormVaild = false;
            // let emailID = document.querySelector("#emailID");
            // console.log('aaaaaaaaaa')
            // console.log(emailID);
            // let email = emailID.value;
            // if (email === "")
            //     alert("Enter the email ID please");
            // else {
            //     if (email.indexOf('@') == -1 || email.indexOf(' ') != -1)
            //         alert("Enter the valid email ID please");
            //     else
            //         isFormVaild = true;
            // }
            let contact = document.querySelector("#contact");
                if (contact.value.length === 10)
                    isFormVaild = true;
                else
                    alert("Enter a valid Mobile number");
            let submit = document.querySelector("#submit");
                if (isFormVaild) {
                    let proceed = confirm("Are you sure you want to submit?");
                    if (proceed)
                        location.replace("./index.php");
                } else {
                    alert("Please fill all the details");
                }
        }
    </script>
</head>

<body>

    <?php
    $conn = mysqli_connect("localhost", "root", "", "ticketinfo");
    if ($_POST) {
        $name = $_POST["customer_name"];
        $phone =  $_POST["phone_number"];
        $email = $_POST["email_address"];
        $method = $_POST["P_method"];
        $tickettype = $_POST["Ticket_type"];
        $ticketno = $_POST["ticketno"];
        $sql = "INSERT INTO name (UserName,Phone,Email,Payment,TicketType, TicketNo) VALUES ('$name', '$phone', '$email', '$method', '$tickettype', '$ticketno');";
        $result = mysqli_query($conn, $sql);
        // if ($result) {
        //     echo '<script>alert("Ticket is booked!!")</script>';
        // } else {
        //     echo '<script>alert("Ticket is not booked. Please Try again!!")</script>';
        // }
    }

    ?>
    <div class="page">
        <h1>Tickets to the Greatest Concert Ever!</h1>
        <h3>Get tickets today before it's too late!</h3>
    </div>

    <div class="column">
        <form class="myForm" action="./ticket.php" method="post" onsubmit="return validateForm()"> 
            <p>
                <label>Name
                    <input type="text" name="customer_name">
                </label>
            </p>

            <p>
                <label>Phone
                    <input id="contact" type="tel" name="phone_number">
                </label>
            </p>

            <p>
                <label>Email
                    <input id="emailID" type="email" name="email_address">
                </label>
            </p>

            <fieldset>
                <legend>Payment Method?</legend>
                <p><label class="choice"> <input type="radio" name="P_method" value="Credit/Debit card"> Credit/Debit card</label></p>
                <p><label class="choice"> <input type="radio" name="P_method" value="PayTm"> PayTm </label></p>
                <p><label class="choice"> <input type="radio" name="P_method" value="Net Banking"> Net Banking </label></p>
            </fieldset>
            <p>
                <label>Ticket type
                    <select id="Ticket_type" name="Ticket_type">
                        <option value="" selected="selected">Select</option>
                        <option value="Silver">Silver</option>
                        <option value="Golden">Golden</option>
                        <option value="Platinum">Platinum</option>
                    </select>
                </label>
            </p>

            <p>
                <label>Number of tickets
                    <input type="number" name="ticketno" list="tickets">
                </label>
            </p>
            <button id="submit" class="book">Submit Booking</button>

        </form>
    </div>
</body>

</html>