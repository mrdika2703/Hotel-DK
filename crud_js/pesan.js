$(function(){	
	/* Add Data Kategori dengan Admin */
    $("#konfirmasi").on('click', function(){
     var nama    = $("#nama").val();
     var nik    = $("#nik").val();
     var email   = $("#email").val();   
     var hp      = $("#hp").val();
     var tamu    = $("#tamu").val();
     var masuk   = document.getElementById("masuk");
     var checkin = masuk.value;
     var keluar  = document.getElementById("keluar");
     var checkout= keluar.value;
     var idkamar = $("#idkamar").val();
     var jkamar  = $("#jkamar").val();
     var payments  = $("#payments").val();
	 //alert(description);
	 if ( (nama=="") || (nik=="") || (email=="") || (hp=="") || (tamu=="") || (idkamar=="") || (jkamar=="") || (payments=="") || (masuk="") || (keluar=""))
	 {
        alert("Terjadi kesalahan. Ada data yang kosong!");
        return;
	 }
	 
     $.ajax({
     url: "proses/pesan.php",
     method: "POST",
     data:{
		   nama:nama, 
           nik:nik, 
		   email:email,
           hp:hp,
           tamu:tamu,
           checkin:checkin,
           checkout:checkout,
           idkamar:idkamar,
           jkamar: jkamar,
           payments: payments
	      },
     success: function(data)
      {
        //alert(data);
        if (data=="OK") 
         {
             alert("Pesan TERKIRIM!");
             document.getElementById("form_pesan").reset();
             window.location.href="bukti_pesan.php?id="+ idkamar + "&nama="+ tamu + "&nk="+ nik + "&tm="+ checkin + "&tk=" 
             +checkout+ "&jk="+jkamar + "&py="+payments + "&email="+email ;
		     } 
        if (data=="ERROR") 
         {
            alert("Pesan TIDAK terkirim!")
	       }
	  }
	  
      });  
    });
	
  });