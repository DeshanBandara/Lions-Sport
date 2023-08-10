<?php include('./navbar.php') ?>

    <div>
        <p id="pid">This is just for testing</p>
        <script>
            $(document).ready(function(){
                $('#pid').click(function(){
                    alert('Clicked the paragraph!');
                });
            });
            
        </script>
    </div>
    
<?php include('./footer.php') ?>
