document.addEventListener("DOMContentLoaded", function() {
    const videos = document.querySelectorAll('.video');
    const videoPopup = document.getElementById('video-popup');
    const closePopup = document.querySelector('.close');
    const youtubeVideo = document.getElementById('youtube-video');

    videos.forEach(video => {
        const videoUrl = video.getAttribute('data-video-url');
        const videoId = getYouTubeID(videoUrl);
        const thumbnailUrl = `https://img.youtube.com/vi/${videoId}/maxresdefault.jpg`;

        // Update thumbnail image src attribute
        const thumbnailImage = video.querySelector('img');
        thumbnailImage.src = thumbnailUrl;

        video.addEventListener('click', function() {
            youtubeVideo.src = `https://www.youtube.com/embed/${videoId}?autoplay=1`;
            videoPopup.style.display = 'block';
        });
    });

    closePopup.addEventListener('click', function() {
        youtubeVideo.src = '';
        videoPopup.style.display = 'none';
    });

    window.addEventListener('click', function(event) {
        if (event.target === videoPopup) {
            youtubeVideo.src = '';
            videoPopup.style.display = 'none';
        }
    });

    function getYouTubeID(url) {
        const regExp = /^.*(youtu\.be\/|v\/|u\/\w\/|embed\/|watch\?v=|\&v=)([^#\&\?]*).*/;
        const match = url.match(regExp);
        if (match && match[2].length === 11) {
            return match[2];
        } else {
            return 'error';
        }
    }
});