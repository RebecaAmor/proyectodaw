<footer class="footer">
  <div class="container-fluid">
    <nav class="float-left">
      <ul>
        <li>
          <a href="{{ route('users.contact') }}">
              {{ __('Contacto') }}
          </a>
        </li>
        <li>
          <a href="{{ route('users.gym') }}">
              {{ __('El centro') }}
          </a>
        </li>
        <!-- <li>
          <a href="http://blog.creative-tim.com">
              {{ __('Blog') }}
          </a>
        </li>
        <li>
          <a href="https://www.creative-tim.com/license">
              {{ __('Licenses') }}
          </a>
        </li> -->
      </ul>
    </nav>
    <div class="copyright float-right">
      &copy;
      <script>
        document.write(new Date().getFullYear())
      </script>, made with <i class="material-icons">favorite</i> by Rebeca Amor.
    </div>
  </div>
</footer>