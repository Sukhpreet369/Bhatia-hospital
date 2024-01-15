$(document).ready(function(){

$("#saveslide").click(function(){
   
    console.log(filename)
})

$('#submitForm').on("click",function(e)   { 	 
   
    e.preventDefault();		
    console.log("Hello");
       
    var formdata=new FormData();
    /*var stitle=;
    var scontent=
    var btntxt=;
    
    var btnurl=;
    
    var filename=$("#slideimg").val();   
    */
    formdata.append('stitle',$("#stitle").val())
    formdata.append('scontent',$("#scontent").val())
    formdata.append('btnurl',$("#btnurl").val())
    formdata.append('btntxt',$("#buttontxt").val())
    formdata.append('formFile',$('#slideimg')[0].files[0])
        
        $('#msg').html('Uploading File....');
        $.ajax({
           url:"upload.php",
           type:"POST",
           data:formdata,
           contentType:false,
           processData:false,
           success:function(data){showdata();
           msg=`<div class='alert alert-success mt-3'>${data}</div>`;
             $('#msg').html(msg);
              
             
            //alert(data);
           } 
 
         }
       );
      
     }) 	

})