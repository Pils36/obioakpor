</body>
<!--
    Clock Set
-->
<script>
        function digitized(){
            var dt = new Date();
            var hrs = dt.getHours();
            var min = dt.getMinutes();
            var sec = dt.getSeconds();

            min = Ticking(min);
            sec = Ticking(sec);

            document.getElementById('dc').innerHTML = hrs + ":" + min;
            document.getElementById('dc-second').innerHTML = sec;

            if(hrs > 12){
                document.getElementById('dc-hour').innerHTML ='PM';
            }
            else{
                document.getElementById('dc-hour').innerHTML = 'AM';
            }

            //Call function every 1 sec
            var time;
            time = setInterval('digitized()', 1000);
        }
        function Ticking(ticVal){
                if(ticVal < 10){
                    ticVal = "0" + ticVal;
                }
                return ticVal;
            }
    </script>
</html>