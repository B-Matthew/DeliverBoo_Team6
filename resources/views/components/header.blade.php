<header>
     <ul>
          <li>
               <a href="{{route('infoWebPage')}}">
                    Chi siamo
               </a>
          </li>
     

     
          <li>
               <a href="{{route('faq')}}">
                    Faq
               </a>
          </li>
     

     
          <li>
               <a class="logo" href="{{route('homepage')}}">
                    DeliverBoo
               </a>
          </li>
     

     
          <li>
               @auth
                   <a href="{{ route('dashBoard') }}">{{Auth::user() -> name}}</a>
               <li>
                   <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
               </li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                    </form>
               @else
                   <a href="{{ route('login') }}">Login</a>

          </li>
     

     
          <li>
               <a href="{{ route('register') }}">
               Registrati
               @endauth
               </a>
          </li>
     </ul>
</header>
               

              

   