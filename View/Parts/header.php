<header class="container_non_bs">
    <nav>
        <a href="">
            <img class="logo-nav" src="images/Logo.png" alt="">
        </a>

        <ul>
            <li><a href="">Accueil</a></li>
            <li><a href="">Nos CV</a></li>
            <li><a href="">Nos Portfolios</a></li>
            <li><a href="">Nos Hobbies</a></li>
        </ul>
        <a href="<?php
            if(!array_key_exists("mail",$_SESSION)){
                echo ("connection.php");
            }else{
                echo ("destroy.php");
            }
                ?>" class="btn-nav connect">
            <svg width="50" height="35" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="12" cy="12" r="12" fill="#E98B0E" />
                <g clip-path="url(#clip0_14_16)">
                    <path
                        d="M12 11.875C14.1738 11.875 15.9375 10.1113 15.9375 7.9375C15.9375 5.76367 14.1738 4 12 4C9.82617 4 8.0625 5.76367 8.0625 7.9375C8.0625 10.1113 9.82617 11.875 12 11.875ZM15.5 12.75H13.9934C13.3863 13.0289 12.7109 13.1875 12 13.1875C11.2891 13.1875 10.6164 13.0289 10.0066 12.75H8.5C6.5668 12.75 5 14.3168 5 16.25V16.6875C5 17.4121 5.58789 18 6.3125 18H17.6875C18.4121 18 19 17.4121 19 16.6875V16.25C19 14.3168 17.4332 12.75 15.5 12.75Z"
                        fill="white" />
                </g>
                <defs>
                    <clipPath id="clip0_14_16">
                        <rect width="14" height="14" fill="white" transform="translate(5 4)" />
                    </clipPath>
                </defs>
            </svg>
            <?php
            if(array_key_exists("mail",$_SESSION)){
                echo (" <h3>Se Déconnecter</h3>");
            }else{
                echo (" <h3>Se connecter</h3>");
            }
            ?>
        </a>
        <a href="" class="btn-nav contact">
            <h3>
                Nous contacter
            </h3>
        </a>
    </nav>
</header>
