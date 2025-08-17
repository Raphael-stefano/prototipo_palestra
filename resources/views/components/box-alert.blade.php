<style>
    @keyframes hidden {
        0%{
            opacity: 1;
            display: block;
        }
        90%{
            opacity: 1;
            display: block;
        }
        100%{
            opacity: 0;
            display: none;
        }
    }

    @keyframes timerBar {
        0%{
            width: 100%;
        }
        100%{
            width: 0;
        }
    }

    .box-alert{
        position: fixed;
        top: 10px;
        left: 50%;
        width: 100%;
        max-width: 300px;

        overflow: hidden;

        background-color: #ffd4d4ff;
        border-radius: 8px;
        box-shadow: 0 0 5px #0000003d;

        transform: translate(-50%);
        animation: hidden 15s forwards;
    }
    
    .content{
        padding: 10px;

        font-size: 1rem;
        color: #ff0000ff;
        text-align: center;
    }

    .timer-bar{
        width: 100%;
        height: 5px;

        background-color: #ff0000ff;
        
        animation: timerBar 15s forwards;
    }
</style>

<div class="box-alert">
    <div class="content">{{ $slot }}</div>
    <div class="timer-bar"></div>
</div>