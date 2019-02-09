
document.getElementById('ae_captcha_api').innerHTML = "<div style='float: left ; height : 60px; width:200px; min-width: 170px;' id='divcaptcha'><img src='./captcha-generator/img_gen.php'></div>";

function newcaptcha(){
  var dataString = 'index=1';
  var url = "./captcha-generator/captcha.php"
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      html = this.responseText;
      if (html!=1){
        document.getElementById('divcaptcha').innerHTML = html;
      }
    }
  };
  xhttp.open("POST", url, true);
  xhttp.send();
}
