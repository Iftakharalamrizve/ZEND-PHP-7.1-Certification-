
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
   <div class="container">
    <div class="row">
		<div class="col-md-4 offset-md-4">
			<form method="post" action='file-handle.php'>
                <div id="contact-form" class="form-container" data-form-container>
                    <div class="row">
                        <div class="form-title">
                            <span>Contact Us</span>
                        </div>
                    </div>
                    <div class="input-container">
                        <div class="row">
                            <span class="req-input" >
                                <span class="input-status" data-toggle="tooltip" data-placement="top" title="Input Your First and Last Name."> </span>
                                <input type="text" data-min-length="8" placeholder="Full Name" name="name">
                            </span>
                        </div>
                        <div class="row">
                            <span class="req-input">
                                <span class="input-status" data-toggle="tooltip" data-placement="top" title="Please Input Your Email."> </span>
                                <input type="email" placeholder="Email"  name="email">
                            </span>
                        </div>
                        <div class="row">
                            <span class="req-input">
                                <span class="input-status" data-toggle="tooltip" data-placement="top" title="Please Input Your Phone Number."> </span>
                                <input type="tel" placeholder="Phone Number"  name="number">
                            </span>
                        </div>
                        <div class="row">
                            <span class="req-input message-box">
                                <span class="input-status" data-toggle="tooltip" data-placement="top" title="Please Include a Message."> </span>
                                <textarea type="textarea" data-min-length="10" placeholder="Message" name="message"></textarea>
                        </div>
                        <div class="row submit-row">
                            <button type="submit" class="btn btn-block submit-form">Submit</button>
                        </div>
                    </div>
                </div>
			</form>
		</div>
    </div>
</body>
</html>