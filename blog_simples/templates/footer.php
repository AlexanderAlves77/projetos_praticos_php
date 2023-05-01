<footer>
  <p>Blog PHP Copyright &copy; <span id="year"></span> </p>
</footer>
</body>
</html>

<script>
  let year = document.getElementById("year")
  year.innerHTML = new Date().getFullYear()
</script>