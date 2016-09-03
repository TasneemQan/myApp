function getFunction1(){

  var a = document.getElementById('aVal').value;
  var b = document.getElementById('bVal').value;
  var c = document.getElementById('cVal').value;

  http = null;

  if(window.XMLHttpRequest){
    http = new XMLHttpRequest();
  }else{
    http = new ActiveXObject("Microsoft.XMLHTTP");
  }

http.onreadystatechange = function() {

    if(http.readyState == 4 && http.status == 200){

      var jsonObj = JSON.parse(http.responseText);
      showResult(jsonObj, 'result1');

    }
}

  var link = "http://127.0.0.1/homework/APIs/get-api.php?aVal="+a+"&bVal="+b+"&cVal="+c;
  http.open("GET",link, true);
  http.send();

}


function getFunction2(){
  var a = document.getElementById('aVal_').value;
  var b = document.getElementById('bVal_').value;
  var c = document.getElementById('cVal_').value;


  http = null;

  if(window.XMLHttpRequest){
    http = new XMLHttpRequest();
  }else{
    http = new ActiveXObject("Microsoft.XMLHTTP");
  }


http.onreadystatechange = function() {

    if(http.readyState == 4 && http.status == 200){

      var jsonObj = JSON.parse(http.responseText);
      showResult(jsonObj, 'result2');
    }
}
  var link = "http://127.0.0.1/homework/APIs/post-api.php";
  http.open("POST",link, true);
  http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  http.send("aVal="+a+"&bVal="+b+"&cVal="+c);

}
function showResult(Obj, tag){

  if(Obj.status == 1){

      var sol = JSON.parse(Obj.result);
      // alert(sol.s1 + ' , ' + sol.s2);
      if(sol.s1 == -1 && sol.s2 == -1){
         document.getElementById(tag).innerHTML = "Equation is unsolvable .";
      }else{
        if(sol.s1 == sol.s2){
           document.getElementById(tag).innerHTML = "There is one solution : " + sol.s1;
        }else{
           document.getElementById(tag).innerHTML = "There is two different solutions <p>s1 : "  + sol.s1+" </p>"+
                "<p>s2 : " + sol.s2 + "</p>" ;
        }
      }

  }else{
    document.getElementById(tag).innerHTML = (Obj.msg);
  }
}
