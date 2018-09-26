function hide(){
  var checkbox = document.getElementById("jemput");

  if(checkbox.checked == true)
  {
    document.getElementById("label_tgl_jemput").style.visibility ="visible";
    document.getElementById("tgl_jemput").style.visibility ="visible";
    document.getElementById("label_waktu_jemput").style.visibility ="visible";
    document.getElementById("waktu_jemput").style.visibility ="visible";
  }
  else {
    document.getElementById("label_tgl_jemput").style.visibility ="hidden";
    document.getElementById("tgl_jemput").style.visibility ="hidden";
    document.getElementById("label_waktu_jemput").style.visibility ="hidden";
    document.getElementById("waktu_jemput").style.visibility ="hidden";
  }
}

function warta()
{
  var mysql = require('mysql');

  var conn = mysql.createConnection({
    host: "localhost",
    user: "gkicikar_admin",
    pass: "admin1234"
  });

  con.connect(function(err){
    if(err) throw err;
    alert("Connected");
  });
}
