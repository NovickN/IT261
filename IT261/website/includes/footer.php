<footer>
     <div id="inner-footer">
     <ul>
       <li>Copyright &copy;
       <?php echo date('Y'); ?>
      </li>
       <li>All Rights Reserved</li>
       <li><a href="../index.php">Web Design by Nicholas</a></li>
       <li><a id="html-checker" href="#">HTML Validation</a></li>
       <li><a id="css-checker" href="#">CSS Validation</a></li>
       <li><a href="https://github.com/NovickN/IT261">Github</a></li>

     </ul>
</div>  <!--end inner footer-->
 </footer>

    <script>
        document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);
        document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?uri=" + location.href);
    </script>
    </body>
    </html>