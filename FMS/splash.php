<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Splash Screen</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Full-screen video background for splash screen */
        .splash-screen {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: black;
            opacity: 1;
            transition: opacity 1s ease-out;
            z-index: 9999;
        }

        .splash-screen.fade-out {
            opacity: 0;
        }

        .splash-screen video {
            width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <div class="splash-screen" id="splashScreen">
        <video id="splashVideo" autoplay muted>
            <source src="railway.mp4" type="video/mp4">
            <source src="path/to/your/video.webm" type="video/webm">
            <source src="path/to/your/video.ogv" type="video/ogg">
            Your browser does not support the video tag.
        </video>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var splashScreen = document.getElementById('splashScreen');
            var splashVideo = document.getElementById('splashVideo');

            console.log('Video duration:', splashVideo.duration);

            splashVideo.onended = function() {
                console.log('Video ended');
                splashScreen.classList.add('fade-out');
                setTimeout(function() {
                    window.location.href = 'index2.php';
                }, 1000);
            };

            // Fallback in case the video does not end (e.g., user skips it)
            setTimeout(function() {
                console.log('Fallback triggered');
                splashScreen.classList.add('fade-out');
                setTimeout(function() {
                    window.location.href = 'index2.php';
                }, 1000);
            }, (splashVideo.duration * 1000) || 5000); 
        });
    </script>
</body>
</html>
