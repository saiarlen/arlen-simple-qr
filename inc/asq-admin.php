<div class="asq-wrapper">
    <div class="asq-image-container">
        <img src="<?php echo plugins_url('../assets/simple-qr.png', __FILE__) ?>" alt="simple QR">

        <h1>The Simple QR</h1>
    </div>

    <section class="asq-main-container">
        <h2><span>How To</span></h2>
        <h5 class="asq-des">Simply add below shortcode with required parameters in your theme to generate QR</h5>
        <table class="asq-table">
            <tbody class="asq-table__body">
                <tr class="asq-table__row">
                    <td><code>[qrsimple] My Text [/qrsimple]</code></td>
                    <td>Default shortcode</td>
                </tr>
                <tr class="asq-table__row">
                    <td><code>[qrsimple size="300"] My Text [/qrsimple]</code></td>
                    <td>Size of QR Code in pixels. QR is always a square; so this is both width and height.</td>
                </tr>
                <tr class="asq-table__row">
                    <td><code>[qrsimple size="300" sms="+1 234567890" ]</code></td>
                    <td>scanning the code user will be prompted to send an SMS to this number.</td>
                </tr>
                <tr class="asq-table__row">
                    <td><code>[qrsimple background="2F2F2F" border=1] My Text [/qrsimple]</code></td>
                    <td>Background color and border. Only shown on border part of the image.</td>
                </tr>
                <tr class="asq-table__row">
                    <td><code>[qrsimple tel="+1 123456789"]</code></td>
                    <td>Telephone number you want to embed in QR.</td>
                </tr>
                <tr class="asq-table__row">
                    <td><code>[qrsimple email="example@email.com"]</code></td>
                    <td>scanning the code user will be prompted to send an email to this address.</td>
                </tr>
                <tr class="asq-table__row">
                    <td><code>[qrsimple link="https://example.com"]</code></td>
                    <td>Link you want to embed in QR.</td>
                </tr>
                <tr class="asq-table__row">
                    <td><code>[qrsimple class="your_custom_class"] My Text [/qrsimple]</code></td>
                    <td>Custom class. If not defined default class will add</td>
                </tr>
                <tr class="asq-table__row">
                    <td><code>[qrsimple title="your_img_alt_text"] My Text [/qrsimple]</code></td>
                    <td>Image alt/title. If not defined default text will add</td>
                </tr>
                <tr class="asq-table__row">
                    
                    <td><code style="padding: 0;"><?php echo esc_html( "<?php do_shortcode('[qrsimple] my-txt [/qrsimple]') ?>" ) ?></code></td>
                    <td>You can use anywhere in templates</td>
                </tr>
            </tbody>
        </table>
        <p>Made with love by <b style="color: #5c5c5c;">saiarlen</b></p>
    </section>
</div>