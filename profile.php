<!DOCTYPE html>
<html>
<head>
    <title>G3 Team Profiles</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            overflow-x: hidden;
        }
        header {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px;
        }
        nav {
            background-color: #444;
            color: white;
            display: flex;
            justify-content: center;
            padding: 10px 0;
        }
        nav a {
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            transition: background-color 0.3s;
        }
        nav a:hover {
            background-color: #555;
        }
        main {
            display: flex;
            justify-content: flex-start;
            padding: 20px;
        }
        .profiles-wrapper {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            max-width: 1000px;
            position: relative;
        }
        .profile-container {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            margin-left: 100px;
            margin-bottom: 20px;
            position: relative;
        }
        .profile-card {
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 200px;
            padding: 15px;
            text-align: center;
            cursor: pointer;
            transition: transform 0.3s, box-shadow 0.3s;
            z-index: 1;
        }
        .profile-card img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 5px;
            transition: transform 0.3s;
        }
        .profile-card:hover {
            transform: scale(1.05);
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        }
        .profile-card:hover img {
            transform: scale(1.1);
        }
        .profile-details {
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 900px;
            padding: 10px;
            position: absolute;
            left: 0;
            transform: translateX(-100%) translateY(10px);
            transition: transform 0.5s ease;
            z-index: 0;
            margin-top: 0px;
            display: none;
        }
        .profile-details img {
            width: 300px;
            height: 230px;
            float: left;
        }
        .profile-details p {
            margin-left: 315px;
            margin-top: 75px;
        }
        .contacts-link {
            display: block;
            margin-top: 10px;
            color: #007bff;
            cursor: pointer;
            text-decoration: none;
            font-weight: bold;
        }
        .contacts-link:hover {
            text-decoration: underline;
        }
        .profile-concealer {
            position: absolute;
            top: 0px;
            left: -20px;
            z-index: 1;
            background-color: #f4f4f4;
            width: 100%;
            height: 900px;
        }
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px;
        }
        #chart {
            position: relative;
            top: 15%;
            left: 5%;
            width: 65%;
            height: 100%;
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 15px;
            text-align: center;
            cursor: pointer;
            z-index: -1;
        }
        #search {
            position: absolute;
            top: 80%;
            left: 28%;
            width: 63%;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            z-index: 0;
        }
        .agendas img {
            width: 100%;
            height: 100%;
            border-radius: 5px;
            margin-bottom: 5px;
            transition: transform 0.3s;
        }
        .blur {
            background-color: rgba(0, 0, 0, 0.05);
            backdrop-filter: blur(5px);
            display: none;
            z-index: 0;
        }
        #blur-left {
            position: fixed;
            top: 0;
            left: 0;
            width: 25%;
            height: 100%;
            z-index: 1;
        }
        #blur-right {
            position: fixed;
            top: 0px;
            left: 25%;
            width: 75%;
            height: 100%;
            z-index: 0;
        }
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(5px);
            align-items: center;
            justify-content: center;
        }
        .modal-content {
            background-color: #fff;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            width: 50%;
            max-width: 600px;
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }
        .modal-header {
            border-bottom: 1px solid #ddd;
            padding-bottom: 10px;
            margin-bottom: 20px;
            width: 100%;
            position: relative;
        }
        .modal-close {
            color: #888;
            font-size: 24px;
            font-weight: bold;
            cursor: pointer;
            position: absolute;
            top: 10px;
            right: 10px;
        }
        .modal-close:hover,
        .modal-close:focus {
            color: #000;
            text-decoration: none;
        }
        .modal-title {
            font-size: 24px;
            font-weight: bold;
            margin: 0;
        }
        .modal-links {
            margin-top: 20px;
            width: 100%;
        }
        .modal-links a {
            display: flex;
            align-items: center;
            color: #007bff;
            text-decoration: none;
            margin: 5px 0;
            font-size: 18px;
            transition: color 0.3s;
        }
        .modal-links a i {
            margin-right: 10px;
        }
        .modal-links a:hover {
            color: #0056b3;
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <header>
        <h1>Group 3</h1>
    </header>

    <nav>
        <a href="index.php">Home</a>
        <a href="logrec.php">Login Records</a>
        <a href="profile.php">Profile</a>
        <a href="index.php">Logout</a>

    </nav>

    <main>
        <div class="profiles-wrapper">
            <div class="profile-concealer"></div>
            <div class="blur" id="blur-left"></div>
            <div class="blur" id="blur-right"></div>

            <?php
            // Group 3 members with their details
            $teamMembers = [
                [
                    "name" => "Raizen Vidal",
                    "role" => "Leader",
                    "img" => "img/raizen.jpg",
                    "details_img" => "img/stat1.png",
                    "details" => "Raizen Vidal (age 20), can be also called Rai or Zen depending on your preference. Likes anything related to arts, be it drawing, painting, or paper crafts and wooden works.",
                    "contacts" => [
                        "facebook" => "https://www.facebook.com/raizen.arciaga.98",
                        "instagram" => "https://www.instagram.com/_zen_non_?igsh=MWJkdWt5eXNsajZheA==",
                        "gmail" => "eltirador0605@gmail.com"
                    ]
                ],
                [
                    "name" => "Joerieleto Locrita Jr.",
                    "role" => "Member",
                    "img" => "img/jr.jpeg",
                    "details_img" => "img/stat2.png",
                    "details" => "Joerieleto (age 21), also known as Junior. He is a very friendly and kind person.",
                    "contacts" => [
                        "facebook" => "https://www.facebook.com/nunoy.junior.1?mibextid=ZbWKwL",
                        "instagram" => "https://www.instagram.com/juniorlocrita?igsh=MW1oZXR4amVsYm85aw==",
                        "gmail" => "juniorlocrita21@gmail.com"
                    ]
                ],
                [
                    "name" => "Paul Norbert Pasia",
                    "role" => "Member",
                    "img" => "img/paul.jpg",
                    "details_img" => "img/stat3.png",
                    "details" => "Paul Norbert (age 21), also known as Paul. He is focused when it comes to group activities and owns a business.",
                    "contacts" => [
                        "facebook" => "https://www.facebook.com/paulpasia2002?mibextid=LQQJ4d",
                        "instagram" => "https://www.instagram.com/paul.pasiaa?igsh=MWhoMjl2aW9mM3hjaQ%3D%3D&utm_source=qr",
                        "gmail" => "paulpasia2002@gmail.com"
                    ]
                ],
                [
                    "name" => "Jeryll Miguel B. Sepina",
                    "role" => "Member",
                    "img" => "img/migs.png",
                    "details_img" => "img/stat4.png",
                    "details" => "Jeryll Miguel B. Sepina (age 20), prefers to be called Migs. He is a member of a marching band and enjoys spending time with his pets.",
                    "contacts" => [
                        "facebook" => "https://www.facebook.com/migz.sepina24/",
                        "instagram" => "https://www.instagram.com/migsepina/",
                        "gmail" => "migggsepina@gmail.com"
                    ]
                ],
                [
                    "name" => "Kaycelyn",
                    "role" => "Member",
                    "img" => "img/kc.png",
                    "details_img" => "img/stat5.png",
                    "details" => "Kaycelyn (age 22), also known as KC. She is an animal lover and a kind person.",
                    "contacts" => [
                        "facebook" => "https://www.facebook.com/profile.php?id=100072758562716",
                        "instagram" => "https://www.instagram.com/kaycefesarit?igsh=dnpqajdwa3FwaWI4",
                        "gmail" => "kaycelynfesarit038@gmail.com"
                    ]
                ],
            ];

            // Loop through the group members and display their profiles
            foreach ($teamMembers as $index => $member) {
                echo '<div class="profile-container">';
                echo '    <div class="profile-card" data-index="' . $index . '">';
                echo '        <img src="' . $member['img'] . '" alt="' . $member['name'] . '">';
                echo '        <h2>' . $member['name'] . '</h2>';
                echo '        <p>' . $member['role'] . '</p>';
                echo '    </div>';
                echo '    <div class="profile-details" id="details-' . $index . '">';
                echo '        <img src="' . $member['details_img'] . '">';
                echo '        <p>' . $member['details'] . '</p>';
                echo '        <a href="#" class="contacts-link" data-index="' . $index . '">Contacts</a>';
                echo '    </div>';
                echo '</div>';

            }
            ?>
        </div>
        <div class="agendas" id="chart">
          <img src="img/chart.png">
        </div>
        <!--POst method Feedback -->
        <div class="agendas" id="search">
          <form action="g3Feedback.php" method="POST">
        <label for="nickname">Nickname:</label>
        <input type="text" id="nickname" name="nickname" required>
        <br><br>
        <label for="feedback">Feedback:</label>
        <textarea id="feedback" name="feedback" required></textarea>
        <br><br>
        <input type="submit" value="Submit Feedback">


    </form>
        </div>
    </main>

    <footer>
        <p>&copy; 2024 Group 3. All rights reserved.</p>
    </footer>


    <!-- Modal for contacts -->
    <div id="contacts-modal" class="modal">
        <div class="modal-content">
            <span class="modal-close">&times;</span>
            <h2 class="modal-title">Contact Information</h2>
            <div class="modal-links" id="modal-links">
                <!-- Contact links will be put here -->
            </div>
        </div>
    </div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
    const profileCards = document.querySelectorAll('.profile-card');
    const contactsLinks = document.querySelectorAll('.contacts-link');
    const contactsModal = document.getElementById('contacts-modal');
    const welcomeModal = document.getElementById('welcome-modal');
    const closeContactsModal = contactsModal.querySelector('.modal-close');
    const closeWelcomeModal = welcomeModal.querySelector('.modal-close');
    const modalLinks = document.getElementById('modal-links');
    const blurOverlays = document.querySelectorAll('.blur');

    const teamMembers = <?php echo json_encode($teamMembers); ?>;

    function updateModalContent(index) {
        const member = teamMembers[index];
        modalLinks.innerHTML = `
            <a href="${member.contacts.facebook}" target="_blank"><i class="fab fa-facebook-f"></i> Facebook</a>
            <a href="${member.contacts.instagram}" target="_blank"><i class="fab fa-instagram"></i> Instagram</a>
            <a href="mailto:${member.contacts.gmail}"><i class="fas fa-envelope"></i> Gmail</a>
        `;
    }

    function toggleBlurOverlay(display) {
        blurOverlays.forEach(overlay => {
            overlay.style.display = display;
        });
    }

    profileCards.forEach(card => {
        card.addEventListener('click', function() {
            const index = this.getAttribute('data-index');
            const details = document.getElementById('details-' + index);

            if (details.style.display === 'block') {
                details.style.transform = 'translateX(-100%) translateY(10px)';
                setTimeout(() => {
                    details.style.display = 'none';
                }, 500);
                toggleBlurOverlay('none'); // Hide blur
            } else {
                details.style.display = 'block';
                setTimeout(() => {
                    details.style.transform = 'translateX(calc(100% - 600px)) translateY(10px)';
                }, 10);
                toggleBlurOverlay('block'); // Show blur
            }
        });
    });

    contactsLinks.forEach(link => {
        link.addEventListener('click', function(event) {
            event.preventDefault();
            const index = this.getAttribute('data-index');
            updateModalContent(index);
            contactsModal.style.display = 'flex'; // Show the contacts modal
            toggleBlurOverlay('block'); // Show blur
        });
    });

    closeContactsModal.addEventListener('click', function() {
        contactsModal.style.display = 'none'; // Hide the contacts modal
        toggleBlurOverlay('none'); // Hide blur
    });

    closeWelcomeModal.addEventListener('click', function() {
        welcomeModal.style.display = 'none'; // Hide the welcome modal
    });

    window.addEventListener('click', function(event) {
        if (event.target === contactsModal) {
            contactsModal.style.display = 'none'; // Hide the contacts modal if click outside
            toggleBlurOverlay('none'); // Hide blur
        } else if (event.target === welcomeModal) {
            welcomeModal.style.display = 'none'; // Hide the welcome modal if click outside
        }
    });

});

</script>


</body>
</html>
