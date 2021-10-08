
function genarate(){

    var adult = parseInt(document.getElementById("adult").value);
    var child = parseInt(document.getElementById("child").value);
    var meal = document.getElementById("meal").value;
    var package = document.getElementById("package").value;

    var normaladult= parseInt(document.getElementById("price-board").rows[2].cells.item(1).innerHTML);
    var normalchild= parseInt(document.getElementById("price-board").rows[2].cells.item(2).innerHTML);
    var normalmeal= parseInt(document.getElementById("price-board").rows[2].cells.item(3).innerHTML);

    var normaladult10= parseInt(document.getElementById("price-board").rows[3].cells.item(1).innerHTML);
    var normalchild10= parseInt(document.getElementById("price-board").rows[3].cells.item(2).innerHTML);
    var normalmeal10= parseInt(document.getElementById("price-board").rows[3].cells.item(3).innerHTML);

    var normaladult20= parseInt(document.getElementById("price-board").rows[4].cells.item(1).innerHTML);
    var normalchild20= parseInt(document.getElementById("price-board").rows[4].cells.item(2).innerHTML);
    var normalmeal20= parseInt(document.getElementById("price-board").rows[4].cells.item(3).innerHTML);

    var normaladult30= parseInt(document.getElementById("price-board").rows[5].cells.item(1).innerHTML);
    var normalchild30= parseInt(document.getElementById("price-board").rows[5].cells.item(2).innerHTML);
    var normalmeal30= parseInt(document.getElementById("price-board").rows[5].cells.item(3).innerHTML);


    if (package == "normal"){
      
      

    if(isNaN(adult) || adult==0){

    
    
         alert("your form Adult section is empty. Please Fill it & try again");
         document.getElementById("ad").innerHTML ="";
         document.getElementById("ad-cost").value = "";
         document.getElementById("chi-pass-co").innerHTML = "";
         document.getElementById("chi-cost").value = "";
         document.getElementById("pass-meal-co").innerHTML = "";
        document.getElementById("meal-cost").value = "";
        document.getElementById("tot-pass-cost").innerHTML = "";
        document.getElementById("total-cost").value= "";


         return false;
         

    }
    if(adult != ""){

        var adcost = adult * normaladult +".00" ;
        var text = "Adult Passanges"+"("+adult+"*"+normaladult+")";
        
        document.getElementById("ad").innerHTML = text;
        document.getElementById("ad-cost").value = adcost;

    }
    if(isNaN(child) || child == 0){

        child = 0;
        document.getElementById("chi-pass-co").innerHTML = "";
        document.getElementById("chi-cost").value = "";


    }
    if(child != ""){

        var childcost = child * normalchild +".00" ;
        var text = "Child Passanges"+"("+child+"*"+normalchild+")";
        
        document.getElementById("chi-pass-co").innerHTML = text;
        document.getElementById("chi-cost").value = childcost;


    }
    if(meal == "Yes"){

        var all = adult+child;

        var mealcost = all * normalmeal+".00" ;
        var text = "Meals Charges"+"("+all+"*"+normalmeal+")";
        
        document.getElementById("pass-meal-co").innerHTML = text;
        document.getElementById("meal-cost").value = mealcost;

        var total = (adult*normaladult)+(child*normalchild)+(all*normalmeal) +".00";
        var text = "Total Charge";
    
    
        document.getElementById("tot-pass-cost").innerHTML = text;
        document.getElementById("total-cost").value = total ;

    

    }if(meal != "Yes" ){

        document.getElementById("pass-meal-co").innerHTML = "";
        document.getElementById("meal-cost").value = "";

        var total = (adult*normaladult)+(child*normalchild)+".00";
        var text = "Total Charge";
    
    
        document.getElementById("tot-pass-cost").innerHTML = text;
        document.getElementById("total-cost").value = total ;



    }

  }


if (package == "10up"){
      
      

  if(isNaN(adult) || adult==0){

  
  
       alert("your form Adult section is empty. Please Fill it & try again");
       document.getElementById("ad").innerHTML ="";
       document.getElementById("ad-cost").value = "";
       document.getElementById("chi-pass-co").innerHTML = "";
       document.getElementById("chi-cost").value = "";
       document.getElementById("pass-meal-co").innerHTML = "";
      document.getElementById("meal-cost").value = "";
      document.getElementById("tot-pass-cost").innerHTML = "";
      document.getElementById("total-cost").value= "";


       return false;
       

  }
  if(adult != ""){

      var adcost = adult * normaladult10 +".00" ;
      var text = "Adult Passanges"+"("+adult+"*"+normaladult10+")";
      
      document.getElementById("ad").innerHTML = text;
      document.getElementById("ad-cost").value = adcost;

  }
  if(isNaN(child) || child == 0){

      child = 0;
      document.getElementById("chi-pass-co").innerHTML = "";
      document.getElementById("chi-cost").value = "";


  }
  if(child != ""){

      var childcost = child * normalchild10 +".00" ;
      var text = "Child Passanges"+"("+child+"*"+normalchild10+")";
      
      document.getElementById("chi-pass-co").innerHTML = text;
      document.getElementById("chi-cost").value = childcost;


  }
  if(meal == "Yes"){

      var all = adult+child;

      var mealcost = all * normalmeal10+".00" ;
      var text = "Meals Charges"+"("+all+"*"+normalmeal10+")";
      
      document.getElementById("pass-meal-co").innerHTML = text;
      document.getElementById("meal-cost").value = mealcost;

      var total = (adult*normaladult10)+(child*normalchild10)+(all*normalmeal10) +".00";
      var text = "Total Charge";
  
  
      document.getElementById("tot-pass-cost").innerHTML = text;
      document.getElementById("total-cost").value = total ;

  

  }if(meal != "Yes" ){

      document.getElementById("pass-meal-co").innerHTML = "";
      document.getElementById("meal-cost").value = "";

      var total = (adult*normaladult10)+(child*normalchild10)+".00";
      var text = "Total Charge";
  
  
      document.getElementById("tot-pass-cost").innerHTML = text;
      document.getElementById("total-cost").value = total ;



  }

}


if (package == "20up"){
      
      

  if(isNaN(adult) || adult==0){

  
  
       alert("your form Adult section is empty. Please Fill it & try again");
       document.getElementById("ad").innerHTML ="";
       document.getElementById("ad-cost").value = "";
       document.getElementById("chi-pass-co").innerHTML = "";
       document.getElementById("chi-cost").value = "";
       document.getElementById("pass-meal-co").innerHTML = "";
      document.getElementById("meal-cost").value = "";
      document.getElementById("tot-pass-cost").innerHTML = "";
      document.getElementById("total-cost").value= "";


       return false;
       

  }
  if(adult != ""){

      var adcost = adult * normaladult20 +".00" ;
      var text = "Adult Passanges"+"("+adult+"*"+normaladult20+")";
      
      document.getElementById("ad").innerHTML = text;
      document.getElementById("ad-cost").value = adcost;

  }
  if(isNaN(child) || child == 0){

      child = 0;
      document.getElementById("chi-pass-co").innerHTML = "";
      document.getElementById("chi-cost").value = "";


  }
  if(child != ""){

      var childcost = child * normalchild20 +".00" ;
      var text = "Child Passanges"+"("+child+"*"+normalchild20+")";
      
      document.getElementById("chi-pass-co").innerHTML = text;
      document.getElementById("chi-cost").value = childcost;


  }
  if(meal == "Yes"){

      var all = adult+child;

      var mealcost = all * normalmeal20+".00" ;
      var text = "Meals Charges"+"("+all+"*"+normalmeal20+")";
      
      document.getElementById("pass-meal-co").innerHTML = text;
      document.getElementById("meal-cost").value = mealcost;

      var total = (adult*normaladult20)+(child*normalchild20)+(all*normalmeal20) +".00";
      var text = "Total Charge";
  
  
      document.getElementById("tot-pass-cost").innerHTML = text;
      document.getElementById("total-cost").value = total ;

  

  }if(meal != "Yes" ){

      document.getElementById("pass-meal-co").innerHTML = "";
      document.getElementById("meal-cost").value = "";

      var total = (adult*normaladult20)+(child*normalchild20)+".00";
      var text = "Total Charge";
  
  
      document.getElementById("tot-pass-cost").innerHTML = text;
      document.getElementById("total-cost").value = total ;



  }

}

if (package == "30up"){
      
      

  if(isNaN(adult) || adult==0){

  
  
       alert("your form Adult section is empty. Please Fill it & try again");
       document.getElementById("ad").innerHTML ="";
       document.getElementById("ad-cost").value = "";
       document.getElementById("chi-pass-co").innerHTML = "";
       document.getElementById("chi-cost").value = "";
       document.getElementById("pass-meal-co").innerHTML = "";
      document.getElementById("meal-cost").value = "";
      document.getElementById("tot-pass-cost").innerHTML = "";
      document.getElementById("total-cost").value= "";


       return false;
       

  }
  if(adult != ""){

      var adcost = adult * normaladult30 +".00" ;
      var text = "Adult Passanges"+"("+adult+"*"+normaladult30+")";
      
      document.getElementById("ad").innerHTML = text;
      document.getElementById("ad-cost").value = adcost;

  }
  if(isNaN(child) || child == 0){

      child = 0;
      document.getElementById("chi-pass-co").innerHTML = "";
      document.getElementById("chi-cost").value = "";


  }
  if(child != ""){

      var childcost = child * normalchild30 +".00" ;
      var text = "Child Passanges"+"("+child+"*"+normalchild30+")";
      
      document.getElementById("chi-pass-co").innerHTML = text;
      document.getElementById("chi-cost").value = childcost;


  }
  if(meal == "Yes"){

      var all = adult+child;

      var mealcost = all * normalmeal30+".00" ;
      var text = "Meals Charges"+"("+all+"*"+normalmeal30+")";
      
      document.getElementById("pass-meal-co").innerHTML = text;
      document.getElementById("meal-cost").value = mealcost;

      var total = (adult*normaladult30)+(child*normalchild30)+(all*normalmeal30) +".00";
      var text = "Total Charge";
  
  
      document.getElementById("tot-pass-cost").innerHTML = text;
      document.getElementById("total-cost").value = total ;

  

  }if(meal != "Yes" ){

      document.getElementById("pass-meal-co").innerHTML = "";
      document.getElementById("meal-cost").value = "";

      var total = (adult*normaladult30)+(child*normalchild30)+".00";
      var text = "Total Charge";
  
  
      document.getElementById("tot-pass-cost").innerHTML = text;
      document.getElementById("total-cost").value = total ;



  }

}


}



    function Clean(){

      document.getElementById("ad").innerHTML ="";
      document.getElementById("ad-cost").value = "";
      document.getElementById("chi-pass-co").innerHTML = "";
      document.getElementById("chi-cost").value = "";
      document.getElementById("pass-meal-co").innerHTML = "";
     document.getElementById("meal-cost").value = "";
     document.getElementById("tot-pass-cost").innerHTML = "";
     document.getElementById("total-cost").value= "";
    }

    function openNav() {
        document.getElementById("mySidenav").style.width = "350px";
      }
      
      function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
      }
    
      function search(){

        
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("searchbox");
        filter = input.value.toUpperCase();
        table = document.getElementById("Bill-table");
        tr = table.getElementsByTagName("tr");


      
        for (i = 0; i < tr.length; i++) {
          td = tr[i].getElementsByTagName("td")[1];
          if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
              tr[i].style.display = "";
            } else {
              tr[i].style.display = "none";
            }
          }
        }
      }
      
      
  function updateClock(){

    var now = new Date();
    var dname = now.getDay();
    var mo = now.getMonth();
    var dnum = now.getDate();
    var year = now.getFullYear();
    var hour = now.getHours();
    var min  = now.getMinutes();
    var sec = now.getSeconds();
    var pe = "AM";

    if(hour == 0){

      hour = 12;
    }
    if(hour>12){

      hour = hour -12;
      pe="PM";
    }

    Number.prototype.pad= function(digits){

      for(var n =this.toString(); n.length <digits; n=0+n);
      return n;
    }

    
    var months = ["January", "February", "March", "April", "May", "June",
                 "July", "August", "September", "October", "November", "December"];

    var weekday = ['Sunday', 'Monday', 'Tuesday', 'Wednesday',
                   'Thursday', 'Friday', 'Saturday'];

    var ids =["dayname", "month", "daynum", "year"];

    var idstime = ["hour","min","sec","period"];

    var values = [weekday[dname] , months[mo], dnum, year];

    var valuestime = [hour.pad(2),min.pad(2),sec.pad(2),pe];


    for(var i=0; i< ids.length; i++)
    document.getElementById(ids[i]).innerHTML=values[i];

    
    for(var i=0; i< idstime.length; i++)
    document.getElementById(idstime[i]).innerHTML=valuestime[i];

    

    
  }

  function initClocks(){

    updateClock();
    window.setInterval("updateClock()", 1);
  }

      

