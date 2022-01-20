alert("hi");
function loadDoc2() {
    
   var str

   fetch('TOARAB.php')
           .then(function(response){
               return response.json ();
           })
           .then(function (index){
              str = index; 
            
 
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
        //readytate : 
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("container").innerHTML =
                    str;
        }
    };
    xhttp.open("GET", "ajax_info.html", true);
    xhttp.send();
           })
       
}

function loadDoc3() {
    
   var str

   fetch('TOENG.php')
           .then(function(response){
               return response.json ();
           })
           .then(function (index){
              str = index; 
         
 
        var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        //readytate : 
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("container").innerHTML =
                    str;
        }
    };
    xhttp.open("GET", "ajax_info.html", true);
    xhttp.send();
           })
       }
 

