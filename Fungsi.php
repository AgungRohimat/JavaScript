<!DOCTYPE html>
<html>
<body>
<div id="data"></div>
<script>
// function kalikanAngka(angka1, angka2)
// {
//     return angka1*angka2;
// }
// document . write(kalikanAngka(5, 20));

fungsiMobil();
function fungsiMobil()
{
    var namaMobil = "Avanza";
    document.getElementById('data').innerHTML='Pemanggilan di dalam fungsi '+namaMobil;
}
    document.getElementById('data2').innerHTML='Pemanggilan di luar fungsi '+namaMobil;

</script>
</body>
</html>
