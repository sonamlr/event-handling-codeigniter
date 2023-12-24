<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Management</title>
    <!-- Add these links to your <head> section -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" />
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input, textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        #events-container {
            margin-top: 30px;
        }

        .event {
            border: 1px solid #ddd;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 4px;
        }
        .heading{
            text-align:center;
        }
    </style>
</head>
<body>
        <h1 class="heading">Event Management</h1>
        <?php if ($this->session->flashdata('message')): ?>
    <div style="color:green; text-align:center;">
        <?php echo $this->session->flashdata('message'); ?>
    </div>
<?php endif; ?>

    <?php echo form_open("Event/addEvent");?>
        <div>
            <label for="eventTitle">Event Title:</label>
            <input type="text" id="eventTitle" name="title" required>
            <?php echo form_error('field name', '<div class="error">', '</div>'); ?>
         </div>
        <div>
            <label for="eventDate">Event Date:</label>
            <input type="date" id="eventDate"  name="date" required>
            <?php echo form_error('field name', '<div class="error">', '</div>'); ?>
         </div> 
         <div>
            <label for="eventDate">Event Time:</label>
            <input type="text" id="eventDate" placeholder="hh:mm AM/PM"   name="time" required>
            <?php echo form_error('field name', '<div class="error">', '</div>'); ?>
         </div>
        <div>
            <label for="eventLocation">Event Location:</label>
            <input type="text" id="eventLocation"  name="location" required>
            <?php echo form_error('field name', '<div class="error">', '</div>'); ?>
        </div>
        <div>
            <label for="eventDescription">Event Description:</label>
            <textarea id="eventDescription"  name="description" rows="4" required></textarea>
            <?php echo form_error('field name', '<div class="error">', '</div>'); ?>
        </div>
        <div>

        <div>
        <button type="submit">Add Event</button>
     
        </div>
    </form>

</body>
</html>
