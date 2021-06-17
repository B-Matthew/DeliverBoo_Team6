<header>

     <aside>
          <div>
               <a href="">Deliverboo</a>
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
                    <a href="">
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