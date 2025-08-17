<style>
    .outdoor-number{
        width: fit-content;
        display: grid;
        grid-template-columns: repeat(4, 1fr auto);
        justify-content: center;
        align-items: center;
        gap: 5px;
    }

    .colon{
        padding-top: 1em;
        display: flex;
        flex-flow: column nowrap;
        justify-content: center;
        align-items: center;
        gap: 18px;
    }
    .colon > div{
        width: 7px;
        height: 7px;

        border-radius: 100%;
        background-color: black;
    }
    
    .container-timer{
        width: 100%;
        display: flex;
        flex-flow: column nowrap;
        justify-content: center;
        align-items: center;
    }
    .container-timer > span{
        font-size: .8em;
    }

    .timer{
        position: relative;
        padding: 6px 8px;

        border-radius: 5px;

        background-color: black;
        font-size: 2em;
        font-weight: 600;
        color: white;
    }
    .timer::after{
        position: absolute;
        top: 50%;
        left: 0;
        content: "";

        width: 100%;
        height: 1px;
        background-color: black;
    }
</style>

<div class="outdoor-number">
    <div class="container-timer">
        <span>Dias</span>
        <div class="timer" id="days">0</div>
    </div>
    <div class="colon">
        <div></div>
        <div></div>
    </div>
    <div class="container-timer">
        <span>Horas</span>
        <div class="timer" id="hours">0</div>
    </div>
    <div class="colon">
        <div></div>
        <div></div>
    </div>
    <div class="container-timer">
        <span>Minutos</span>
        <div class="timer" id="minutes">0</div>
    </div>
    <div class="colon">
        <div></div>
        <div></div>
    </div>
    <div class="container-timer">
        <span>Segundos</span>
        <div class="timer" id="seconds">0</div>
    </div>
</div>

<script>
    const targetDate = {{ $targetTimestamp }};

    function updateCountdown() {
        const now = new Date().getTime();
        let distance = targetDate - now;

        if (distance < 0) distance = 0;

        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);

        const formatNumber = (number) => number < 10 ? "0" + number : number;

        document.getElementById("days").textContent = formatNumber(days);
        document.getElementById("hours").textContent = formatNumber(hours);
        document.getElementById("minutes").textContent = formatNumber(minutes);
        document.getElementById("seconds").textContent = formatNumber(seconds);
    }

    updateCountdown();
    setInterval(updateCountdown, 1000);
</script>


