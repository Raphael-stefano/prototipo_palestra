<style>
    .card {
        width: 220px;
        height: 290px;
        padding: 15px 10px;

        background-color: white;
        border-radius: 10px;
        box-shadow: 0 0 10px #4E4EF64D;

        display: flex;
        flex-flow: column nowrap;
        align-items: center;
        gap: 35px;

        text-align: center;
    }
    .card-header{
        display: flex;
        flex-flow: column nowrap;
        align-items: center;
        gap: 8px;
    }
    .card .icon{
        width: fit-content;
        height: fit-content;
        padding: 20px 22.5px;
        
        display: block;

        background-color: #9753b3;
        border-radius: 100%;
        font-size: 2em;
        color: white;
    }
    .card h4 {
        line-height: 1.7rem;
        font-size: 1.15rem;
        color: black;
    }
    .card p {
        line-height: 1.4rem;
        padding: 0 20px;
    }
</style>

<div class="card">
    <div class="card-header">
        <i class="bi {{ $icon }} icon"></i>
        <h4>{{ $title }}</h4>
    </div>
    <p>{{ $description }}</p>
</div>