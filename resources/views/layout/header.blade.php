<!-- Header -->
<header id="header">
	<div class="inner">
        <!-- Logo -->
        <h1><a href="index" id="logo">LIGHTEN</a></h1>
        <!-- Nav -->
        <nav id="nav">
            <ul>
            @if(Auth::check())
            <li><a style="color:'red'" class="current_page_item">hello {{ Auth::user()->name}}</a>
                <ul>
                <li><a href="#">mail</a></li>
                <li><a href="#">my info</a></li>
                <li><a href="report">我要檢舉</a></li>
                <li ><a href="logout">log out</a></li>
                </ul>              
            </li>
            
            @else
            <li class="current_page_item"><a href="login">log in</a>  
            </li>
            @endif
            <li><a href="all">綜合</a></li>
            <li><a href="current">時事</a></li>
            <li><a href="transport">交通</a></li>
            <li><a href="work">職場</a></li>
            <li><a href="animals">動物</a></li>
            <li><a href="school">校園</a></li>
            <li><a href="environment">環境</a></li>
            <li><a href="finance">財務</a></li>
            <li><a href="net">網路</a></li>
            <li><a href="speech">言論</a></li>
            </ul>
        </nav>
    </div>
</header>