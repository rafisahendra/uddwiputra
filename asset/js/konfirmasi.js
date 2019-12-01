

var url = "http://localhost/uddwiputra/pages/json/";

function cek_no_order() {
  var id_js = document.getElementById("noorder").value;
  var json_url = url+"/tampil-order.php?id_js="+id_js;

  var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() 
{
    if (this.readyState == 4 && this.status == 200) 
    {
       // Typical action to be performed when the document is ready:
       var myArr = JSON.parse(this.responseText);


        if (myArr.length == 0) 
         {
         
            
         }
         else{

          for(i = 0; i < myArr.length; i++) 
          {
          	alert("NO Order : "+myArr[i][0].idorder+"\n"+"Nama : "+myArr[i][0].namaorder+"\n"+"Status : "+myArr[i][0].status  );
            document.getElementById("namaorder").innerHTML=": " +myArr[i][0].namaorder;
            document.getElementById("tglorder").innerHTML=": " +myArr[i][0].tglorder;
            document.getElementById("status_ord").innerHTML=": " +myArr[i][0].status;
            document.getElementById("totalbelanja").innerHTML=": " +myArr[i][0].totalbelanja;transaksi_id 
            document.getElementById("transaksi_id").value=myArr[i][0].idorder;
          }

         }
    }
  };
  
  xhttp.open("GET", json_url, true);
  xhttp.send();
}

