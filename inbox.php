<html>
<link rel="stylesheet" type="text/css" href="StyleEE.css">
<script type="text/javascript" src="EE.js"></script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
<link rel="stylesheet" href="style.css">

<head>
    <title>Yes, I love Electrical. Do I?</title>
</head>

<body>

    <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand text-primary font-weight-bold" href="#"><img src="img/logo.png" height="70" width="180"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="First.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="inbox.php">Inbox</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Issue.php">Feedback</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Signout.php">Signout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="overlay-content">
        <div style="color: red; font-size: 25px; margin-bottom: 50px;">Messages:</div>
        <?php
        $selectmsg = "SELECT Username FROM prjct_ln_data";

        $resultmsg = mysqli_query($connect, $selectmsg);

        $datamsg = mysqli_fetch_all($resultmsg, MYSQLI_ASSOC);


        foreach ($datamsg as $infomsg) {


            $tablenamemsg = 'user_' . $infomsg['Username'];



            $credentialsmsg = "SELECT User, Message FROM `$tablenamemsg`";


            $creditmsg = mysqli_query($connect, $credentialsmsg);

            $displaynamemsg = mysqli_fetch_all($creditmsg, MYSQLI_ASSOC);



            foreach ($displaynamemsg as $msg) {
                if ($infomsg['Username'] === $username) {
        ?>
                    <li class="messages"> <?php echo $msg['Message']; ?></li>
                <?php } ?>
            <?php } ?>
        <?php } ?>
        <button class="buttonspan" id="signout" onclick="location.href='Signout.php'">Signout</button>
        <br>
        <br>
        <button class="buttonspan" onclick="window.location.href = 'Issue.php';">Having an issue?</button>
    </div>
    </div>
    </div>
    <div class="overlay-content">
        <div style="color: red; font-size: 25px; margin-bottom: 50px;">Messages:</div>
        <?php
        $selectmsg = "SELECT Username FROM prjct_ln_data";

        $resultmsg = mysqli_query($connect, $selectmsg);

        $datamsg = mysqli_fetch_all($resultmsg, MYSQLI_ASSOC);


        foreach ($datamsg as $infomsg) {


            $tablenamemsg = 'user_' . $infomsg['Username'];



            $credentialsmsg = "SELECT User, Message FROM `$tablenamemsg`";


            $creditmsg = mysqli_query($connect, $credentialsmsg);

            $displaynamemsg = mysqli_fetch_all($creditmsg, MYSQLI_ASSOC);



            foreach ($displaynamemsg as $msg) {
                if ($infomsg['Username'] === $username) {
        ?>
                    <li class="messages"> <?php echo $msg['Message']; ?></li>
                <?php } ?>
            <?php } ?>
        <?php } ?>
        <button class="buttonspan" id="signout" onclick="location.href='Signout.php'">Signout</button>
        <button class="buttonspan" onclick="window.location.href = 'Issue.php';">Having an issue?</button>
    </div>
    </div>
    </div>



</body>

</html>