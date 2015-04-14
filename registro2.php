<!doctype>
<html>
<head>
<title>SocietyRock</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/js.js"></script>
<script type="text/javascript" src="js/npm.js"></script>
	
</head>
<body>
<?php include ("header.php") ;?>

<div class="container">
  <form class="well span8">
        <div class="row">
            <div class="span3">
                <label>First Name</label> <input class="span3" placeholder=
                "Your First Name" type="text"> <label>Last Name</label>
                <input class="span3" placeholder="Your Last Name" type="text">
                <label>Email Address</label> <input class="span3" placeholder=
                "Your email address" type="text"> <label>Subject</label>
                <select class="span3" id="subject" name="subject">
                    <option selected value="na">
                        Choose One:
                    </option>
    
                    <option value="service">
                        General Customer Service
                    </option>
    
                    <option value="suggestions">
                        Suggestions
                    </option>
    
                    <option value="product">
                        Product Support
                    </option>
                </select>
            </div>
    
            <div class="span5">
                <label>Message</label> 
                <textarea class="input-xlarge span5" id="message" name="message"
                rows="10">
    </textarea>
            </div><button class="btn btn-primary pull-right" type=
            "submit">Send</button>
        </div>
    </form>
</div>

</body>
</html>