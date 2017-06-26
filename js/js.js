// <script type="text/javascript">
var heure=new Time()
document.write("Heure brute : ");
document.write(heure.getHours()+":"+heure.getMinutes()+":"+heure.getSeconds())
document.write("<BR>");
var h=heure.getHours();
if (h<10) {h = "0" + h}
var m=heure.getMinutes();
if (m<10) {m = "0" + m}
var s=heure.getSeconds();
if (s<10) {s = "0" + s}
document.write("Heure formatée : ");
document.write(h+":"+m+":"+s)
 </script>





/----------------------------------------------/

<script type="text/javascript">
  var t = new Date()
  document.write(t.getHours())
  document.write(":")
  document.write(t.getMinutes() + 1)
  document.write(":")
  document.write(t.getSeconds())
  document.write('s')
</script>
--------------------------------------------


<script type="text/javascript">
  var d = new Date()
  document.write(d.getDate())
  document.write(".")
  document.write(d.getMonth() + 1)
  document.write(".")
  document.write(d.getFullYear())
</script>
