<!DOCTYPE html>
<html lang="en">

<head>
</head>
<body>
<div id="hello">
  <input type="button" id="flavio" onclick="andre('hello')">
  teste
</div>


<div id="hello1">
  <input type="button" id="flavio1" onclick="andre('hello1')">
  teste
</div>

<div id="hello2">
  <input type="button" id="flavio2" onclick="andre('hello2')">
  teste
</div>
</body>
</html>


<script type="text/javascript">
function andre(el){
  document.getElementById(el).style.display = "none";
  document.getElementById(el).style.top = "100%";
}
</script>
