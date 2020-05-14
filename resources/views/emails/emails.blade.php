<!-- this is the email body the things you have to send will be written here -->
<!-- <p> {{ $data['name']  }}</p>
<p> {{ $data['message']  }}</p> -->
<!-- <p> send from deekshith.karka@gmail.com</p> -->
<!-- <p>It would be appriciatable if you go through this feedback</p>  --><!-- this one is the defaolt which will be sent from the company mail addreas -->

<h1>Hlooo Good morning/afternoon/evening</h1>
 <p style="color:red;">My name is  {{ Auth::user()->name }}, i have reviewed your paper you have the following mistakes please go through the message </p>
 
<p style="color:purple;">dear conference member{{ $data['name'] }}</p>
<p style="color:blue;">this message is delivered from deekshith.karka@gmail.com</p>
<p style="color:red;">{{ $data['message']}} </p>
<p style="color:blue;">You have some errors in your thesis so please rectifie your mistakes and send it back through the following king given
you should upload your thesis before Date:25th May 2020</p>
<p>TO send the file again click the link below </p>
<p></p>
<p>http://127.0.0.1:8000/reupload</p>


<!-- 
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <script type="text/javascript" src="js/qrcode.js">
</script>
    <script type="text/javascript" src="js/html5-qrcode.js">
</script>
    <style type="text/css" media="screen">
      body { text-align:center; }
    </style>
  </head>
  <body>
    <form name="QRform" id="QRform">
      <textarea name="textField" rows="8" cols="70" onkeyup='updateQRCode(this.value)' onclick="this.focus();this.select();">I am {{ $data['name'] }}</textarea>
    </form>
 -->    
    <!-- This is where our QRCode will appear in. -->
<!--     <div id="qrcode"></div>
    
    <script type="text/javascript">
      function updateQRCode(text) {

        var element = document.getElementById("qrcode");

        var bodyElement = document.body;
        if(element.lastChild)
          element.replaceChild(showQRCode(text), element.lastChild);
        else
          element.appendChild(showQRCode(text));

      }

      updateQRCode('hloooo');

    </script>
  </body>
</html>



 -->