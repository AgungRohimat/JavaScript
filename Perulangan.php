<!DOCTYPE html>
<html>
<body>
<div id="data"></div>
<script>
var text="";
for (var i = 0; i < 5; i++)
{
text +="Nilai saat ini " + i + "<br>";
document.getElementById("data").innerHTML = text;
}

</script>
</body>
</html>


<!DOCTYPE html>
<html>
<body>
<div id="data"></div>
<script>
var j=0;
while(j<5)
{
    console.log("While: Nilai saat ini "+j);
    j++;
}
var k=0;
do
{
    console.log("Do While: Nilai saat ini "+k);
    k++;
}
while(k<5)
</script>
</body>
</html>
