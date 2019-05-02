<!DOCTYPE html>
<html>
<head>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
</head>
<body>
<button onclick="JSalert()">Show a prompt alert</button>

<script type="text/javascript">
function JSalert(){
	swal({   title: "Require Email!",   
    text: "Enter your email address:",   
    type: "input",   
    showCancelButton: true,   
    closeOnConfirm: false,   
    animation: "slide-from-top",   
    inputPlaceholder: "Your Email address" }, 
    
    function(inputValue){   
        if (inputValue === false) 
        return false;      
           if (inputValue === "") {     
            swal.showInputError("Please enter email!");     
            return false   
            }      
         swal("Action Saved!", "You entered following email: " + inputValue, "success"); });
}
</script>
</body>
</html> 