

window.onload = function() {
    const toggle = document.getElementById('toggle');
    const slideBlock = document.getElementsByClassName('slide-block')[0];
  
    
    toggle.addEventListener('change', function(e) {
      if(e.target.checked) {
        slideBlock.className = slideBlock.className.replace('slide-out', 'slide-in');

        let navElements = document.querySelectorAll("a");
        let log_out = document.querySelector(".log-out");

        for (i = 0; i < navElements.length; ++i) {
            navElements[i].style.color = "white";
        }
        log_out.style.color = "white"
        
       
     
      } else {
        slideBlock.className = slideBlock.className.replace('slide-in', 'slide-out');

        let navElements = document.querySelectorAll("a");
        let log_out = document.querySelector(".log-out");

        for (i = 0; i < navElements.length; ++i) {
            navElements[i].style.color = "black";
        }
        log_out.style.color = "royalblue"
       
      }
    });
  };


  
  