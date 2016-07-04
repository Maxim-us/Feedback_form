<?php
    
    if( isset( $_POST['fb_name'] ) ):

        $to = 'your-mail@mail.com'; 
        $subject = 'Вам письмо';
        $message = '
                <html>
                    <head>
                        <title>' . $subject . '</title>
                    </head>
                    <body>
                        <p>Пользователь: ' . $_POST['fb_name'] . ';</p>
                        <p>E-mail: ' . $_POST['fb_email'] . ';</p>
                        <p>Сайт: ' . $_POST['fb_site'] . ';</p>
                        <p>Сообщение: ' . $_POST['fb_message'] . '</p>                        
                    </body>
                </html>
                '; 
        $headers  = "Content-type: text/html; charset=utf-8 \r\n"; 
        $headers .= "From: fb-robot <domain-mail@mail.com> \r\n";
        mail( $to, $subject, $message, $headers );

    endif;
    
?>