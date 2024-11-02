<style>

    body {
        margin-inline: 10em;
    }

    a:link {
        color: #000000;
        text-decoration: none;  
    }

    a:visited {
        color: #828282;
    }
    
    nav a:visited {
        color: #000000;
    }

    .graytext {
        font-size: small;
        color: gray;
    }

    .triangle {
        background: none;
        border: 0;
        color: gray;
        cursor: pointer;
        /* font-size: small; */
        padding: 0;
        width: 1em;
        height: 1em;
        border-left: 0.5em solid transparent;
        border-right: 0.5em solid transparent;
        border-bottom: 1em solid gray;
    }

</style>

<nav style="background: #ff6600; padding:0.2em; display: flex; gap: 1em; justify-content: flex-end; margin-bottom:2em;">
    <span>🈸</span>
    <a href="/"><span style="font-weight: bold">Rater News</span></a>
    <a href="/enviar" style="margin-right: auto;">enviar</a>
    @auth
        <a href="/profile">{{ Auth::user()->name }}</a> |
        <form method=POST action="/logout" style="margin: 0">
            @csrf
            <a href="#" onclick="event.preventDefault(); this.closest('form').submit();">logout</a>
        </form>
    @else
        <a href="{{ route('login') }}">Log in</a>
        <a href="{{ route('register') }}">Register</a>
    @endauth
</nav>