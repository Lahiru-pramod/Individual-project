function openNav() {
    document.getElementById("mySidenav").style.width = "350px";
  }
  
  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
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

  function initClock(){

    updateClock();
    window.setInterval("updateClock()", 1);
  }

  