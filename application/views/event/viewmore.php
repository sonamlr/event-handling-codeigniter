<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event | Event Management</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link  href="<?php echo base_url();?>assets/style/style.css"  rel="stylesheet">

</head>
<body>
    <header>
        <div>
            <h1 style="color:#fff;">Test Site</h1>
        </div>
    </header>
    
    <main>
        <h1>Event Details </h1>
        <section>
            <div class="container">
                <div class="left">
                    <h3 style="font-size:18px;"><?php echo $title;?></h3>
                    <p class="location"><?php echo $location;?></p>
                    <p class="description"><?php echo $description;?></p>
                    <p></p>
                    <p class="time" ><i class="fa fa-clock" aria-hidden="true">&nbsp; &nbsp;</i>10:00</p>
                </div>
                <div class="right">
                    <p><?php echo $date;?></p>
                </div>
                
            </div>
        </section> 
    </main>
</body>
</html>


