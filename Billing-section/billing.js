
function genarate(){

    var adult = parseInt(document.getElementById("adult").value);
    var child = parseInt(document.getElementById("child").value);
    var meal = document.getElementById("meal").value;
    var package = document.getElementById("package").value;

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

        var adcost = adult * 500 +".00" ;
        var text = "Adult Passanges"+"("+adult+"*"+"500"+")";
        
        document.getElementById("ad").innerHTML = text;
        document.getElementById("ad-cost").value = adcost;

    }
    if(isNaN(child) || child == 0){

        child = 0;
        document.getElementById("chi-pass-co").innerHTML = "";
        document.getElementById("chi-cost").value = "";


    }
    if(child != ""){

        var childcost = child * 250 +".00" ;
        var text = "Child Passanges"+"("+child+"*"+"250"+")";
        
        document.getElementById("chi-pass-co").innerHTML = text;
        document.getElementById("chi-cost").value = childcost;


    }
    if(meal == "Yes"){

        var all = adult+child;

        var mealcost = all * 300+".00" ;
        var text = "Meals Charges"+"("+all+"*"+"300"+")";
        
        document.getElementById("pass-meal-co").innerHTML = text;
        document.getElementById("meal-cost").value = mealcost;

        var total = (adult*500)+(child*250)+(all*300) +".00";
        var text = "Total Charge";
    
    
        document.getElementById("tot-pass-cost").innerHTML = text;
        document.getElementById("total-cost").value = total ;

    

    }if(meal != "Yes" ){

        document.getElementById("pass-meal-co").innerHTML = "";
        document.getElementById("meal-cost").value = "";

        var total = (adult*500)+(child*250)+".00";
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
      

      

