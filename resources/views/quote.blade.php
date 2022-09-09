<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Quotes</title>

</head>

<body>
    <div class="mt-3 space-y-1">
        <!-- Authentication -->
        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                {{ __('Log Out') }}
            </x-responsive-nav-link>
        </form>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card p-3 my-3">
                    <div class="card-title">
                        <h3>Quotes:</h3>
                        <hr>
                        <a href=" {{route('quotes')}}" class="btn btn-primary btn-sm float-right py-2">Refresh</a>
                    </div>
                    @for($i = 0; $i<=4; $i++) <div class="card-body border-top">
                        <p>quote: {{$data[rand ( 0 , count($data) -1)]}}</p>
                        <em class="text-secondary italic float-right">-kanye west</em>
                </div>
                @endfor

            </div>
        </div>

        <div class="col">
            <div class="card p-3 my-3" style="min-height:720px;">
                <div class="card-title">
                    <button class="btn btn-success btn-sm py-2" onclick="allQuotes()">See Quotes</button>
                </div>
                <div class="card-body">
                    <div id="show" style="display: none;">
                        <h6>All Quotes:</h6>
                        <ul>
                            @foreach($data as $item)
                            <li>
                                {{$item}}
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script>
        function allQuotes() {
            var x = document.getElementById("show");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }
    </script>
</body>

</html>