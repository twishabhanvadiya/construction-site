<html>
<head>
<script type="text/javascript">
function show_prompt()
{
var name=prompt("Please enter your name");
if (name!=null && name!="")
{
document.write("Hello " + name + "! How are you today?");
}}
</script>
</head>
<body>
<input type="button" onclick="show_prompt()" value="Show prompt box" />
</body>
</html>