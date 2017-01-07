	<?php
	//$contact_head		= get_field('team_head');
	//$contact_subhead	= get_field('team_subhead');
	$contact_head	= "Contattaci";
	$contact_subhead= "Lasciaci sapere cosa ne pensi di noi";
	?>
	   <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading"><?php echo $contact_head; ?></h2>
                    <h3 class="section-subheading text-muted"><?php echo $contact_subhead; ?></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Il tuo nome *" id="name" required data-validation-required-message="Per favore inserisci il tuo nome.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="La tua email *" id="email" required data-validation-required-message="Per favore inserisci la tua email.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Il tuo numero *" id="phone" required data-validation-required-message="Per favore inserisci il tuo numero di telefono.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Il tuo messaggio *" id="message" required data-validation-required-message="Per favore inserisci il tuo messaggio."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Invia messaggio</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
	
	 