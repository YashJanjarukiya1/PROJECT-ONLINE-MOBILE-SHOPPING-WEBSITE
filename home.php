<?php
include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="CSS/home.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        .ad{
            /*background-color: aliceblue;*/
            height: 90%;
            padding-top: 5px;
            border-radius: 10px;
            display: flex;
            justify-content: center;
        }
        .container {
            display: flex;
            /*border: 1px solid black;
            background-color: #def3c9;
            border-radius: 20px;*/
            margin-left: 10px;
            margin-right: 10px;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: space-between;
            padding: 10px;
        }

        /* Box Style */
        .box {
            background-color: #fff;
            /*width: calc(10% - 20px); /* Three boxes per row with some spacing */
            /*padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);*/
            text-align: center;
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }

        .box:hover {
            transform: translateY(-5px);
        }

        /* Box Content */
        .box p {
            margin: 10px 0;
            font-size: 14px;
            color: #555;
        }
        .box a{
            text-decoration: none;
        }
        .box p strong {
            color: #333;
        }
        
		body {
			font-style: bold;
		}

		h1{
			
			text-shadow: 2px 2px;
			text-transform: uppercase;
                        color: #4CAF50;
			 
		}

		h4{
			color:light blue;
			text-shadow: 2px 2px 5px pink;
			background-image:;
		}
		h2,h3{
		       text-decoration: underline;
		       font-style: bold;
        }

        h1 {
            margin: 20px 0;
            font-size: 28px;
            color: #333;
        }

        /* Image Grid Container */
        .image-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); /* Responsive grid */
            gap: 20px;
            padding: 20px;
            max-width: 1000px;
            margin: auto;
        }

        /* Image Styling */
        .image-container img {
            width: 100%;
            height: auto;
            border-radius: 10px;
            transition: transform 0.3s ease-in-out;
        }

        /* Hover Effect */
        .image-container img:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        /* Responsive Design */
        @media (max-width: 600px) {
            .image-container {
                grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            }
        }
        .chatbot {
    position: fixed;
    bottom: 20px;
    right: 20px;
    width: 300px;
    background: white;
    border: 1px solid #ccc;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0,0,0,0.2);
    font-family: Arial, sans-serif;
    z-index: 1000;
}

.chatbot-header {
    background: #4CAF50;
    color: white;
    padding: 10px;
    font-weight: bold;
    text-align: center;
}

.chatbot-body {
    height: 250px;
    overflow-y: auto;
    padding: 10px;
    background: #f9f9f9;
}

.chatbot-body div {
    margin-bottom: 10px;
    font-size: 14px;
}

#chatbot-form {
    display: flex;
    border-top: 1px solid #ddd;
    padding: 10px;
}

#user-input {
    flex: 1;
    padding: 8px;
    border-radius: 4px;
    border: 1px solid #ccc;
}

#chatbot-form button {
    padding: 8px 12px;
    margin-left: 5px;
    background: #4CAF50;
    color: white;
    border: none;
    border-radius: 4px;
}

    </style>
</head>
<body>
    
    <div class="container">
        <?php
            $sql = "SELECT * FROM `category` ";
            $result = $conn->query($sql);
            
            // Check if there are any records
            if ($result->num_rows > 0) {
                // Output the data in boxes
                while($row = $result->fetch_assoc()) {
                    echo "<div class='box'>";
                    echo"<a href='header.php?q=4&com=".$row['b_name']."'>";
                    echo"<img src='".$row['img']."' height='50px' width='50px'></img>";
                    echo "<p>". $row['b_name'] ."</p>";
                    echo "</a></div>";
                }
            } else {
                echo "0 results";
            }
        ?>
    </div>
    <hr>
    <!--<marquee behavior="left" direction="left"><img src="logo/mi.png" height='50px' width='50px'><img></marquee>-->
    <div class="ad">
    
        <div class="adv"></div>
        
    </div>
	<h1 align="center">WELCOME TO MOBILE WORLD PLUS</h1>
	<br><br>

	<h4>A mobile website homepage serves as the first impression of an online business, providing quick access to key information. It typically features a clean design, responsive layout, and intuitive navigation for seamless browsing on smartphones.</h4>
	<br>
	<h2 align="center">Service Categories</h2>
	<br>
	
	<h4>A mobile service website is a user-friendly online platform designed to provide information, support, and booking options for various services. These websites are optimized for smartphones, ensuring seamless navigation and quick access to essential details. Typically, a mobile service website includes a homepage with a clear introduction, a services section outlining different offerings, and a contact page for inquiries or appointments. It may also feature a booking system, and customer reviews to enhance user experience. With a responsive design, fast loading speed, and intuitive interface, a mobile service website helps businesses connect with customers efficiently, allowing them to explore services, request quotes, or make instant bookings anytime, anywhere.</h4> <br><br>
    
    <div class="image-container">
        <img src="CSS/p1.png">
        <img src="CSS/p2.png">
        <img src="CSS/p3.png">
       
    </div>
    <footer>
        <div class="footer-container">
            <div class="about-us">
                <h2>About Us</h2>
                <p>At Mobile World, we provide innovative mobile solutions that keep you connected and ahead of the curve.</p>
                <p>Our passion is delivering quality products and exceptional experiences to meet all your mobile needs.</p>
            </div>
            <div class="contact-info">
                <h3>Contact Us</h3>
                <p>Email: mobileworld@gmail.com</p>
                <p>Phone: (123) 456-7890</p>
                <p>Instagram:Mobileworldplus_Official</p>
            </div>
        </div>
    </footer>
    
    <!-- Live Chatbox -->
<div class="chatbot" id="chatbot">
    <div class="chatbot-header">Ask Us Anything!</div>
    <div class="chatbot-body" id="chatbot-body"></div>
    <form id="chatbot-form">
        <input type="text" id="user-input" placeholder="Type your question..." required>
        <button type="submit">Send</button>
    </form>
</div>

<script>
document.getElementById('chatbot-form').addEventListener('submit', function(e) {
    e.preventDefault();
    const userInput = document.getElementById('user-input').value;
    if (userInput.trim() === '') return;

    const chatBody = document.getElementById('chatbot-body');
    chatBody.innerHTML += `<div><strong>You:</strong> ${userInput}</div>`;

    fetch('chatbot.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: 'message=' + encodeURIComponent(userInput)
    })
    .then(response => response.text())
    .then(reply => {
        chatBody.innerHTML += `<div><strong>Bot:</strong> ${reply}</div>`;
        document.getElementById('user-input').value = '';
        chatBody.scrollTop = chatBody.scrollHeight;
    });
});
</script>

</body>
</html>
