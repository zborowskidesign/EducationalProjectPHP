const boxVideos = document.querySelector('.container_video_html');
const htmlFilm = document.querySelector('.html_video');
const cssFilm = document.querySelector('.css_video');
const jsFilm = document.querySelector('.js_video');
const reactFilm = document.querySelector('.react_video');
const videoInformation = document.querySelector('.information_film');

htmlFilm.addEventListener('click',function(){
    boxVideos.style.display = "flex";
    videoInformation.style.display = 'none';
})

cssFilm.addEventListener('click',function(){
    boxVideos.style.display = "none";
    videoInformation.style.display = 'block';
    videoInformation.textContent = "Brak filmów CSS";
})

jsFilm.addEventListener('click',function(){
    boxVideos.style.display = "none";
    videoInformation.style.display = 'block';
    videoInformation.textContent = "Brak filmów JS"
})

reactFilm.addEventListener('click',function(){
    boxVideos.style.display = "none";
    videoInformation.style.display = 'block';
    videoInformation.textContent = "Brak filmów React"
})