# Robot_Arm_ControlPanel
 this repository containes the 1st task of the summer internship (Smart solutions "IOT path" - 2021).
 

we were assigned a task in which allows us to control the angels of the robot's arm.
We first needed a user-friendly interface which was done using (HTML, CSS, JS). The interface shows 6 motors each is represented by a slider.
The angles range from 0 to 180 therefore I specified the min and max in the HTML (file-index.php). I also had to display the value of the slider simultaneously with what the user is entering. I did that through JS (file-javascript.js) with a help of one of my mates in the IoT path.
I styled the interface with CSS (file-css.css)

Moving on to the database, which was created in PHPMyAdmin through XAMP. This has been one hell of a ride! since I have never done anything like that through my CS program.
For the values of the angles to be stored we had to create a database, with one table and 7 columns, 6 of which for the 6 motors values and 1 for the ID of the robot (Primary key, Auto increment). the file (motorval.sql).

The last part is the PHP code to connect the DB and the interface (file-submit.php), as mentioned previously, this is my first time doing it and this video has helped me immensely (Don't forget to practice on your own projects to grasp the concept!)
 https://www.youtube.com/watch?v=HrRAaePsX6U
 
 
 
