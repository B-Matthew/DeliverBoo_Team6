<header>

     <aside>
          <div>
               <a href="{{route('homepage')}}">Deliverboo</a>
          </div>
     </aside>

     <nav>
          <ul>
               <li>
                    <a href="">
                         Contatti
                    </a>
               </li>
          
               <li>
                    <a href="{{route('infoWebPage')}}">
                         Chi siamo
                    </a>
               </li>
          
               <li>
                    <a href="">
                         FAQ
                    </a>
               </li>

               <li>
                    @auth
                        <a href="{{ url('/') }}">{{Auth::user() -> name}}</a>
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
                    </a>
                    @endauth
               </li>
          </ul>
     </nav>

</header>