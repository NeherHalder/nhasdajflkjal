<div style="float:right; padding-right:20px; padding-top:3px">
  <script language="JavaScript">

    var clockID = 0;
    function UpdateClock()
    {
     if(clockID) 
     {
      clearTimeout(clockID);
      clockID  = 0;
     }
     var tDate = new Date();
     document.theClock.theTime.value = "" 
                                     + tDate.getHours() + ":" 
                                     + tDate.getMinutes() + ":" 
                                     + tDate.getSeconds();
     clockID = setTimeout("UpdateClock()", 1000);
    }

    function StartClock() 
    {
      clockID = setTimeout("UpdateClock()", 500);
    }

    function KillClock()
    {
      if(clockID)
      {
        clearTimeout(clockID);
        clockID  = 0;
      }
    }
  </script>

  <form name="theClock">
     <input type=text name="theTime" size=6 style="text-align: center; background-color:#97c9ad; border:none">
  </form>
</div>