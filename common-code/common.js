function logout(){

    alert("Do you want to Logout ?");
}

function openNav() {
    document.getElementById("mySidenav").style.width = "300px";
  }
  
  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
  }


  function updateClock(){

    var now = new Date();
    var datetime = "LastSync: " + now.today() + " @ " + now.timeNow();
  }

  function initClock(){

    updateClock();
    window.setInterval("updateClock()",1);

  
  }
