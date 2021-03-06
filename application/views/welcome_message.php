<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Welcome to CodeIgniter</title>

    <style type="text/css">

    ::selection{ background-color: #E13300; color: white; }
    ::moz-selection{ background-color: #E13300; color: white; }
    ::webkit-selection{ background-color: #E13300; color: white; }

    body {
        background-color: #fff;
        margin: 40px;
        font: 13px/20px normal Helvetica, Arial, sans-serif;
        color: #4F5155;
    }

    a {
        color: #003399;
        background-color: transparent;
        font-weight: normal;
    }

    h1 {
        color: #444;
        background-color: transparent;
        border-bottom: 1px solid #D0D0D0;
        font-size: 19px;
        font-weight: normal;
        margin: 0 0 14px 0;
        padding: 14px 15px 10px 15px;
    }

    code {
        font-family: Consolas, Monaco, Courier New, Courier, monospace;
        font-size: 12px;
        background-color: #f9f9f9;
        border: 1px solid #D0D0D0;
        color: #002166;
        display: block;
        margin: 14px 0 14px 0;
        padding: 12px 10px 12px 10px;
    }

    #body{
        margin: 0 15px 0 15px;
    }

    p.footer{
        text-align: right;
        font-size: 11px;
        border-top: 1px solid #D0D0D0;
        line-height: 32px;
        padding: 0 10px 0 10px;
        margin: 20px 0 0 0;
    }

    #container{
        margin: 10px;
        border: 1px solid #D0D0D0;
        -webkit-box-shadow: 0 0 8px #D0D0D0;
    }
    </style>
</head>
<body>

<div id="container">
    <h1>Ooyala examples</h1>

    <div id="body">
        <p>Hello. If you are looking at this it means that your instance of CodeIgniter is working as expected. Here you will find a
            list of useful examples to get familiar with Ooyala technology. Before you start coding your way to the examples, be sure
            to configure your api key, api secret and else at application/config/ooyala_config.php</p>

        <p>This project is divided into two main examples. </p>
        <h3>Secure_XDR_GoogleIMA</h3>
        <p>The first one is Secure_XDR_GoogleIMA which will guide you through setting up:</p>
        <ul>
            <li> Cross device resume </li>
            <li> Google IMA integration </li>
            <li> Secure token </li>
            <li> Message bus handling </li>
        </ul>
        <p>For example number one, please hit</p>
        <code><a href="<?php echo base_url(); ?>index.php/Secure_XDR_GoogleIMA"><?php echo base_url(); ?>index.php/Secure_XDR_GoogleIMA</a></code>
        <p>The available routes are:</p>
        <code>
            <a href="<?php echo base_url(); ?>index.php/Secure_XDR_GoogleIMA/simple">/Secure_XDR_GoogleIMA/simple</a> <br>
            <a href="<?php echo base_url(); ?>index.php/Secure_XDR_GoogleIMA/player_token">/Secure_XDR_GoogleIMA/player_token</a> <br>
            <a href="<?php echo base_url(); ?>index.php/Secure_XDR_GoogleIMA/message_bus">/Secure_XDR_GoogleIMA/message_bus</a> <br>
            <a href="<?php echo base_url(); ?>index.php/Secure_XDR_GoogleIMA/message_bus_advanced">/Secure_XDR_GoogleIMA/message_bus_advanced</a> <br>
            <a href="<?php echo base_url(); ?>index.php/Secure_XDR_GoogleIMA/cross_resume">/Secure_XDR_GoogleIMA/cross_resume</a> <br>
            <a href="<?php echo base_url(); ?>index.php/Secure_XDR_GoogleIMA/google_ima">/Secure_XDR_GoogleIMA/google_ima</a> <br>
            <a href="<?php echo base_url(); ?>index.php/Secure_XDR_GoogleIMA/multi_feature">/Secure_XDR_GoogleIMA/multi_feature</a> <br>
        </code>
        <h3>Web Example</h3>
        <p>The second example is a sample web page with Discovery integration. It will guide you into some of the basics of interacting with
            the player in the client side of your application</p>
        <p>For example number two, please go to</p>
        <code><a href="<?php echo base_url(); ?>index.php/Web_Example"><?php echo base_url(); ?>index.php/Web_Example</a></code>
        <p>The available routes are:</p>
        <code>
            <a href="<?php echo base_url(); ?>index.php/Web_Example/">/Web_example</a> <br>
            <a href="<?php echo base_url(); ?>index.php/Web_Example/mobile">/Web_example/mobile</a>
        </code>


        <p>If you like, you can also check our documentation at our <a href="http://support.ooyala.com/developers//">support center</a>.</p>
    </div>
</div>

</body>
</html>