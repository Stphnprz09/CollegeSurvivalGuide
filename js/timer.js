document.addEventListener('DOMContentLoaded', function () {
    const pomodoroChoice = document.getElementById('pomorodo');
    const shortChoice = document.getElementById('shortBreak');
    const longChoice = document.getElementById('longBreak');
    const time = document.getElementById('time');

    // query selector
    const background = document.querySelector('.pomodoro-container');
    const timer = document.querySelector('.timer');
    const button = document.querySelector('#button');

    // audio and button
    const startButton = document.getElementById('button');
    const audio = new Audio('../Images/click.mp3');

    // countdown 
    let countdown;
    let isPaused = false;
    let currentTime;

    // audio
    const audio1 = new Audio('../Images/click.mp3');
    const audio2 = new Audio('../Images/yamete.mp3');


    pomodoroChoice.addEventListener('click', function () {
        time.textContent = "25:00";
        background.style.background = 'linear-gradient(#AAD1E5, #e1f2fb)';
        timer.style.background = '#e1f2fb';
        button.style.background = '#A3D6EF';
    });

    shortChoice.addEventListener('click', function () {
        time.textContent = "10:00";
        background.style.background = 'linear-gradient(180.84deg, #EFDB75 0.7%, #FDFF9C 81.47%, rgba(255, 255, 255, 0.79) 100.28%, #FDE19B 100.28%)';
        timer.style.background = '#FEF5A8';
        button.style.background = '#FFEE52';
    });

    longChoice.addEventListener('click', function () {
        time.textContent = "15:00";
        background.style.background = 'linear-gradient(180.84deg, #CF75EF 0.7%, #F79CFF 81.47%, rgba(255, 255, 255, 0.79) 100.28%, #F59BFD 100.28%)';
        timer.style.background = '#F5BBFF';
        button.style.background = '#D766FF';
    });
    
    function startCountdown() {
        const timeParts = time.textContent.split(':');
        let minutes = parseInt(timeParts[0]);
        let seconds = parseInt(timeParts[1]);

        currentTime = minutes * 60 + seconds;

        countdown = setInterval(function () {
            if (!isPaused) {
                currentTime--;

                if (currentTime < 0) {
                    clearInterval(countdown);
                    audio2.play();
                    time.textContent = "00:00";
                    button.textContent = "Start";
                    isPaused = false;
                } else {
                    const newMinutes = Math.floor(currentTime / 60);
                    const newSeconds = currentTime % 60;

                    time.textContent = `${newMinutes}:${newSeconds < 10 ? '0' : ''}${newSeconds}`;
                }
            }
        }, 1000);
    }

    function resetCountdown(newTime) {
        clearInterval(countdown);
        isPaused = false;
        button.textContent = "Start";
        time.textContent = newTime;
    }

    button.addEventListener('click', function () {
        if (button.textContent === "Start") {
            button.textContent = "Pause";
            audio1.play();
            startCountdown();
        } else if (button.textContent == 'Pause') {
            button.textContent = 'Resume';
            isPaused = true;
        } else if (button.textContent == 'Resume') {
            button.textContent = 'Pause';
            audio1.play();
            isPaused = false;
            startButton();
        }
    });
    
    pomodoroChoice.addEventListener('click', function () {
        resetCountdown("25:00");
        background.style.background = 'linear-gradient(#AAD1E5, #e1f2fb)';
        timer.style.background = '#e1f2fb';
        button.style.background = '#A3D6EF';
    });

    shortChoice.addEventListener('click', function () {
        resetCountdown("10:00");
        background.style.background = 'linear-gradient(180.84deg, #EFDB75 0.7%, #FDFF9C 81.47%, rgba(255, 255, 255, 0.79) 100.28%, #FDE19B 100.28%)';
        timer.style.background = '#FEF5A8';
        button.style.background = '#FFEE52';
    });

    longChoice.addEventListener('click', function () {
        resetCountdown("15:00");
        background.style.background = 'linear-gradient(180.84deg, #CF75EF 0.7%, #F79CFF 81.47%, rgba(255, 255, 255, 0.79) 100.28%, #F59BFD 100.28%)';
        timer.style.background = '#F5BBFF';
        button.style.background = '#D766FF';
    });

});
