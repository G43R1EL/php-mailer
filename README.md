# php-mailer
Simple PHP mailer aimed to be used on other projects.

To be defined on mailer.php:
$email => Defines the destination address
$returnURL => Redirect to this URL if success
$failURL => Redirect to this URL on error

To be defined by the caller (POST Method)
nombre => Sender name (will be included in message subjet)
email => Sender email (will be included in headers so direct response is allowed)
mensaje  => Message
