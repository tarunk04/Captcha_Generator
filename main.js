
document.getElementById('ae_captcha_api').innerHTML = "<div style='float: left ; height : 60px; width:60%; min-width: 170px;' id='divcaptcha'><img src='../Captcha_Generator/img_gen.php'></div><input class='fa fa-refresh'  type='button' onclick='newcaptcha()' value='New Captcha'></input><input class='in' type='text' name='captcha' id='captcha1'>";

function newcaptcha(){
  var dataString = 'index=1';
  var url = "../Captcha_Generator/captcha.php"
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
