  function populate_mytable(){ 
    //ajax now
    $.ajax ({
      type: "POST",
      url: "serverside/populate_mytable.php",
      dataType: 'json',      
      cache: false,
      success: function(x)
      {
        mytable.fnClearTable();        
        for(var i = 0; i < x.length; i++) 
        { 
          mytable.fnAddData
          ([
						x[i][0],x[i][1],x[i][2],     
          ]); 
        }       
      }  
    }); 
    //ajax end  
  } //.load cat_table

  populate_mytable();
