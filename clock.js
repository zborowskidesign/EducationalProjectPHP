function clock() {
    var canvas = document.getElementById("clock");
    var context = canvas.getContext("2d");
    var clockRadius = canvas.width/2 ;
    //drawing the main clock circle
    context.beginPath();
    context.arc(clockRadius,clockRadius,clockRadius,0, 2* Math.PI);
    
    //putting the main clockface colour
    context.fillStyle ="#034970";
    context.fill();
       
    //drawing the small clock circle
    context.fillStyle ="#034970";
    context.beginPath();
    context.arc(clockRadius,clockRadius,5,0, 2* Math.PI);
    //putting the small clockface colour
    context.fill();

    //putting in the time numbers
    context.font= clockRadius/10 + "px arial";
    context.fillStyle = "#7FDBFF";
    context.textAlign ="center";
    context.textBaseline = "middle";

    //putting in the numbers through calculated math circle is divided into 12 parts
    for(var i=1;i<=12;i++)
    {
        context.fillText(i , clockRadius + clockRadius * 0.9 * Math.sin(i*2*Math.PI /12), clockRadius - clockRadius * 0.9 * Math.cos(i*2*Math.PI /12));
    }

    //getting the time using date object
    var hours = new Date().getHours();
    var minutes = new Date().getMinutes();
    var seconds = new Date().getSeconds();

    var fullHours = hours % 12 + minutes/60 + seconds/3600 ;
    //getting the positioning og the clock hands right
    var hourAngle = fullHours * 2 * Math.PI /12 ;
    var minsAngle = minutes * 2 * Math.PI /60 ;
    var secAngle = seconds * 2 * Math.PI /60 ;
