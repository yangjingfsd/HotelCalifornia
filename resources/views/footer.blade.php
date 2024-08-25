
@if(isset($_COOKIE['logname']))

<script>
(function() {
    document.getElementById('loginbtn').style.display = 'none';
    document.getElementById('loginavatar').style.display = 'initial';
})();
</script>

@else

<script>
(function() {
    document.getElementById('loginbtn').style.display = 'block';
    document.getElementById('loginavatar').style.display = 'none';
})();
</script>

@endif

<footer class="bg-black text-center text-lg-start">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2024 Copyright:
    <a class="text-body" href="{{ url('/') }}">HotelCA.com</a>
  </div>
  <!-- Copyright -->
</footer>

