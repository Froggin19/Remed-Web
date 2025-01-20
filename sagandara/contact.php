<!-- filepath: /d:/Remed Web/sagandara/contact.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ...existing code... -->
</head>
<body>
    <!-- ...existing code... -->
    <div class="col-12 col-lg-9">
        <div id="contact-container">
            <?php
            class Contact {
                public $platform;
                public $icon;
                public $link;
                public $displayText;

                public function __construct($platform, $icon, $link, $displayText) {
                    $this->platform = $platform;
                    $this->icon = $icon;
                    $this->link = $link;
                    $this->displayText = $displayText;
                }

                public static function getAllContacts() {
                    // Simulasi data dari database
                    return [
                        new Contact('Instagram', 'fa fa-instagram', 'https://www.instagram.com/sagandara_', 'sagandara_'),
                        new Contact('WhatsApp', 'fa fa-whatsapp', 'https://wa.me/1234567890', '+62 89 555 666 777'),
                        new Contact('Spotify', 'fa fa-spotify', 'https://open.spotify.com/artist/7He9GCDaXym6DJdz4HUsrZ?si=IgoW7GsyRniOc3K3Te0tpA', 'Sagandara')
                    ];
                }
            }

            $contacts = Contact::getAllContacts();
            foreach ($contacts as $contact) {
                echo '<div class="single-contact-info d-flex align-items-center">';
                echo '    <div class="icon mr-30">';
                echo '        <span class="' . $contact->icon . '"></span>';
                echo '    </div>';
                echo '    <p><a href="' . $contact->link . '" target="_blank">' . $contact->displayText . '</a></p>';
                echo '</div>';
            }
            ?>
        </div>
    </div>
    <!-- ...existing code... -->
</body>
</html>