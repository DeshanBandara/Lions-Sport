<?php include('./navbar.php') ?>

    <div>
        <p id="pid">This is just for testing</p>
        <script>
            document.getElementById('pid').onclick = function(){
                alert('Clicked the paragraph');
            }
        </script>
    </div>
    
<?php include('./footer.php') ?>
