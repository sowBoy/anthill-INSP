anthill-inspire
===============
<p>
Small pirouette with doctrine / symfony 3 when flushing objects in many-to-one bidirectional relation.
We have a Profile object in many to one with version objects.
Logic would like that the profile object first be persisted and flush before the version objects but it is the opposite that works.
Go to ProfileController.php in addAction.</p>

A Symfony project created on June 17, 2017, 5:00 by <strong><a href="http://anthillinspire.fr/">Anthillinspire</a></strong></p>.
