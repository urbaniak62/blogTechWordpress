  <footer>
            <div class="heure">
              <script type="text/javascript">
                var t = new Date()
                document.write(t.getHours())
                document.write(":")
                document.write(t.getMinutes() + 1)
                document.write(":")
                document.write(t.getSeconds())
                document.write('s')
              </script>
            </div>

            <div id="date">
              <script type="text/javascript">
              var d = new Date()
              var j=d.getDate();
              document.write(".")
              var m=d.getMonth() + 1;
              document.write(".")
              var a=d.getFullYear();
              </script>



            </div>



              <div class="resaux">
                <ul>

                  <li><a href="#"><img src="<?php echo esc_url (get_template_directory_uri() );
                  ?>/img/twiter.png" alt="twiter"></a></li>
                  <li><a href="#"><img src="<?php echo esc_url (get_template_directory_uri() );?>/img/index.png" alt="facebook"></a></li>
                  <li><a href="#"><img src="<?php echo esc_url (get_template_directory_uri() );?>/img/google+.png" alt="google+"></a></li>
                  <li><a href="#"><img src="<?php echo esc_url (get_template_directory_uri() );?>/img/instagram.jpeg" alt="instagram"></a></li>
                  <li><a href="#"><img src="<?php echo esc_url (get_template_directory_uri() );?>/img/linkedin.png" alt="linkedin"></a></li>
                </ul>
              </div>

        </footer>

        <script src="js/main.js"></script>
    </body>
</html>
