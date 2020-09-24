

window.onload = function() {
    const toggle = document.getElementById('toggle');
    const slideBlock = document.getElementsByClassName('slide-block')[0];
  
    
    toggle.addEventListener('change', function(e) {
      if(e.target.checked) {
        slideBlock.className = slideBlock.className.replace('slide-out', 'slide-in');

        let navElements = document.querySelectorAll("a");
        let pElement = document.querySelector(".welcome_user_text");
        let log_out = document.querySelector(".log-out");
        let videoInformation = document.querySelector(".information_film");
        let videoText = document.querySelector(".video_content");
        let indicators = document.querySelectorAll(".index");

        for (i = 0; i < navElements.length; ++i) {
            navElements[i].style.color = "white";
        }

        
        for (i = 0; i < indicators.length; ++i) {
          indicators[i].style.color = "white";
      }

        pElement.style.color = "white";
        log_out.style.color = "royalblue";
        videoInformation.style.color = "white";
        videoText.style.color = "white";
        
       
     
      } else {
        slideBlock.className = slideBlock.className.replace('slide-in', 'slide-out');

        let navElements = document.querySelectorAll("a");
        let pElement = document.querySelector(".welcome_user_text");
        let videoInformation = document.querySelector('.information_film');
        let log_out = document.querySelector(".log-out");
        let videoText = document.querySelector(".video_content");
        let indicators = document.querySelectorAll(".index");

        for (i = 0; i < navElements.length; ++i) {
            navElements[i].style.color = "black";
        }

        for (i = 0; i < indicators.length; ++i) {
          indicators[i].style.color = "black";
      }

        log_out.style.color = "royalblue"
        pElement.style.color = "black";
        videoInformation.style.color = "black";
        videoText.style.color = "black";
       
      }
    });
  };


  
  