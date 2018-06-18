function sendToPHP(){
    var userCredentials = {
        username: document.getElementById("username").value,
        email: document.getElementById("email").value,
        password: document.getElementById("password").value
    }
    
    $.post( "getAndSaveData.php", userCredentials,function(data){
            $("#myDiv").html(data);
        }
    );    
};