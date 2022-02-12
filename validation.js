function validate() {
                var username = document.myForm.Username.value;
                var email = document.myForm.email.value;
                var password = document.myForm.password.value;
                var password_2 = document.myForm.password_2.value;
                if (username == null || username == ""||email == null || email == ""||password == null ||password== ""||password_2 == null || password_2 == "") {
                    alert("Please enter all the requirements.");
                    return false;
                }
                //alert('BRAVOOOOOOOO');
                
            } 



    function validate_login() {
                    //var username = document.myForm.Username.value;
                    var email = document.myForm.email.value;
                    var password = document.myForm.password.value;
                    //var password_2 = document.myForm.password_2.value;
                    if (email == null || email == ""||password == null ||password== "") {
                        alert("Please enter all the requirements.");
                        return false;
                    }
                    //alert('BRAVOOOOOOOO');
                    
                } 

        