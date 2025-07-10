@vite('resources/js/app.js')
{{-- <script src="{{ asset('js/app.js') }}"></script> --}}
<script>
  const backBtn = document.getElementById('backToTop');
  window.addEventListener('scroll', () => {
    backBtn.style.display = window.scrollY > 300 ? 'block' : 'none';
  });
  backBtn.addEventListener('click', () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  });
</script>
