<?php

        if(isset($_SESSION['confirmationContactForm']) && $_SESSION['confirmationContactForm'] == true){
            echo "
                <section class='notifications container-col'>
                    <div class=' pos-abs container-col gap-24'>
                        <div class=' pos-abs notification-close animate__animated'>
                            <div></div>
                            <div></div>
                        </div>
                        <div class='loader'>
                            <svg viewBox='0 0 100 100'>
                                <circle class='circle-bg' cx='50' cy='50' r='45'></circle>
                                <circle class='circle-progress' cx='50' cy='50' r='45'></circle>
                            </svg>
                            <div class='checkmark'>✔</div>
                        </div>

                        <h1 class='h-semi txt-center'>Dziękuję!</h1>
                        <h4 class='h-semi'>Pomyślnie przesłano formularz</h4>
                    </div>
                </section>
            ";
            unset($_SESSION['confirmationContactForm']);
        }

?>