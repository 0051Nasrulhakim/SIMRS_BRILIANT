</div>
        </div>
        
    </body>
    <!-- buat jam digital -->
    <script>
        window.setTimeout("waktu()", 1000);
     
        function waktu() {
            var waktu = new Date();
            setTimeout("waktu()", 1000);
            document.getElementById("jam").innerHTML = waktu.getHours() + ":" + waktu.getMinutes() + ":" + waktu.getSeconds();
        }
    </script>

    
</html>