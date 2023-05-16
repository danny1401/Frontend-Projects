<html>
<head>
<script>
function storagetest(){ 
if (typeof(Storage) !== "undefined") {
    // Her kan du ha kode for localStorage/sessionStorage.
    document.write("Støtte for localStorage og sessionStorage");
} else {
    // Her skriver du en melding om at browser er uten støtte for lokal lagring.
    document.write ("Det er ikke støtte for localStorage og sessionStorage");
}
}
</script>
</head>
<body onload="storagetest()";>
</body>
</html>