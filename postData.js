function sendToPHP(){
    var userCredentials = {
        username: document.getElementById("username").value,
        email: document.getElementById("email").value,
        password: document.getElementById("password").value
    }

    //JQUERY example for post request - params(file, data, callback)
    $.post( "getAndSaveData.php", userCredentials,function(data){
            $("#myDiv").html(data);
        }
    );    
};