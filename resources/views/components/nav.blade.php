<div>
    <nav class="navbar navbar-expand-lg navbar-custom fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('welcome') }}">Dr. Danny A. Akuffo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="{{ route('welcome') }}#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('welcome') }}#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('welcome') }}#book">Book</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('welcome') }}#events">Events</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('welcome') }}#contact">Contact</a></li>
                    <li class="nav-item"><a class="nav-link active" href="{{ route('purchase') }}">Purchase</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>